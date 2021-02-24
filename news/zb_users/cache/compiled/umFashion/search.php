<?php  /* Template Name:搜索列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="multi <?php  echo $type;  ?>">
<header class="header">
  <div class="container">
    <div class="logo fl"> <?php 
      if($zbp->Config('umFashion')->logo){
      $logo = $zbp->Config('umFashion')->logo;
      }else{
      $logo = $host."zb_users/theme/".$theme."/style/images/logo.png";
      }
       ?> <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>" rel="home"><img src="<?php  echo $logo;  ?>" alt="<?php  echo $name;  ?>"></a> </div>
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
<section class="warp">
<div class="container">
<div class="umCrumb"><i class="iconfont">&#xe6a7;</i><span class="current">以下是<?php  echo $article->Title;  ?> 关联的文章</span></div>
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

