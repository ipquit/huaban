<?php
namespace App\Api\User;

use PhalApi\Api;
use App\Domain\User\User as UserDomain;
use App\Domain\User\UserSession as UserSessionDomain;
use PhalApi\Exception\BadRequestException;

/**
 * 用户插件
 * @author dogstar 20200331
 */
class User extends Api {
    public function getRules() {
        return array(
            'register' => array(
                'user_name' => array('name' => 'user_name', 'require' => true, 'min' => 1, 'max' => 20, 'desc' => '账号，账号需要唯一'),
                'user_pwd' => array('name' => 'user_pwd', 'require' => true, 'min' => 6, 'max' => 30, 'desc' => '密码最少6位'),
                'user_email' => array('name' => 'user_email', 'default' => '', 'max' => 20, 'desc' => '邮箱'),
                'user_pid' => array('name' => 'user_pid', 'default' => '1', 'max' => 10, 'desc' => '邀请码'),
            ),
            'login' => array(
                'user_name' => array('name' => 'username', 'require' => true, 'min' => 1, 'max' => 20, 'desc' => '账号'),
                'user_pwd' => array('name' => 'password', 'require' => true, 'min' => 6, 'max' => 30, 'desc' => '密码'),
            ),
            'checkSession' => array(
                'user_id' => array('name' => 'user_id', 'type' => 'int', 'require' => true, 'desc' => '用户ID'),
                'token' => array('name' => 'token', 'require' => true, 'desc' => '会话token'),
            ),
            'profile' => array(
                'user_id' => array('name' => 'user_id', 'type' => 'int', 'require' => true, 'desc' => '用户ID'),
                'token' => array('name' => 'token', 'require' => true, 'desc' => '会话token'),
            ),
        );
    }
    
    /**
     * 注册账号
     * @desc 注册一个新账号
     * @return int user_id 新账号的ID
     */
    public function register() {
        $domain = new UserDomain();
        $username = $domain->getUserByUsername($this->user_name, 'user_name');
        if ($username) {
            throw new BadRequestException($this->user_name . '该用户名已经被注册');
        }
        $useremail = $domain->getUserByUseremail($this->user_email, 'user_email');
        if ($useremail) {
            throw new BadRequestException($this->user_email . '该邮箱已经被注册');
        }
        
        $moreInfo = array(
            'user_email' => $this->user_email,
            'user_pid' => $this->user_pid,
        );
        $userId = $domain->register($this->user_name, $this->user_pwd, $moreInfo);
        
        return array('user_id' => $userId);
    }
    
    /**
     * 登录接口
     * @desc 根据账号和密码进行登录操作
     * @return boolean is_login 是否登录成功
     * @return int user_id 用户ID
     * @return string token 登录成功后的token,会话token
     * @return boolean is_login 是否登录成功
     */
    public function login() {
        $username = $this->user_name;   // 账号参数
        $password = $this->user_pwd;   // 密码参数
        
        $domain = new UserDomain();
        $user = $domain->getUserByUsername($this->user_name, 'id');
        if (!$user) {
            throw new BadRequestException($this->user_name . '账号不存在');
        }
        $user_id = intval($user['id']);
        
        $is_login = $domain->login($this->user_name, $this->user_pwd);
        $token = '';
        if ($is_login) {
            $session = new UserSessionDomain();
            $token = $session->generate($user_id);
        }
        
        return array('is_login' => $is_login, 'user_id' => $user_id, 'token' => $token);
    }
    
    /**
     * 检测登录状态
     * @desc 检测当前登录状态 
     */
    public function checkSession() {
        $user = \PhalApi\DI()->user;
        $is_login = $user->isLogin();
        return array('is_login' => $is_login);
    }
    
    /**
     * 获取我的个人信息
     * @desc 获取当前用户的个人信息
     */
    public function profile() {
        $user = \PhalApi\DI()->user;
        if (!$user->isLogin()) {
            throw new BadRequestException('账号未登录或登录token已过期');
        }
        
        $profile = $user->getProfile();
        
        return array('profile' => $profile);
    }
} 
