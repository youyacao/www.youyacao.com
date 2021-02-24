
<?php  /* Template Name:文章页单页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php 
		$pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|tiff?|icon?)('|\")(.*?)>/i";
		$replacement = '<a data-src=$2$3.$4$5 class="lightgallery_item" href=$2$3.$4$5><img$1 src="'.Lucky_Host().'zb_users/theme/Lucky/style/image/grey.gif" data-original=$2$3.$4$5 $6></a>';
		$content = preg_replace($pattern, $replacement, $article->Content);
		$article->Content = $content;
	 ?>
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
					<?php if ($zbp->Config('Lucky')->twitter == $article->Category->ID) { ?>
						<?php  $pageType = true;  ?>
						<?php  include $this->GetTemplate('twitter');  ?>
					<?php }else{  ?>
						<?php  include $this->GetTemplate('post-single');  ?>
					<?php } ?>
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