<?php

namespace App\Domain\User;
use App\Model\User\User as UserModel;

/**
 * 用户
 *
 * - 可用于自动生成一个新用户
 *
 * @author dogstar 20200331
 */

class User {

    public function getUserByUsername($user_name, $select = '*') {
        $modelUserName = new UserModel();
        return $modelUserName->getDataByUser_name($user_name, $select);
    }
    public function getUserByUseremail($user_email, $select = '*') {
        $modelUserEmail = new UserModel();
        return $modelUserEmail->getDataByUser_email($user_email, $select);
    }
    
    /**
     * 注册新用户
     *
     * @param string $username 账号
     * @param string $password 密码
     * @param array $moreInfo 更多注册信息，必须在数据库表中有此字段
     * @return int 用户id
     */
    public function register($user_name, $user_pwd, $moreInfo = array()) {
        $newUserInfo = $moreInfo;
        $newUserInfo['user_name'] = $user_name;

        // $newUserInfo['salt'] = \PhalApi\Tool::createRandStr(32);
        $newUserInfo['user_pwd'] = $this->encryptPassword($user_pwd, $newUserInfo['salt']);
        $newUserInfo['user_jointime'] = $_SERVER['REQUEST_TIME'];
        $newUserInfo['user_deadtime'] = $newUserInfo['user_jointime'];
        $newUserInfo['user_logtime'] = $newUserInfo['user_jointime'];

        $userModel = new UserModel();
        $id = $userModel->insert($newUserInfo);
        
        return intval($id);
    }
    
    // 账号登录
    public function login($username, $password) {
        $user = $this->getUserByUsername($username, 'id,password,salt');
        if (!$user) {
            return false;
        }
        
        $encryptPassword = $this->encryptPassword($password, $user['salt']);
        if ($encryptPassword !== $user['password']) {
            return false;
        }
        
        return true;
    }
    
    /**
     * 获取用户信息
     * @param unknown $userId
     * @return array|unknown
     */
    public function getUserInfo($userId, $select = '*') {
        $rs = array();
        
        $userId = intval($userId);
        if ($userId <= 0) {
            return $rs;
        }
        
        $model = new UserModel();
        $rs = $model->get($userId, $select);
        
        if (empty($rs)) {
            return $rs;
        }
        
        $rs['id'] = intval($rs['id']);
        
        return $rs;
    }
    
    // 密码加密算法
    public function encryptPassword($password, $salt) {
        return md5(md5(\PhalApi\DI()->config->get('phalapi_user.common_salt')) . md5($password) . sha1($salt));
    }
    
}