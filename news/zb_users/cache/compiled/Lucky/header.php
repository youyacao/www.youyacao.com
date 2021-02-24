
<?php  /* Template Name:公共头部 */  ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="applicable-device" content="pc,mobile" />
    <meta name="viewport" content="width=device-width,initial-scale=1.33,minimum-scale=1.0,maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="<?php  echo $language;  ?>" />
	<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
	<script src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/zblogphp.js" type="text/javascript"></script>
	<?php if (!$user->ID) { ?>
	<script src="<?php  echo $host;  ?>zb_system/script/md5.js" type="text/javascript"></script>
	<?php } ?>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/fonts/font-awesome.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/style/style.css" type="text/css" media="all"/>
	<?php if ($zbp->Config('Lucky')->z_s_f_kg=="a") { ?>
		<script src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery.qrcode.min.js" type="text/javascript"></script>
	<?php } ?>
	<?php if ($zbp->Config('Lucky')->sliders=='a') { ?>
		<link rel="stylesheet" href="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/swiper.min.css" type="text/css" media="all"/>
	<?php } ?>
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/style_ie.css"/>
		<script src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/style_ie.js" type="text/javascript"></script>
    <![endif]-->
	<link rel="shortcut icon" href="<?php  echo $host;  ?>favicon.ico" />
	<?php if ($type=='index' && $page=='1') { ?>
		<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" /> 
	<?php } ?>
	<?php 

$post_category = $zbp->Config("Lucky")->post_category;
$page_subname = $zbp->Config("Lucky")->page_subname;
switch($type) {
    case "index":
        $strTitle = $zbp->name."-".$zbp->subname;
        if($page != 1) {
            $strTitle .= "-第".$page."页";
        }
        break;
    case "category":
        $addTitle = $category->Metas->XF_Addtitle ?: "";
        $strTitle = $category->Name.$addTitle."-".$zbp->name;
        if($page != 1) {
            $strTitle .= "-第".$page."页";
        }
        break;
    case "tag":
        $addTitle = $tag->Metas->XF_Addtitle ?: "";
        $strTitle = $tag->Name.$addTitle."-".$zbp->name;
        if($page != 1) {
            $strTitle .= "-第".$page."页";
        }
        break;
    case "date":
        if($page == 1) {
            $strTitle = $zbp->title."-".$zbp->name;
        } else {
            $tmpTitle = explode(" ", $zbp->title);
            $strTitle = $tmpTitle[0]."-".$zbp->name."-第".$page."页";
        }
        break;
    case "article":
        $addTitle = $article->Metas->XF_Addtitle ?: "";
        $catTitle = $post_category=="a" ? "-".$article->Category->Name : "";
        $strTitle = $article->Title.$addTitle.$catTitle."-".$zbp->name;
        break;
    case "page":
        $addTitle = $article->Metas->XF_Addtitle ?: "";
        $subTitle = $page_subname=="a" ? "-".$zbp->subname : "";
        $strTitle = $article->Title.$addTitle."-".$zbp->name.$subTitle;
        break;
    default:
        $subTitle = $page_subname=="a" ? "-".$zbp->subname : "";
        $strTitle = $title."-".$zbp->name.$subTitle;
        break;
}

echo "<title>".$strTitle."</title>". "\r\n";

if($type && isset($Lucky_SEO)) {
	echo $Lucky_SEO;
}

 ?>
	<?php if ($zbp->Config('Lucky')->extra_css) { ?>
		<style><?php  echo $zbp->Config('Lucky')->extra_css;  ?></style>
	<?php } ?>
<?php  echo $header;  ?>
</head>
<!--[if IE]>
	<div class="browseupgrade">当前网页在您正在使用的浏览器下<strong>体验不佳</strong>，为了体验更好的访问效果， 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>.</div>
<![endif]-->
<body>
	<span class="mm-slideout">
		<a href="#menu" id="hamburger"><span></span></a>
		<a href="javascript:;" id="login" class="signin-loader"><i class="fa fa-user-circle-o fa-lg"></i></a>
		<div class="nav-title"><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a></div>
	</span>
	<nav id="menu">
		<ul>
			<?php  echo $zbp->Config('Lucky')->mobilenav;  ?>
		</ul>
	</nav>
	<div id="header_content">
		<div id="header" class="fixed-nav">
			<div id="nav"
				<?php if ($type=='article') { ?>
					data-type="article" data-infoid="<?php  echo $article->Category->ID;  ?>" data-rootid="<?php if ($article->Category->RootID) { ?><?php  echo $article->Category->RootID;  ?><?php } ?>"
				<?php }elseif($type=='category') {  ?>
					data-type="category" data-infoid="<?php  echo $category->ID;  ?>" data-rootid="<?php if ($category->RootID) { ?><?php  echo $category->RootID;  ?><?php } ?>"
				<?php }elseif($type=='page') {  ?>
					data-type="page" data-infoid="<?php  echo $article->ID;  ?>"
				<?php }elseif($type=='tag') {  ?>
					data-type="tag" data-infoid="<?php  echo $tag->ID;  ?>"
				<?php }elseif($type=='index') {  ?>
					data-type="index" data-infoid=""
				<?php }else{  ?>
					data-type="other" data-infoid=""
				<?php } ?>>
				<div class="logo">
					<?php if ($type=='article' || $type=='page') { ?><h2><?php }else{  ?><h1><?php } ?>
						<a class="navbar-brand" href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>" >
							<?php if ($zbp->Config('Lucky')->logo) { ?>
								<img src="<?php  echo Lucky_Host($zbp->Config('Lucky')->logo);  ?>" alt="<?php  echo $name;  ?>" />
							<?php }else{  ?>
								<img src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/style/image/logo.png" alt="<?php  echo $name;  ?>" />
							<?php } ?>
						</a>
					<?php if ($type=='article' || $type=='page') { ?></h2><?php }else{  ?></h1><?php } ?>
				</div>
				<ul class="xf_menu"><?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?></ul>
				<div class="signin-loader"><i class="fa fa-user"></i> <?php if ($user->ID>0) { ?><?php  echo $user->StaticName;  ?><?php }else{  ?>登录<?php } ?></div>
				<div class="search-on-off"><i class="fa fa-search"></i> 搜索</div>
				<div class="clear"></div>
			</div>
		</div>