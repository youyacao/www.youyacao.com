
<?php  /* Template Name:列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div id="container">
	<?php  include $this->GetTemplate('search-banner');  ?>
	<div id="ajx_content">
		<div id="main">
			<div class="post-warp">
				<div class="breadcrumb">
					<span>
						<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;
						<?php if ($type=='tag') { ?>
							<a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?>&nbsp;</a>
						<?php }elseif($type=='author') {  ?>
							<a href="<?php  echo $author->Url;  ?>" title="<?php  echo $author->StaticName;  ?>"><?php  echo $author->StaticName;  ?>&nbsp;</a>
						<?php }elseif($type=='category') {  ?>
							<?php if ($category->RootID) { ?>
								<a href="<?php  echo $categorys[$category->RootID]->Url;  ?>" title="<?php  echo $categorys[$category->RootID]->Name;  ?>"><?php  echo $categorys[$category->RootID]->Name;  ?>&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;<a href="<?php  echo $category->Url;  ?>" title="<?php  echo $category->Name;  ?>"><?php  echo $category->Name;  ?>&nbsp;</a>
							<?php }else{  ?>
								<a href="<?php  echo $category->Url;  ?>" title="<?php  echo $category->Name;  ?>"><?php  echo $category->Name;  ?>&nbsp;</a>
							<?php } ?>
						<?php }elseif($type=='index') {  ?>
							列表页
						<?php }else{  ?>
							其它
						<?php } ?>
					</span>
				</div>
				<div class="content">
					<div class="blog-content">
					<?php  foreach ( $articles as $article) { ?>
						<?php if ($article->IsTop) { ?>
							<?php if ($zbp->Config('Lucky')->twitter != 'off' && $article->Category->ID==$zbp->Config('Lucky')->twitter) { ?>
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
		<?php if ($zbp->Config('Lucky')->pjax=='a') { ?>
			<?php  include $this->GetTemplate('sidebar');  ?>
		<?php }else{  ?>
			<?php  include $this->GetTemplate('sidebar2');  ?>
		<?php } ?>
		</div>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>