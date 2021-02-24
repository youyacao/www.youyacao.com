<?php  /* Template Name:首页及列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="multi <?php  echo $type;  ?>">
<header class="header">
  <div class="container">
  	<?php 
      if($zbp->Config('umFashion')->logo){
      $logo = $zbp->Config('umFashion')->logo;
      }else{
      $logo = $host."zb_users/theme/".$theme."/style/images/logo.png";
      }
     ?>
   <?php if ($type=='article') { ?>
    <div class="logo fl">  <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>" rel="home"><img src="<?php  echo $logo;  ?>" alt="<?php  echo $name;  ?>"></a> </div>
    <?php }else{  ?>
    <h1 class="logo fl">  <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>" rel="home"><img src="<?php  echo $logo;  ?>" alt="<?php  echo $name;  ?>"></a> </h1>
    <?php } ?>
    <div class="navBar fr">
      <ul class="nav">
        <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="ssFrom">
  <form name="search" method="post" class="sform" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search"><input class="sinput" name="q" type="text" placeholder="请输入搜索关键词..."><button><i class="iconfont">&#xe6e1;</i></button></form>
</div>
<?php if ($type=='index'&&$page=='1') { ?>
<?php if ($zbp->Config('umFashion')->umSlider) { ?>
 <div class="owl-carousel owl-theme owl">
	<?php 	
        if(json_decode($umSliderArray,true)){
        $umSliderArray = json_decode($umSliderArray,true);
         ?>
        <?php  foreach ( $umSliderArray as $slider) { ?>
	<div class="item">
	 <a href="<?php  echo $slider['url'];  ?>" target="_blank" title="<?php  echo $slider['title'];  ?>">
	   <img class="owl-lazy" data-src="<?php  echo $slider['img'];  ?>" alt="<?php  echo $slider['title'];  ?>"/>
	   <div class="text"><h4><?php  echo $slider['title'];  ?></h4><?php if ($slider['info']) { ?><div class="info"><?php  echo $slider['info'];  ?></div><?php } ?></div>
	 </a>
	</div>
	<?php }   ?>
	<?php 
	}
	 ?>     
</div>
<?php } ?>
<?php } ?>
<section class="warp">
<div class="container">
<div class="orw">
 <div class="artBox">
  <div id="article" class="artPost">
    <?php  foreach ( $articles as $article) { ?>
      <?php if ($article->IsTop) { ?>
        <?php  include $this->GetTemplate('post-istop');  ?>
      <?php }else{  ?>
        <?php  include $this->GetTemplate('post-multi');  ?>
      <?php } ?>
    <?php }   ?>
    <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
  </div>
  </div>
</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>

