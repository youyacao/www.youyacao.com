
<?php  /* Template Name:相册页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
	<div id="container">
		<?php  include $this->GetTemplate('search-banner');  ?>
		<div id="ajx_content">
			<div id="main" class="xf-photo">
				<div class="warp">
					<div class="breadcrumb">
						<span>
							<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;<?php if (isset($article->Urls)) { ?><a href="<?php  echo $article->Urls;  ?>">&nbsp;相册&nbsp;&nbsp;</a><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;<?php  echo $article->Title;  ?><?php }else{  ?>&nbsp;<?php  echo $article->Title;  ?><?php } ?>
						</span>
					</div>
					<div class="post">
						<h1 class="post-title"><a href="<?php  echo $article->Url;  ?>" rel="bookmark"><?php  echo $article->Title;  ?></a></h1>
						<div class="main-content" rel="lightbox">
							<?php  echo $article->Content;  ?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
<?php  include $this->GetTemplate('footer');  ?>