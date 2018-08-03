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
   'appid' => '',
   'appkey' => '',
   'callback' => '',
   'scope' => 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr',
   'errorReport' => true
);
$qc = new Aw\SnsConnect\QQ\QC($config);
echo $qc->qq_login();
//https://graph.qq.com/oauth2.0/authorize?
response_type=code&
client_id=&
redirect_uri=&
state=c07c641645c15af7261ecf14b8527f47&
scope=get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo,check_page_fans,add_t,add_pic_t,del_t,get_repost_list,get_info,get_other_info,get_fanslist,get_idolist,add_idol,del_idol,get_tenpay_addr

```

### 回调
``` php
$qc = new Aw\SnsConnect\QQ\QC($config);
echo $qc->qq_callback();    // access_token
echo $qc->get_openid();     // openid
// 待处理用户逻辑
//$this->success('登录成功', url('/'));

```

### 支持不同回调url

``` php
$qc->qq_login($another_callback_url);
```
