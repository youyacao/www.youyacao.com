
<?php  /* Template Name:搜索列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="post-warp">
				<div class="content">
				<div id="searchpage"><?php  echo $title;  ?><?php  echo $LuckySearchSubtitle;  ?></div>
					<div class="blog-content">
						<?php  foreach ( $articles as $article) { ?>
						<?php  include $this->GetTemplate('post-search');  ?>
						<?php }   ?>
					</div>
				</div>
				<?php  include $this->GetTemplate('pagebar');  ?>
				<div id="pagination" class="noajx">
				<?php if ($pagebar) { ?>
					<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
						<?php if ($k=='›') { ?>
							<a href="<?php  echo $v;  ?>" title="点击加载下一页" id="post_over"><i class="fa fa-chevron-circle-down"></i>  加载更多</a>
						<?php } ?>
					<?php }   ?>
				<?php } ?>
				</div>
				<div id="loadmore"><a href="javascript:;"><i class="fa fa-spinner"></i>  正在加载</a></div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="sidebar">
			<?php  include $this->GetTemplate('user-card');  ?>
			<?php if ($zbp->Config('Lucky')->pjax=='a') { ?>
			<?php  include $this->GetTemplate('sidebar');  ?>
			<?php }else{  ?>
			<?php  include $this->GetTemplate('sidebar4');  ?>
			<?php } ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>