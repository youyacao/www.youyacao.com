<?php  /* Template Name:公共头部 */  ?> 
<!DOCTYPE html>
<html lang="<?php  echo $lang['lang_bcp47'];  ?>">
<head>
  

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<?php if ($type=='article') { ?>
<title><?php  echo $title;  ?>-<?php  echo $article->Category->Name;  ?>-<?php  echo $name;  ?></title>
<meta name="keywords" content="<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?>,<?php }   ?>" />
<meta name="description" content="<?php  echo $article->Title;  ?>是<?php  echo $name;  ?>中一篇关于<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?><?php }   ?>的文章，欢迎您阅读和评论,<?php  echo $name;  ?>" />
<?php }elseif($type=='page') {  ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
<?php $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...'); ?>
<meta name="description" content="<?php  echo $description;  ?>"/>
<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
<?php }elseif($type=='index') {  ?>
<title><?php  echo $name;  ?><?php if ($page>'1') { ?>-第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>-<?php  echo $subname;  ?></title>
<meta name="Keywords" content="<?php  echo $zbp->Config('umFashion')->gjc;  ?>">
<meta name="description" content="<?php  echo $zbp->Config('umFashion')->ms;  ?>">
<?php }elseif($type=='category') {  ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
<meta name="description" content="<?php  echo $category->Intro;  ?>">
<?php }else{  ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php } ?>
<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/um.css" type="text/css" media="all"/>
<script src="<?php  echo $host;  ?>zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script> 
<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script> 
<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script> 
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/umhtml.js" type="text/javascript"></script> 
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
<style type="text/css">
#mnav li a:hover,.function .function_t:after,#mnav li a:hover,.navBar .nav li a:before,.navBar .nav li > ul li a:hover,.owl-theme .owl-dots .owl-dot span,.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot.active:hover span, .owl-theme .owl-dots .owl-dot:hover span,.ssFrom button,span.now-page,a:hover span.page{background:#<?php  echo $zbp->Config('umFashion')->zs;  ?>;}
input.button,#divTags.function a:hover{ border:1px solid #<?php  echo $zbp->Config('umFashion')->zs;  ?>;background:#<?php  echo $zbp->Config('umFashion')->zs;  ?>;}
.ssFrom .sform{ border:1px solid #<?php  echo $zbp->Config('umFashion')->zs;  ?>;}
#divNavBar a.on,#divNavBar a:hover{background:#<?php  echo $zbp->Config('umFashion')->fs;  ?>}
a:hover,.function a:hover,.post .post-head .post-meta span a,
#BlogCopyRight a:hover,#BlogPowerBy a:hover,.navBar .nav li a.active,.ssBtn:hover,.nav-btn:hover{color:#<?php  echo $zbp->Config('umFashion')->zs;  ?>}
.container{<?php if ($zbp->Config('umFashion')->kd) { ?>max-width:<?php  echo $zbp->Config('umFashion')->kd;  ?>px<?php }else{  ?>max-width:1000px<?php } ?>}
</style>
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6e606d8481f77f858f575e066a105304";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
