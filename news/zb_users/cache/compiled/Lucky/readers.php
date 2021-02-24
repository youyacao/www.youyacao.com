
<?php  /* Template Name:读者墙页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="post">
					<h1 class="page-title"><?php  echo $article->Title;  ?></h1>
					<div class="main-content" rel="lightbox">
						<div class="readers">
							<div class="readers_explain">取前<?php  echo $zbp->Config('Lucky')->readers_num;  ?>位好友放在此页面上作为感谢并互访交流</div>
							<?php echo Lucky_page_readers() ?>
						</div>
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