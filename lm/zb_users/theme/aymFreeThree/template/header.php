<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="applicable-device" content="pc,mobile"/>
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,user-scalable=no">
<title>{$name}-{$title}</title>
<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" media="screen"/>
<script src="{$host}zb_system/script/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/scripts/html5shiv.v3.72.min.js"></script>
<![endif]-->
<script src="{$host}zb_users/theme/{$theme}/scripts/global.js" type="text/javascript"></script>
{if $type=='index' && $page == '1'}
<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
{$header}
</head>
<body>
<header class="header">
	<div class="inner">
		<div class="logo">
		    {if $type == 'index'}
			<h1><a href="{$host}" title="{$name}"{if $zbp->Config('aymFreeThree')->logo} style="background-image:url({$zbp->Config('aymFreeThree')->logo});"{/if}>{$name}</a></h1>
			{else}
			<a href="{$host}" title="{$name}"{if $zbp->Config('aymFreeThree')->logo} style="background-image:url({$zbp->Config('aymFreeThree')->logo});"{/if}>{$name}</a>
			{/if}
		</div>
		<nav class="nav" id="nav">
			<ul>
				{module:navbar}
			</ul>
		</nav>
		<div class="navBtn">
			<span></span>
		</div>
	</div>
</header>
{if $zbp->Config('aymFreeThree')->banner}
<div class="banner" style="background-image:url({$zbp->Config('aymFreeThree')->banner});"></div>
{/if}
<div class="breadcrumb">
    <div class="inner">
        <div class="box">
        	<a href="{$host}" title="{$name}"><i class="fas fa-home"></i> 首页</a>
        	{if $type == 'index'}
        	 &gt; {$subname}
        	{elseif $type == 'category'}
        	{aymFreeThree_breadcrumb($category->ID)}
        	{elseif $type =="article"}
        	{aymFreeThree_breadcrumb($article->Category->ID)}
        	{else}
        	 &gt; {$title}	
        	{/if}
    	</div>
	</div>
</div>