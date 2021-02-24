
<?php  /* Template Name:标签云页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="post">
					<h1 class="page-title"><?php  echo $article->Title;  ?></h1>
					<div class="main-content" rel="lightbox">
						<ul class="tag-clouds"><?php echo Lucky_page_tags() ?></ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="sidebar">
			<?php  include $this->GetTemplate('user-card');  ?>
			<?php if ($zbp->Config('Lucky')->pjax=='a') { ?>
			<?php  include $this->GetTemplate('sidebar');  ?>
			<?php }else{  ?>
			<?php  include $this->GetTemplate('sidebar2');  ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>