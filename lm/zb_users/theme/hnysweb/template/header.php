<?php echo'404';die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
{if $zbp->Config('hnysweb')->seo}{template:post-header-seo}{else}
<title>{$name}-{$title}</title>
{/if}
{if $zbp->Config('hnysweb')->stylecolor=='1'}
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/index.css">{elseif $zbp->Config('hnysweb')->stylecolor=='2'} 
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/index2.css">{elseif $zbp->Config('hnysweb')->stylecolor=='3'}
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/index3.css">{elseif $zbp->Config('hnysweb')->stylecolor=='4'}
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/index4.css">{elseif $zbp->Config('hnysweb')->stylecolor=='5'}
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/index5.css">{/if}
{if $zbp->Config( 'hnysweb' )->favicon}
<link rel="apple-touch-icon" type="image/x-icon" href="{$zbp->Config( 'hnysweb' )->favicon}">
<link rel="shortcut icon" type="image/x-icon" href="{$zbp->Config( 'hnysweb' )->favicon}">
<link rel="icon"  type="image/x-icon" href="{$zbp->Config( 'hnysweb' )->favicon}">
{/if}
<script src="{$host}zb_system/script/jquery-2.2.4.min.js"></script>
<script src="{$host}zb_system/script/zblogphp.js"></script>
<script src="{$host}zb_system/script/c_html_js_add.php"></script>
<script src="{$host}zb_users/theme/{$theme}/style/js/jquery.lazyload.js?v=1.9.1"></script>
<script src="{$host}zb_users/theme/{$theme}/style/js/hnysnet.js"></script>
{if $zbp->Config( 'hnysweb' )->headdiyon}
{$zbp->Config( 'hnysweb' )->headdiy}
{/if}
{if $zbp->Config( 'hnysweb' )->spm_xz =='2'}
<style>
@media screen and (min-width:1820px){.main #mainContent{width:1530px}.spm .qrcode li,.weburl li{width:14.6666%!important}}@media screen and (min-width:1600px){.spm .qrcode li,.weburl li{width:18%}}
</style>
{/if}
  
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?6e606d8481f77f858f575e066a105304";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  
</head><body>
<div class="container">
<div class="left-bar">
{if $zbp->Config('hnysweb')->logoon}
<div class="logo"><a href="{$host}"><img alt="{$name}" src="{$zbp->Config('hnysweb')->logo}"></a></div>
{/if}
<div class="sitename {if $zbp->Config('hnysweb')->logoon}wap{/if}">
  <a href="{$host}" title="{$name}">{$name}</a><button id="cate" class="iconfont">&#xe607;</button>{if $zbp->Config('hnysweb')->sousuo}<button id="seach" class="iconfont">&#xe6a4;</button>{/if} {if $zbp->Config('hnysweb')->loginon}<button id="user" class="iconfont">&#xe60f;</button>{/if}
</div>
{if $zbp->Config('hnysweb')->sousuo}
<div class="search">
  <form name="search" method="post" action="{$host}zb_system/cmd.php?act=search">
    <input type="text" class="s" name="q" id="edtSearch" value="" placeholder="请输入搜索内容！"/>
    <input type="submit" name="submit" id="btnPost" class="submit" value="搜索"/>
  </form>
</div>
{/if} 
 {if $zbp->Config('hnysweb')->loginon}
<div class="login">{if $user.ID>0}
    {if $zbp->Config('hnysweb')->member}<a href="{$zbp->Config('hnysweb')->member}" target="_blank">个人中心</a>
    {else}<a href="{$host}zb_system/admin/index.php" target="_blank">后台管理</a>{/if}
    <a href="{BuildSafeCmdURL('act=logout')}">退出</a>
    {else}<a href="{if $zbp->Config('hnysweb')->login}{$zbp->Config('hnysweb')->login}{else}{$host}zb_system/login.php{/if}" class="loginb">登陆</a>
    {if $zbp->Config('hnysweb')->register}<a href="{$zbp->Config('hnysweb')->register}" class="loginb">注册</a>{/if}
    {/if}
</div>{/if}
{template:post-header-dh}
</div><div class="main">