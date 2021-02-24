
<?php  /* Template Name:首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="post-warp">
				<div class="content">
					<div class="blog-content">
					<?php if ($zbp->Config('Lucky')->sliders=='a') { ?>
						<?php if ($type=='index'&&$page=='1') { ?>
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php  if(isset($modules['slider'])){echo $modules['slider']->Content;}  ?>
								</div>
								<div class="swiper-pagination"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
						<?php } ?>
					<?php } ?>
					<?php  foreach ( $articles as $article) { ?>
						<?php if ($article->IsTop) { ?>
							<?php if ( $zbp->Config('Lucky')->twitter != 'off' && $article->Category->ID==$zbp->Config('Lucky')->twitter) { ?>
								<?php  include $this->GetTemplate('twitter');  ?>
							<?php }else{  ?>
								<?php  include $this->GetTemplate('post-istop');  ?>
							<?php } ?>
						<?php }elseif($zbp->Config('Lucky')->twitter != 'off' && $article->Category->ID==$zbp->Config('Lucky')->twitter) {  ?>
							<?php  include $this->GetTemplate('twitter');  ?>
						<?php }else{  ?>
							<?php  include $this->GetTemplate('post-multi');  ?>
						<?php } ?>
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
			<?php  include $this->GetTemplate('sidebar');  ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>