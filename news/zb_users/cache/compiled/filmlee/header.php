<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php  echo $language;  ?>" lang="<?php  echo $language;  ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<?php if ($type=='article') { ?><title><?php  echo $title;  ?> - <?php  echo $article->Category->Name;  ?> - <?php  echo $name;  ?></title>
	<?php 
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
	 ?><meta name="keywords" content="<?php  echo $keywords;  ?>"/>
	<meta name="description" content="<?php  echo $description;  ?>"/>
	<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
	<?php }elseif($type=='page') {  ?><title><?php  echo $title;  ?> - <?php  echo $name;  ?> - <?php  echo $subname;  ?></title>
	<meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
	<?php 
	$description = preg_replace('/[\r\n]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
	 ?>
	<meta name="description" content="<?php  echo $description;  ?>"/>
	<meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
	<?php }elseif($type=='index') {  ?><title><?php  echo $name;  ?><?php if ($page>'1') { ?> - 第<?php  echo $pagebar->PageNow;  ?>页<?php } ?> - <?php  echo $subname;  ?></title>
	<meta name="description" content="<?php  echo $zbp->Config('filmlee')->Description;  ?>" />
	<meta name="keywords" content="<?php  echo $zbp->Config('filmlee')->Keywords;  ?>" />
	<meta name="author" content="<?php  echo $zbp->members[1]->StaticName;  ?>">
	<?php }else{  ?><title><?php  echo $title;  ?> - <?php  echo $name;  ?><?php if ($page>'1') { ?> - 第<?php  echo $pagebar->PageNow;  ?>页<?php } ?></title>
	<meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
	<meta name="description" content="<?php  echo $title;  ?>_<?php  echo $name;  ?>_<?php  echo $zbp->Config('filmlee')->Description;  ?>">
	<meta name="author" content="<?php  echo $zbp->members[1]->StaticName;  ?>">
	<?php } ?><meta name="generator" content="<?php  echo $zblogphp;  ?>" />
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" media="screen" type="text/css" />
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery.lazyload.js"></script>
	<?php if ($type=='index'&& $zbp->Config('filmlee')->lunbooff=="1") { ?><script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/owl.carousel.min.js"></script>
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
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<?php } ?><script>
	$().ready(function(){
		$("article img").lazyload({
			placeholder : "<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/grey.gif",
			effect : "fadeIn",
			failurelimit : 5
		});
	});
	</script>
	<!--[if lt IE 9]><script src="//cdn.staticfile.org/html5shiv/3.7.0/html5shiv.js"></script><![endif]-->
	<?php  echo $header;  ?>
</head>
<body <?php if ($zbp->Config('filmlee')->web_bg=="1") { ?> style="background-color: #f7f7f7;background-image: url(<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/body_bg.png);" <?php } ?>>
<div id="header_content">
<header <?php if ($zbp->Config('filmlee')->header_bg=="1") { ?> style="background: url('<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/header_bg.jpg') center 0px repeat-x;background-size: cover;background-repeat:repeat-x\9" <?php } ?> id="header" class="header">
	<div class="container-inner">
		<div class="g-logo"><a href="<?php  echo $host;  ?>"><h1><img title="<?php  echo $name;  ?>" alt="<?php  echo $name;  ?>" src="<?php filmlee_Get_Logo('logo','png'); ?>"></h1></a></div>
	</div>
<div id="toubuads"></div>
<div id="nav-header" class="navbar" data-type="<?php if ($type=='article') { ?>article<?php }elseif($type=='page') {  ?>page<?php }elseif($type=='tag') {  ?>tag<?php }elseif($type=='index') {  ?>index<?php }else{  ?>category<?php } ?>"  data-infoid="<?php if ($type=='article') { ?><?php  echo $article->Category->ID;  ?> <?php }elseif($type=='page') {  ?><?php  echo $article->ID;  ?><?php }elseif($type=='tag') {  ?><?php  echo $tag->ID;  ?><?php }elseif($type=='index') {  ?><?php }elseif($type=='search') {  ?> <?php }else{  ?><?php  echo $category->ID;  ?><?php } ?>">
	<div class="screen-mini"><button data-type="screen-nav" class="btn btn-inverse screen-nav"><i class="fa fa-list"></i></button></div>
	<ul class="nav">
		<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
		<?php if ($zbp->Config('filmlee')->claosen=="1") { ?><li style="float:right;"><div class="toggle-search"><a href="<?php  echo $zbp->Config('filmlee')->weiboadd;  ?>" target="_blank"><?php  echo $zbp->Config('filmlee')->aosen;  ?></a></div></li><?php } ?>
	</ul>
</div>
  <?php  echo $zbp->Config('filmlee')->cmtongji;  ?>
  
</header>