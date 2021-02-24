
<?php  /* Template Name:文章归档 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="post">
					<h1 class="page-title"><?php  echo $article->Title;  ?></h1>
					<div class="main-statistics" ><?php  if(isset($modules['statistics'])){echo $modules['statistics']->Content;}  ?></div>
					<div class="main-content" rel="lightbox">
						<div class="gd_on_off">
							<span id="al_expand_collapse">全部展开/折叠</span><em> (注:点击月份可以展开.)</em>
						</div>
						<ul id="archives" >
							<?php echo Lucky_page_archive_list() ?>
						</ul>
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