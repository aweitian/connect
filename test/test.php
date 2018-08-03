<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1
 * Time: 16:52
 */
require "../QQ/ErrorCase.php";
require "../QQ/Oauth.php";
require "../QQ/Recorder.php";
require "../QQ/URL.php";
require "../QQ/QC.php";

$app_id = "***************";
$app_key = "*************";

$config = array(
    'access_token' => '',
    'openid' => '',
    'appid' => $app_id,
    'appkey' => $app_key,
    'callback' => 'http://auth.example.com/login/qq',
    'scope' => 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr',
    'errorReport' => true
);
$qc = new Aw\SnsConnect\QQ\QC($config);
header("location:{$qc->qq_login()}");