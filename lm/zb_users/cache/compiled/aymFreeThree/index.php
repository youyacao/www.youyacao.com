<?php  include $this->GetTemplate('header');  ?>
<main class="wrapper">
	<div class="inner">
		<div class="blogList">
			<?php  foreach ( $articles as $article) { ?>
			<article class="blog">
			    <a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>">
				    <div class="thumbnail" style="background-image:url(<?php  echo aymFreeThree_thumbnail($article);  ?>);"></div>
    				<div class="info">
    				    <div class="box">
        					<h2><?php  echo $article->Title;  ?></h2>
        					<div class="meta">
        						<span>频道：<?php  echo $article->Category->Name;  ?></span>
        						<span>日期：<time datetime="<?php  echo $article->Time('Y-m-d');  ?>"><?php  echo $article->Time('Y-m-d');  ?></time></span>
        						<span>浏览：<?php  echo $article->ViewNums;  ?></span>
        					</div>
        					<div class="intro">
        						<p><?php  echo aymFreeThree_intro($article,1,125,'...');  ?></p>
        					</div>
    					</div>
    				</div>
				</a>
			</article>
		
			<?php }   ?>
		</div>
		<div class="pagenavi">
			<?php  include $this->GetTemplate('pagebar');  ?>
		</div>
	</div>
</main>
<?php  include $this->GetTemplate('footer');  ?>