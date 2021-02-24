
<?php  /* Template Name:文章页没图片灯箱 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="breadcrumb">
					<span>
						<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;<?php if ($type=='page') { ?>&nbsp;<?php  echo $article->Title;  ?>&nbsp;<?php }else{  ?><a href="<?php  echo $article->Category->Url;  ?>" title="<?php  echo $article->Category->Name;  ?>">&nbsp;<?php  echo $article->Category->Name;  ?>&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;正文<?php } ?>
					</span>
				</div>
				<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
					<?php  include $this->GetTemplate('post-single');  ?>
				<?php }else{  ?>
					<?php  include $this->GetTemplate('post-page');  ?>
				<?php } ?>
				<div class="clear"></div>
			</div>
		</div>
		<div id="sidebar">
			<?php  include $this->GetTemplate('user-card');  ?>
			<?php if ($zbp->Config('Lucky')->pjax=='a') { ?>
				<?php  include $this->GetTemplate('sidebar');  ?>
			<?php }else{  ?>
				<?php  include $this->GetTemplate('sidebar3');  ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>