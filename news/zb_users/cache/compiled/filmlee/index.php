<?php  include $this->GetTemplate('header');  ?>
<section class="container">
<div class="speedbar">
	<div class="pull-right"><i class="fa fa-power-off"></i><?php  echo $zbp->Config('filmlee')->denglu;  ?></div>
	<div class="toptip" id="callboard">
		<ul style="font-size:16px;margin-top: 2px;">
		<?php  echo $zbp->Config('filmlee')->gonggao;  ?>
		</ul>
	</div>
	</div>
<?php if ($zbp->Config('filmlee')->DisplayAd2=="1") { ?>
<div class="adflink">
	<?php  echo $zbp->Config('filmlee')->Ad2;  ?>
</div>
<?php } ?>
<div class="content-wrap">
	<div class="content">
<?php if ($type=='index' && $zbp->Config('filmlee')->lunbooff=="1") { ?>
	<div class="metro">
		<div class="banner">
			<?php  if(isset($modules['slide'])){echo $modules['slide']->Content;}  ?>
		</div>
	</div>
<?php } ?><?php if ($zbp->Config('filmlee')->DisplayAd1=="1") { ?>
<div id="tv_das">
	<?php  echo $zbp->Config('filmlee')->Ad1;  ?>
</div>
<?php } ?>
<?php if ($type=='index') { ?>
<div class="hot-posts">
	<h2 class="title">热门推荐</h2>
	<ul>
		<?php  echo filmlee_ViewNums();  ?>
	</ul>
</div>
<?php } ?>
<div class="pagewrapper" style="padding-top:.1px">
	<div id="cardslist" class="cardlist" role="main">
	<?php  foreach ( $articles as $article) { ?>
	<?php if ($article->IsTop) { ?>
		<?php  include $this->GetTemplate('post-istop');  ?>
	<?php }else{  ?>
		<?php  include $this->GetTemplate('post-multi');  ?>
	<?php } ?>
	<?php }   ?>
	</div>
</div>
	<div class="pagination"><ul><?php  include $this->GetTemplate('pagebar');  ?></ul></div>
</div>
</div>
<aside class="sidebar">
	<?php  include $this->GetTemplate('sidebar');  ?>
</aside>
</section>
</div>
<?php  include $this->GetTemplate('footer');  ?>
