<?php
return array (
  'db_type' => 'mysql',
  'db_host' => 'localhost',
  'db_name' => 'petalmovie',
  'db_user' => 'petalmovie',
  'db_pwd' => 'petalmovie',
  'db_port' => '3306',
  'db_prefix' => 'ff_',
  'default_theme' => 'default',
  'default_theme_m' => 'default_m',
  'site_name' => '花瓣影视',
  'site_path' => '/',
  'site_domain' => 'www.besoid.com',
  'site_domain_m' => '',
  'site_title' => '花瓣影视——免费在线影视点播',
  'site_keywords' => '花瓣影视,最新电影,好看的电影,在线观看,电影推荐,免费电影,电影天堂,电影下载,迅雷电影下载',
  'site_description' => '分享最新电影电视剧！免费在线观看海量高清最新电影图文视频，看电影就上花瓣影视',
  'site_email' => 'huaban@besoid.com',
  'site_copyright' => '',
  'site_hot' => '',
  'site_tongji' => '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?93e2cdf17d2be002c126db6050985b1f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>',
  'site_icp' => '',
  'admin_ads_file' => 'Runtime/Js',
  'admin_order_type' => 'addtime',
  'tmpl_cache_on' => true,
  'data_cache_type' => 'file',
  'cache_foreach' => '0',
  'cache_page_list' => '0',
  'cache_page_type' => '0',
  'cache_page_vod' => '0',
  'cache_page_news' => '0',
  'cache_page_special' => '0',
  'cache_page_user' => '0',
  'cache_page_cm' => '0',
  'cache_page_forum' => '0',
  'cache_page_images' => '0',
  'cache_foreach_prefix' => '599d8d6968295',
  'upload_path' => 'Uploads',
  'upload_style' => 'Y-m-d',
  'upload_class' => 'jpg,gif,png,jpeg',
  'upload_thumb' => 0,
  'upload_thumb_w' => '120',
  'upload_thumb_h' => '140',
  'upload_water' => false,
  'upload_water_img' => './Public/images/water.gif',
  'upload_water_pct' => '75',
  'upload_water_pos' => '9',
  'upload_face_width' => '0',
  'upload_face_height' => '0',
  'upload_http' => false,
  'upload_http_down' => '5',
  'upload_http_prefix' => '',
  'upload_ftp' => false,
  'upload_ftp_host' => '',
  'upload_ftp_user' => '',
  'upload_ftp_pass' => '',
  'upload_ftp_port' => '',
  'upload_ftp_dir' => '',
  'upload_ftp_del' => '0',
  'upload_safety' => 'hiphotos.baidu.com
pic1.qiyipic.com
pic2.qiyipic.com
pic3.qiyipic.com
img1.doubanio.com
img2.doubanio.com
img3.doubanio.com',
  'play_width' => '640',
  'play_height' => '420',
  'play_playad' => 'http://cdn.feifeicms.co/loading/3.0/',
  'play_second' => 10,
  'play_language' => '普通话,英语,粤语,韩语,日语,其它',
  'play_area' => '内地,美国,香港,台湾,日本,韩国,英国,其他',
  'play_year' => '2020,2019',
  'play_server' => 
  array (
    'down_a' => 'http://downa.feifeicms.org/',
    'down_b' => 'http://downb.feifeicms.org/',
    'down_c' => 'http://downc.feifeicms.org/',
  ),
  'play_type' => '剧情,喜剧,动作,爱情,科幻,动画,悬疑,惊悚,恐怖,犯罪,同性,音乐,歌舞,传记,历史,战争,西部,奇幻,冒险,灾难,武侠,情色',
  'play_state' => '正片,预告片,花絮',
  'play_version' => '高清版,剧场版',
  'play_jiexi' => '',
  'play_weekday' => '一,二,三,四,五,六,日',
  'collect_original' => false,
  'collect_time' => '1',
  'collect_name' => '0',
  'collect_ips' => '',
  'collect_hits' => '0',
  'collect_updown' => '0',
  'collect_gold' => '0',
  'collect_golder' => '0',
  'collect_tags' => '1',
  'collect_passwd' => '',
  'collect_forum' => '1',
  'news_type' => '多分类1,多分类2,多分类3,多分类4',
  'user_second' => '5',
  'user_replace' => '',
  'user_check' => '0',
  'url_rewrite' => '1',
  'url_router_on' => '1',
  'url_html_suffix' => '',
  'url_html' => '0',
  'url_vod_list' => 'video/{listdir}/{id}-{page}',
  'url_vod_detail' => 'Runtime/{listdir}/{id}/',
  'url_vod_play' => 'Runtime/{listdir}/{id}/{sid}-{pid}',
  'url_news_list' => 'news/{listdir}/{id}-{page}',
  'url_news_detail' => 'Runtime/{listdir}/{id}/{page}',
  'url_time' => '1',
  'url_number' => '10',
  'html_home_suffix' => '.html',
  'html_cache_on' => false,
  'html_cache_time' => 0,
  'html_read_type' => 0,
  'html_file_suffix' => '.html',
  'html_cache_index' => '1',
  'html_cache_list' => '1.5',
  'html_cache_content' => '12',
  'html_cache_play' => '12',
  'html_cache_iframe' => '12',
  'html_cache_type' => '0.5',
  'html_cache_ajax' => '12',
  '_htmls_' => 
  array (
    'home:index:index' => 
    array (
      0 => '{:action}',
      1 => 3600,
    ),
    'home:vod:type' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 1800,
    ),
    'home:news:type' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 1800,
    ),
    'home:vod:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 5400,
    ),
    'home:news:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 5400,
    ),
    'home:vod:read' => 
    array (
      0 => '{:module}_{:action}/{id|md5}',
      1 => 43200,
    ),
    'home:news:read' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
    'home:vod:play' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
    'home:my:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
  ),
  'rewrite_route' => 'list-ename-id-(:letter)===(:letter)/p1
list-ename-id-(:letter)-p-(:num)===(:letter)/p(:num)
news-read-id-(:num)-p-(:num)===zixun/(:num)-(:num)
news-read-id-(:num)===zixun/(:num)
scenario-read-id-(:num)-pid-(:num)===juqing/(:num)-(:num)
scenario-read-id-(:num)===juqing/(:num)
special-read-id-(:num)===zhuanti/(:num)
star-read-id-(:num)===mingxing/(:num)
role-read-id-(:num)===juese/(:num)
guestbook-read-id-(:num)===liuyan/(:num)
forum-read-id-(:num)===forum/(:num)
user-index-id-(:num)===user/(:num)
vod-juqing-id-(:num)===fenji/(:num)
vod-taici-id-(:num)===taici/(:num)
vod-zixun-id-(:num)===yingxun/(:num)
vod-yanyuan-id-(:num)===yanyuan/(:num)
vod-pingfen-id-(:num)===pingfen/(:num)
vod-kandian-id-(:num)===kandian/(:num)
vod-shoubo-id-(:num)===shoubo/(:num)
vod-jieju-id-(:num)===jieju/(:num)
vod-rss-id-(:num)===rss/(:num)
vod-yugao-id-(:num)===yugao/(:num)
vod-xiazai-id-(:num)===xiazai/(:num)
vod-forum-id-(:num)-p-(:num)===yingping(:num)-(:num)
vod-forum-id-(:num)===yingping/(:num)
vod-read-dir-(:letter)-id-(:letternum)===(:letter)/(:letternum)
vod-play-dir-(:letter)-id-(:num)-sid-(:num)-pid-(:num)===(:letter)/(:num)/(:num)-(:num)',
  'url_rewrite_rules' => 
  array (
    'list/ename/id' => 
    array (
      'find' => 'list-ename-id-([A-Za-z]+)',
      'replace' => '$1/p1',
    ),
    'list/ename/id/p' => 
    array (
      'find' => 'list-ename-id-([A-Za-z]+)-p-([0-9]+)',
      'replace' => '$1/p$2',
    ),
    'news/read/id/p' => 
    array (
      'find' => 'news-read-id-([0-9]+)-p-([0-9]+)',
      'replace' => 'zixun/$1-$2',
    ),
    'news/read/id' => 
    array (
      'find' => 'news-read-id-([0-9]+)',
      'replace' => 'zixun/$1',
    ),
    'scenario/read/id/pid' => 
    array (
      'find' => 'scenario-read-id-([0-9]+)-pid-([0-9]+)',
      'replace' => 'juqing/$1-$2',
    ),
    'scenario/read/id' => 
    array (
      'find' => 'scenario-read-id-([0-9]+)',
      'replace' => 'juqing/$1',
    ),
    'special/read/id' => 
    array (
      'find' => 'special-read-id-([0-9]+)',
      'replace' => 'zhuanti/$1',
    ),
    'star/read/id' => 
    array (
      'find' => 'star-read-id-([0-9]+)',
      'replace' => 'mingxing/$1',
    ),
    'role/read/id' => 
    array (
      'find' => 'role-read-id-([0-9]+)',
      'replace' => 'juese/$1',
    ),
    'guestbook/read/id' => 
    array (
      'find' => 'guestbook-read-id-([0-9]+)',
      'replace' => 'liuyan/$1',
    ),
    'forum/read/id' => 
    array (
      'find' => 'forum-read-id-([0-9]+)',
      'replace' => 'forum/$1',
    ),
    'user/index/id' => 
    array (
      'find' => 'user-index-id-([0-9]+)',
      'replace' => 'user/$1',
    ),
    'vod/juqing/id' => 
    array (
      'find' => 'vod-juqing-id-([0-9]+)',
      'replace' => 'fenji/$1',
    ),
    'vod/taici/id' => 
    array (
      'find' => 'vod-taici-id-([0-9]+)',
      'replace' => 'taici/$1',
    ),
    'vod/zixun/id' => 
    array (
      'find' => 'vod-zixun-id-([0-9]+)',
      'replace' => 'yingxun/$1',
    ),
    'vod/yanyuan/id' => 
    array (
      'find' => 'vod-yanyuan-id-([0-9]+)',
      'replace' => 'yanyuan/$1',
    ),
    'vod/pingfen/id' => 
    array (
      'find' => 'vod-pingfen-id-([0-9]+)',
      'replace' => 'pingfen/$1',
    ),
    'vod/kandian/id' => 
    array (
      'find' => 'vod-kandian-id-([0-9]+)',
      'replace' => 'kandian/$1',
    ),
    'vod/shoubo/id' => 
    array (
      'find' => 'vod-shoubo-id-([0-9]+)',
      'replace' => 'shoubo/$1',
    ),
    'vod/jieju/id' => 
    array (
      'find' => 'vod-jieju-id-([0-9]+)',
      'replace' => 'jieju/$1',
    ),
    'vod/rss/id' => 
    array (
      'find' => 'vod-rss-id-([0-9]+)',
      'replace' => 'rss/$1',
    ),
    'vod/yugao/id' => 
    array (
      'find' => 'vod-yugao-id-([0-9]+)',
      'replace' => 'yugao/$1',
    ),
    'vod/xiazai/id' => 
    array (
      'find' => 'vod-xiazai-id-([0-9]+)',
      'replace' => 'xiazai/$1',
    ),
    'vod/forum/id/p' => 
    array (
      'find' => 'vod-forum-id-([0-9]+)-p-([0-9]+)',
      'replace' => 'yingping$1-$2',
    ),
    'vod/forum/id' => 
    array (
      'find' => 'vod-forum-id-([0-9]+)',
      'replace' => 'yingping/$1',
    ),
    'vod/read/dir/id' => 
    array (
      'find' => 'vod-read-dir-([A-Za-z]+)-id-([A-Za-z0-9]+)',
      'replace' => '$1/$2',
    ),
    'vod/play/dir/id/sid/pid' => 
    array (
      'find' => 'vod-play-dir-([A-Za-z]+)-id-([0-9]+)-sid-([0-9]+)-pid-([0-9]+)',
      'replace' => '$1/$2/$3-$4',
    ),
  ),
  'url_route_rules' => 
  array (
    0 => 
    array (
      0 => '/([A-Za-z]+)\\/p1$/',
      1 => 'list/ename',
      2 => 'id',
      3 => NULL,
    ),
    1 => 
    array (
      0 => '/([A-Za-z]+)\\/p([0-9]+)$/',
      1 => 'list/ename',
      2 => 'id,p',
      3 => NULL,
    ),
    2 => 
    array (
      0 => '/zixun\\/([0-9]+)-([0-9]+)$/',
      1 => 'news/read',
      2 => 'id,p',
      3 => NULL,
    ),
    3 => 
    array (
      0 => '/zixun\\/([0-9]+)$/',
      1 => 'news/read',
      2 => 'id',
      3 => NULL,
    ),
    4 => 
    array (
      0 => '/juqing\\/([0-9]+)-([0-9]+)$/',
      1 => 'scenario/read',
      2 => 'id,pid',
      3 => NULL,
    ),
    5 => 
    array (
      0 => '/juqing\\/([0-9]+)$/',
      1 => 'scenario/read',
      2 => 'id',
      3 => NULL,
    ),
    6 => 
    array (
      0 => '/zhuanti\\/([0-9]+)$/',
      1 => 'special/read',
      2 => 'id',
      3 => NULL,
    ),
    7 => 
    array (
      0 => '/mingxing\\/([0-9]+)$/',
      1 => 'star/read',
      2 => 'id',
      3 => NULL,
    ),
    8 => 
    array (
      0 => '/juese\\/([0-9]+)$/',
      1 => 'role/read',
      2 => 'id',
      3 => NULL,
    ),
    9 => 
    array (
      0 => '/liuyan\\/([0-9]+)$/',
      1 => 'guestbook/read',
      2 => 'id',
      3 => NULL,
    ),
    10 => 
    array (
      0 => '/forum\\/([0-9]+)$/',
      1 => 'forum/read',
      2 => 'id',
      3 => NULL,
    ),
    11 => 
    array (
      0 => '/user\\/([0-9]+)$/',
      1 => 'user/index',
      2 => 'id',
      3 => NULL,
    ),
    12 => 
    array (
      0 => '/fenji\\/([0-9]+)$/',
      1 => 'vod/juqing',
      2 => 'id',
      3 => NULL,
    ),
    13 => 
    array (
      0 => '/taici\\/([0-9]+)$/',
      1 => 'vod/taici',
      2 => 'id',
      3 => NULL,
    ),
    14 => 
    array (
      0 => '/yingxun\\/([0-9]+)$/',
      1 => 'vod/zixun',
      2 => 'id',
      3 => NULL,
    ),
    15 => 
    array (
      0 => '/yanyuan\\/([0-9]+)$/',
      1 => 'vod/yanyuan',
      2 => 'id',
      3 => NULL,
    ),
    16 => 
    array (
      0 => '/pingfen\\/([0-9]+)$/',
      1 => 'vod/pingfen',
      2 => 'id',
      3 => NULL,
    ),
    17 => 
    array (
      0 => '/kandian\\/([0-9]+)$/',
      1 => 'vod/kandian',
      2 => 'id',
      3 => NULL,
    ),
    18 => 
    array (
      0 => '/shoubo\\/([0-9]+)$/',
      1 => 'vod/shoubo',
      2 => 'id',
      3 => NULL,
    ),
    19 => 
    array (
      0 => '/jieju\\/([0-9]+)$/',
      1 => 'vod/jieju',
      2 => 'id',
      3 => NULL,
    ),
    20 => 
    array (
      0 => '/rss\\/([0-9]+)$/',
      1 => 'vod/rss',
      2 => 'id',
      3 => NULL,
    ),
    21 => 
    array (
      0 => '/yugao\\/([0-9]+)$/',
      1 => 'vod/yugao',
      2 => 'id',
      3 => NULL,
    ),
    22 => 
    array (
      0 => '/xiazai\\/([0-9]+)$/',
      1 => 'vod/xiazai',
      2 => 'id',
      3 => NULL,
    ),
    23 => 
    array (
      0 => '/yingping([0-9]+)-([0-9]+)$/',
      1 => 'vod/forum',
      2 => 'id,p',
      3 => NULL,
    ),
    24 => 
    array (
      0 => '/yingping\\/([0-9]+)$/',
      1 => 'vod/forum',
      2 => 'id',
      3 => NULL,
    ),
    25 => 
    array (
      0 => '/([A-Za-z]+)\\/([A-Za-z0-9]+)$/',
      1 => 'vod/read',
      2 => 'dir,id',
      3 => NULL,
    ),
    26 => 
    array (
      0 => '/([A-Za-z]+)\\/([0-9]+)\\/([0-9]+)-([0-9]+)$/',
      1 => 'vod/play',
      2 => 'dir,id,sid,pid',
      3 => NULL,
    ),
  ),
  'seo_cm_title' => '精彩影评',
  'seo_cm_keywords' => '影评,剧评,观后感,评论',
  'seo_cm_description' => '提供很多精彩的影视评论，欢迎阅读。',
  'forum_type' => 'feifei',
  'forum_type_uyan_uid' => '1528513',
  'forum_type_changyan_appid' => 'cysXPib5E',
  'forum_type_changyan_conf' => 'prod_68505537e56f813cfafdcf88027d242e',
  'forum_seo_title' => '',
  'forum_seo_keywords' => '',
  'forum_seo_description' => '',
  'app_sub_domain_deploy' => 0,
  'app_sub_domain_rules' => '',
  'user_register' => '1',
  'user_register_check' => '0',
  'user_register_score' => '10',
  'user_register_second' => '3600',
  'user_forum' => '1',
  'user_pay_scale' => '10',
  'user_pay_small' => '5',
  'user_pay_vip_ext' => '10',
  'user_pay_vip_small' => '5',
  'user_pay_appid' => '',
  'user_pay_appkey' => '',
  'user_register_score_pid' => '0',
  'user_register_vipday' => '0',
  'user_register_welcome' => '亲爱的{username}，欢迎加入{sitename}。

  现在你可以愉快的前往 https://www.besoid.com 看电影啦，若无法点击请复制到浏览器中打开即可。
  
  微信搜索并关注我们的公众号“花瓣影视”可以获取更多信息哦！
  
  更多交流请加入QQ群866621384。',
  'ui_scenario' => '10',
  'ui_record' => '10',
  'ui_playurl' => '34',
  'ui_slide_index' => '3000',
  'ui_search_limit' => 10,
  'ui_slide_max' => '8',
  'email_host' => '',
  'email_username' => '',
  'email_password' => '',
  'email_usertest' => '',
  'email_port' => '',
  'email_secure' => '',
  'pay_alipay_account' => '',
  'pay_alipay_appid' => '',
  'pay_alipay_appkey' => '',
  'pay_wxpay_account' => '',
  'pay_wxpay_appid' => '',
  'pay_wxpay_appkey' => '',
  'pay_paypal_account' => '',
  'wx_check' => '1',
  'wx_cids' => '',
  'wx_limit' => '',
  'wx_order' => 'hits',
  'wx_token' => 'tina7265217',
  'wx_follow' => '欢迎关注花瓣影视，回复影片名称即可观看。您也可复制网址www.besoid.com到浏览器内打开。',
  'wx_none_txt' => '该影片暂未找到，我们会尽快添加！先看看别的吧！观看卡顿请刷新页面或者切换线路，如不能播放请留言具体影片名称，我们会尽快处理。',
  'wx_none_url' => 'https://www.ipquit.com',
  'wx_domain' => 'https://www.ipquit.com',
  'wx_jiexi' => '',
  'wx_item' => 
  array (
    'keyword' => 
    array (
    ),
    'title' => 
    array (
    ),
    'content' => 
    array (
    ),
    'pic' => 
    array (
    ),
    'link' => 
    array (
    ),
  ),
  'apikey_keyword' => 'bcc1921b5ab8a667',
  'apikey_douban' => '17ebce73f47f3b0a',
  'pay_card_sell' => '',
  'pay_rj_appid' => '',
  'pay_rj_appkey' => '',
  'pay_code_appid' => '',
  'pay_code_appkey' => '',
  'pay_code_type' => '',
  'pay_code_act' => '0',
  'url_list' => 'Runtime/{listdir}/{page}',
  'special_type' => '多分类1,多分类2,多分类3,多分类4',
  'star_type' => '多分类1,多分类2,多分类3,多分类4',
  'role_type' => '多分类1,多分类2,多分类3,多分类4',
  'play_buffer' => '//cdn.feifeicms.co/loading/buffer.html',
  'play_pause' => '//cdn.feifeicms.co/loading/pause.html',
  'play_live' => '',
  'cache_page_person' => '0',
  'collect_actor' => '1',
  'user_email_forum' => '1',
  'user_email_guestbook' => '1',
  'user_email_error' => '1',
  'upload_referer' => '',
);
?>