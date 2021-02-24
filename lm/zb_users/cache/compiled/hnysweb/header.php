
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<?php if ($zbp->Config('hnysweb')->seo) { ?><?php  include $this->GetTemplate('post-header-seo');  ?><?php }else{  ?>
<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
<?php } ?>
<?php if ($zbp->Config('hnysweb')->stylecolor=='1') { ?>
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/index.css"><?php }elseif($zbp->Config('hnysweb')->stylecolor=='2') {  ?> 
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/index2.css"><?php }elseif($zbp->Config('hnysweb')->stylecolor=='3') {  ?>
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/index3.css"><?php }elseif($zbp->Config('hnysweb')->stylecolor=='4') {  ?>
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/index4.css"><?php }elseif($zbp->Config('hnysweb')->stylecolor=='5') {  ?>
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/index5.css"><?php } ?>
<?php if ($zbp->Config( 'hnysweb' )->favicon) { ?>
<link rel="apple-touch-icon" type="image/x-icon" href="<?php  echo $zbp->Config( 'hnysweb' )->favicon;  ?>">
<link rel="shortcut icon" type="image/x-icon" href="<?php  echo $zbp->Config( 'hnysweb' )->favicon;  ?>">
<link rel="icon"  type="image/x-icon" href="<?php  echo $zbp->Config( 'hnysweb' )->favicon;  ?>">
<?php } ?>
<script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js"></script>
<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js"></script>
<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/js/jquery.lazyload.js?v=1.9.1"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/js/hnysnet.js"></script>
<?php if ($zbp->Config( 'hnysweb' )->headdiyon) { ?>
<?php  echo $zbp->Config( 'hnysweb' )->headdiy;  ?>
<?php } ?>
<?php if ($zbp->Config( 'hnysweb' )->spm_xz =='2') { ?>
<style>
@media screen and (min-width:1820px){.main #mainContent{width:1530px}.spm .qrcode li,.weburl li{width:14.6666%!important}}@media screen and (min-width:1600px){.spm .qrcode li,.weburl li{width:18%}}
</style>
<?php } ?>
  
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6e606d8481f77f858f575e066a105304";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  
<?php  echo $header;  ?></head><body>
<div class="container">
<div class="left-bar">
<?php if ($zbp->Config('hnysweb')->logoon) { ?>
<div class="logo"><a href="<?php  echo $host;  ?>"><img alt="<?php  echo $name;  ?>" src="<?php  echo $zbp->Config('hnysweb')->logo;  ?>"></a></div>
<?php } ?>
<div class="sitename <?php if ($zbp->Config('hnysweb')->logoon) { ?>wap<?php } ?>">
  <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a><button id="cate" class="iconfont">&#xe607;</button><?php if ($zbp->Config('hnysweb')->sousuo) { ?><button id="seach" class="iconfont">&#xe6a4;</button><?php } ?> <?php if ($zbp->Config('hnysweb')->loginon) { ?><button id="user" class="iconfont">&#xe60f;</button><?php } ?>
</div>
<?php if ($zbp->Config('hnysweb')->sousuo) { ?>
<div class="search">
  <form name="search" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
    <input type="text" class="s" name="q" id="edtSearch" value="" placeholder="请输入搜索内容！"/>
    <input type="submit" name="submit" id="btnPost" class="submit" value="搜索"/>
  </form>
</div>
<?php } ?> 
 <?php if ($zbp->Config('hnysweb')->loginon) { ?>
<div class="login"><?php if ($user->ID>0) { ?>
    <?php if ($zbp->Config('hnysweb')->member) { ?><a href="<?php  echo $zbp->Config('hnysweb')->member;  ?>" target="_blank">个人中心</a>
    <?php }else{  ?><a href="<?php  echo $host;  ?>zb_system/admin/index.php" target="_blank">后台管理</a><?php } ?>
    <a href="<?php  echo BuildSafeCmdURL('act=logout');  ?>">退出</a>
    <?php }else{  ?><a href="<?php if ($zbp->Config('hnysweb')->login) { ?><?php  echo $zbp->Config('hnysweb')->login;  ?><?php }else{  ?><?php  echo $host;  ?>zb_system/login.php<?php } ?>" class="loginb">登陆</a>
    <?php if ($zbp->Config('hnysweb')->register) { ?><a href="<?php  echo $zbp->Config('hnysweb')->register;  ?>" class="loginb">注册</a><?php } ?>
    <?php } ?>
</div><?php } ?>
<?php  include $this->GetTemplate('post-header-dh');  ?>
</div><div class="main">