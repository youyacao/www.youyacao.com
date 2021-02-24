<?php echo'
	<meta charset="UTF-8">
	<div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Theme ID: Lucky</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author: 小锋博客</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author URI: Www.SongHaiFeng.Com</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author QQ: 284204003</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author Email: 284204003@qq.com</h2>
	</div>
';die();?>
{* Template Name:公共头部 *}
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="applicable-device" content="pc,mobile" />
    <meta name="viewport" content="width=device-width,initial-scale=1.33,minimum-scale=1.0,maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="{$language}" />
	<meta name="generator" content="{$zblogphp}" />
	<script src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/{$theme}/script/jquery-2.2.4.min.js{else}{$host}zb_system/script/jquery-2.2.4.min.js{/if}" type="text/javascript"></script>
	<script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
	{if !$user.ID}
	<script src="{$host}zb_system/script/md5.js" type="text/javascript"></script>
	{/if}
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<link rel="stylesheet" href="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/Lucky/style/fonts/font-awesome.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/style/style.css" type="text/css" media="all"/>
	{if $zbp->Config('Lucky')->z_s_f_kg=="a"}
		<script src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/jquery.qrcode.min.js" type="text/javascript"></script>
	{/if}
	{if $zbp->Config('Lucky')->sliders=='a'}
		<link rel="stylesheet" href="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/swiper.min.css" type="text/css" media="all"/>
	{/if}
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" media="all" href="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/style_ie.css"/>
		<script src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/style_ie.js" type="text/javascript"></script>
    <![endif]-->
	<link rel="shortcut icon" href="{$host}favicon.ico" />
	{if $type=='index' && $page=='1'}
		<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" /> 
	{/if}
	{if $zbp->Config('Lucky')->seo=="b"}
		<title>{$name}-{$subname}</title>
	{else}
		<title>{if $type=="index"}{$name}-{$subname}{elseif $type=="category"&&$page=="1"}{$category.Name}{if $category.Metas.XF_Addtitle}-{$category.Metas.XF_Addtitle}{/if}-{$name}{elseif $type=="category"&&$page>"1"}{$category.Name}{if $category.Metas.XF_Addtitle}-{$category.Metas.XF_Addtitle}{/if}-{$name}-第{$page}页{elseif $type=="tag"&&$page=="1"}{$tag.Name}{if $tag.Metas.XF_Addtitle}-{$tag.Metas.XF_Addtitle}{/if}-{$name}{elseif $type=="tag"&&$page>"1"}{$tag.Name}{if $tag.Metas.XF_Addtitle}-{$tag.Metas.XF_Addtitle}{/if}-{$name}-第{$page}页{elseif $type=="date"&&$page=="1"}{$title} {$name}{elseif $type=="date"&&$page>"1"}{$title} {$name}{elseif $type=="article"}{$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}{if $zbp->Config('Lucky')->post_category=="a"}-{$article.Category.Name}{/if}-{$name}{elseif $type=="page"}{$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}-{$name}{if $zbp->Config('Lucky')->page_subname=="a"}-{$subname}{/if}{else}{$title}-{$name}{/if}</title>
		{if $type=='index'}
			<meta name="keywords" content="{$zbp->Config('Lucky')->keywords}" />
			<meta name="description" content="{$zbp->Config('Lucky')->description}" />
		{elseif $type=='page'}
			<meta name="keywords" content="{$article.Metas.XF_Keywords}"/>
			<meta name="description" content="{$article.Metas.XF_Description}" />
			<meta name="author" content="{$article.Author.StaticName}" />
		{elseif $type=='article'}
			<meta name="keywords" content="{$article.Metas.XF_Keywords}" />
			<meta name="description" content="{$article.Metas.XF_Description}" />
		{elseif $type=='category'}
			<meta name="keywords" content="{$category.Metas.XF_Keywords}" />
			<meta name="description" content="{$category.Metas.XF_Description}" />
		{elseif $type=='tag'}
			<meta name="keywords" content="{$tag.Metas.XF_Keywords}" />
			<meta name="description" content="{$tag.Metas.XF_Description}" />
		{else}
			<meta name="keywords" content="{$title},{$name}" />
			<meta name="description" content="{$title}-{$name}" />
		{/if}
	{/if}
	{if $zbp->Config('Lucky')->link_mobile_kg=='a'}
		<style>.footer_links {display: block!important;}#footer .themeauthor {text-align: left !important;}</style>
	{/if}
	{if $zbp->Config('Lucky')->extra_css}
		<style>{$zbp->Config('Lucky')->extra_css}</style>
	{/if}
{$header}
</head>

<!--[if IE]>
	<div class="browseupgrade">当前网页在您正在使用的浏览器下<strong>体验不佳</strong>，为了体验更好的访问效果， 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>.</div>
<![endif]-->

<body>
	<span class="mm-slideout">
		<a href="#menu" id="hamburger"><span></span></a>
		<a href="javascript:;" id="login" class="signin-loader"><i class="fa fa-user-circle-o fa-lg"></i></a>
		<div class="nav-title"><a href="{$host}" title="{$name}">{$name}</a></div>
	</span>
	<nav id="menu">
		<ul>
			{$zbp->Config('Lucky')->mobilenav}
		</ul>
	</nav>
	<div id="header_content">
		<div id="header" class="fixed-nav">
			<div id="nav"
				{if $type=='article'}
					data-type="article" data-infoid="{$article.Category.ID}" data-rootid="{if $article.Category.RootID}{$article.Category.RootID}{/if}"
				{elseif $type=='category'}
					data-type="category" data-infoid="{$category.ID}" data-rootid="{if $category.RootID}{$category.RootID}{/if}"
				{elseif $type=='page'}
					data-type="page" data-infoid="{$article.ID}"
				{elseif $type=='tag'}
					data-type="tag" data-infoid="{$tag.ID}"
				{elseif $type=='index'}
					data-type="index" data-infoid=""
				{else}
					data-type="other" data-infoid=""
				{/if}>
				<div class="logo">
					{if $type=='article' || $type=='page'}
					<h2>
						{if $zbp->Config('Lucky')->upyun == "b"}
							<a class="navbar-brand" href="{$host}" title="{$name}" >
								{if $zbp->Config('Lucky')->logo}
									<img src="{$zbp->Config('Lucky')->logo}" alt="{$name}" />
								{else}
									<img src="{$host}zb_users/theme/{$theme}/style/image/logo.png" alt="{$name}" />
								{/if}
							</a>
						{else}
							<a class="navbar-brand" href="{$host}" title="{$name}" >
								{if $zbp->Config('Lucky')->logo}
									{php}
										$logo = $zbp->Config('Lucky')->logo;
										$logo = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $logo);
									{/php}
									<img src="{$logo}" alt="{$name}" />
								{else}
									<img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/{$theme}/style/image/logo.png" alt="{$name}" />
								{/if}
							</a>
						{/if}
					</h2>
					{else}
					<h1>
						{if $zbp->Config('Lucky')->upyun == "b"}
							<a class="navbar-brand" href="{$host}" title="{$name}" >
								{if $zbp->Config('Lucky')->logo}
									<img src="{$zbp->Config('Lucky')->logo}" alt="{$name}" />
								{else}
									<img src="{$host}zb_users/theme/{$theme}/style/image/logo.png" alt="{$name}" />
								{/if}
							</a>
						{else}
							<a class="navbar-brand" href="{$host}" title="{$name}" >
								{if $zbp->Config('Lucky')->logo}
									{php}
										$logo = $zbp->Config('Lucky')->logo;
										$logo = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $logo);
									{/php}
									<img src="{$logo}" alt="{$name}" />
								{else}
									<img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/{$theme}/style/image/logo.png" alt="{$name}" />
								{/if}
							</a>
						{/if}
					</h1>
					{/if}
				</div>
				<ul class="xf_menu">{module:navbar}</ul>
				<div class="signin-loader"><i class="fa fa-user"></i> {if $user.ID>0}{$user.StaticName}{else}登录{/if}</div>
				<div class="search-on-off"><i class="fa fa-search"></i> 搜索</div>
				<div class="clear"></div>
			</div>
		</div>