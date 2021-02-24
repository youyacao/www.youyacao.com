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
<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
<link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" media="screen"/>
<script src="<?php  echo $host;  ?>zb_system/script/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/scripts/html5shiv.v3.72.min.js"></script>
<![endif]-->
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/scripts/global.js" type="text/javascript"></script>
<?php if ($type=='index' && $page == '1') { ?>
<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
<?php  echo $header;  ?>
</head>
<body>
<header class="header">
	<div class="inner">
		<div class="logo">
		    <?php if ($type == 'index') { ?>
			<h1><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"<?php if ($zbp->Config('aymFreeThree')->logo) { ?> style="background-image:url(<?php  echo $zbp->Config('aymFreeThree')->logo;  ?>);"<?php } ?>><?php  echo $name;  ?></a></h1>
			<?php }else{  ?>
			<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"<?php if ($zbp->Config('aymFreeThree')->logo) { ?> style="background-image:url(<?php  echo $zbp->Config('aymFreeThree')->logo;  ?>);"<?php } ?>><?php  echo $name;  ?></a>
			<?php } ?>
		</div>
		<nav class="nav" id="nav">
			<ul>
				<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
			</ul>
		</nav>
		<div class="navBtn">
			<span></span>
		</div>
	</div>
</header>
<?php if ($zbp->Config('aymFreeThree')->banner) { ?>
<div class="banner" style="background-image:url(<?php  echo $zbp->Config('aymFreeThree')->banner;  ?>);"></div>
<?php } ?>
<div class="breadcrumb">
    <div class="inner">
        <div class="box">
        	<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><i class="fas fa-home"></i> 首页</a>
        	<?php if ($type == 'index') { ?>
        	 &gt; <?php  echo $subname;  ?>
        	<?php }elseif($type == 'category') {  ?>
        	<?php  echo aymFreeThree_breadcrumb($category->ID);  ?>
        	<?php }elseif($type =="article") {  ?>
        	<?php  echo aymFreeThree_breadcrumb($article->Category->ID);  ?>
        	<?php }else{  ?>
        	 &gt; <?php  echo $title;  ?>	
        	<?php } ?>
    	</div>
	</div>
</div>