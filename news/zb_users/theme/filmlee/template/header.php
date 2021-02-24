<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	{if $type=='article'}<title>{$title} - {$article.Category.Name} - {$name}</title>
	{php}
	$aryTags = array();
	foreach($article->Tags as $key){
	$aryTags[] = $key->Name;
	}
	if(count($aryTags)>0){
		$keywords = implode(',',$aryTags);
	} else {
		$keywords = $zbp->name;
	}
	$description = preg_replace('/[\r\n]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
	{/php}<meta name="keywords" content="{$keywords}"/>
	<meta name="description" content="{$description}"/>
	<meta name="author" content="{$article.Author.StaticName}">
	{elseif $type=='page'}<title>{$title} - {$name} - {$subname}</title>
	<meta name="keywords" content="{$title},{$name}"/>
	{php}
	$description = preg_replace('/[\r\n]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
	{/php}
	<meta name="description" content="{$description}"/>
	<meta name="author" content="{$article.Author.StaticName}">
	{elseif $type=='index'}<title>{$name}{if $page>'1'} - 第{$pagebar.PageNow}页{/if} - {$subname}</title>
	<meta name="description" content="{$zbp->Config('filmlee')->Description}" />
	<meta name="keywords" content="{$zbp->Config('filmlee')->Keywords}" />
	<meta name="author" content="{$zbp.members[1].StaticName}">
	{else}<title>{$title} - {$name}{if $page>'1'} - 第{$pagebar.PageNow}页{/if}</title>
	<meta name="Keywords" content="{$title},{$name}">
	<meta name="description" content="{$title}_{$name}_{$zbp->Config('filmlee')->Description}">
	<meta name="author" content="{$zbp.members[1].StaticName}">
	{/if}<meta name="generator" content="{$zblogphp}" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" type="text/css" />
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/jquery.lazyload.js"></script>
	{if $type=='index'&& $zbp->Config('filmlee')->lunbooff=="1"}<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/owl.carousel.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		var owl = $('.banner'); 
		owl.owlCarousel({
		items: 1,
		loop:true,
		nav:true,
		animateOut: 'fadeOut',
		autoplay:true,
		autoplayTimeout:5000,
			responsive:{    
				765:{
					items:1
					}
				}
			});
		 });
	</script>
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	{/if}<script>
	$().ready(function(){
		$("article img").lazyload({
			placeholder : "{$host}zb_users/theme/{$theme}/style/images/grey.gif",
			effect : "fadeIn",
			failurelimit : 5
		});
	});
	</script>
	<!--[if lt IE 9]><script src="//cdn.staticfile.org/html5shiv/3.7.0/html5shiv.js"></script><![endif]-->
	{$header}
</head>
<body {if $zbp->Config('filmlee')->web_bg=="1"} style="background-color: #f7f7f7;background-image: url({$host}zb_users/theme/{$theme}/style/images/body_bg.png);" {/if}>
<div id="header_content">
<header {if $zbp->Config('filmlee')->header_bg=="1"} style="background: url('{$host}zb_users/theme/{$theme}/style/images/header_bg.jpg') center 0px repeat-x;background-size: cover;background-repeat:repeat-x\9" {/if} id="header" class="header">
	<div class="container-inner">
		<div class="g-logo"><a href="{$host}"><h1><img title="{$name}" alt="{$name}" src="{php}filmlee_Get_Logo('logo','png');{/php}"></h1></a></div>
	</div>
<div id="toubuads"></div>
<div id="nav-header" class="navbar" data-type="{if $type=='article'}article{elseif $type=='page'}page{elseif $type=='tag'}tag{elseif $type=='index'}index{else}category{/if}"  data-infoid="{if $type=='article'}{$article.Category.ID} {elseif $type=='page'}{$article.ID}{elseif $type=='tag'}{$tag.ID}{elseif $type=='index'}{elseif $type=='search'} {else}{$category.ID}{/if}">
	<div class="screen-mini"><button data-type="screen-nav" class="btn btn-inverse screen-nav"><i class="fa fa-list"></i></button></div>
	<ul class="nav">
		{module:navbar}
		{if $zbp->Config('filmlee')->claosen=="1"}<li style="float:right;"><div class="toggle-search"><a href="{$zbp->Config('filmlee')->weiboadd}" target="_blank">{$zbp->Config('filmlee')->aosen}</a></div></li>{/if}
	</ul>
</div>
  {$zbp->Config('filmlee')->cmtongji}
  
</header>