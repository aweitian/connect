# QQ登录

## 参考 https://github.com/kuange/qqconnect

## 修改上面的依赖

## 安装方法

composer安装:
``` bash
composer require aweitian/sns-connect
```

添加公共配置:
``` php
// QQ 互联配置
'qqconnect' => [
    'access_token' => '',
    'openid' => '',
    'appid' => '',
    'appkey' => '',
    'callback' => '',
    'scope' => 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr',
    'errorReport' => true
]
```

## 示例代码

### 控制器编写:

### 登录
``` php
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
```

### 回调
``` php

$config = array(
    'access_token' => '',
    'openid' => '',
    'appid' => $app_id,
    'appkey' => $app_key,
    'callback' => 'http://3g.dailian66.com/login/qq',
    'scope' => 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr',
    'errorReport' => true
);
$qc = new Aw\SnsConnect\QQ\QC($config);
$config['access_token'] = $qc->qq_callback();
$config['openid'] = $qc->get_openid();
//var_dump($config);
$qc = new Aw\SnsConnect\QQ\QC($config);
$info = $qc->get_user_info();
var_dump($info);
```
