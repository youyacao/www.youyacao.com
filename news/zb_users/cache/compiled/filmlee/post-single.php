
<?php if ($zbp->Config('filmlee')->DisplayAd2=="1") { ?>
<div class="adflink">
	<?php  echo $zbp->Config('filmlee')->Ad2;  ?>
</div>
<?php } ?>
<div class="content-wrap">
<div class="content min-page">
	<div class="breadcrumbs">
		<a title="返回首页" href="<?php  echo $host;  ?>"><i class="fa fa-home"></i></a> <small>&gt;</small>
		<a href="<?php  echo $article->Category->Url;  ?>" title="查看 <?php  echo $article->Category->Name;  ?> 中的全部文章" ><?php  echo $article->Category->Name;  ?></a> <small>&gt;</small>
		<span class="muted"><?php  echo $article->Title;  ?></span>
	</div>
<div class="article-header"><h2 class="article-title"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h2>
	<div class="meta">
		<span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></span>
		<span class="muted"><i class="fa fa-user"></i> <a href="<?php  echo $article->Author->Url;  ?>"><?php  echo $article->Author->Name;  ?></a></span>
		<span class="muted"><i class="fa fa-clock-o"></i><?php  echo $article->Time('Y-m-d');  ?></span>
		<span class="muted"><i class="fa fa-eye"></i> <?php  echo $article->ViewNums;  ?> 次浏览</span>
		<span class="muted"><i class="fa fa-comments-o"></i> <a href="<?php  echo $article->Url;  ?>#comments"><?php  echo $article->CommNums;  ?>个评论</a></span>
	</div>
	<div class="baidufx">
		<?php  echo $zbp->Config('filmlee')->bdfx;  ?>
	</div>
</div> 
<div class="article-content">
	<?php  echo $article->Content;  ?>
</div>
<div class="article-footer">
	<div class="article-tags">
		<strong><i class="fa fa-tags"></i>本文标签：</strong><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" rel="tag" class="keytags" title="查看标签为《<?php  echo $tag->Name;  ?>》的所有文章"><?php  echo $tag->Name;  ?>,</a><?php }   ?>
	</div>
</div>
<nav class="article-nav">
	<span class="article-nav-prev"><i class="fa fa-angle-double-left"></i><?php if ($article->Prev) { ?><a href="<?php  echo $article->Prev->Url;  ?>" rel="prev"><?php  echo $article->Prev->Title;  ?></a><?php } ?></span>
	<span class="article-nav-next"><?php if ($article->Next) { ?><a href="<?php  echo $article->Next->Url;  ?>" rel="next"><?php  echo $article->Next->Title;  ?></a><?php } ?><i class="fa fa-angle-double-right"></i></span>
</nav>
</div>
<div class="related_posts">
	<div class="relates"><ul>
	<?php  foreach ( GetList(8,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
	<li><i class="fa fa-minus"></i><a target="_blank" href="<?php  echo $related->Url;  ?>"><?php  echo $related->Title;  ?></a></li>
	<?php }   ?></ul>
	</div>
</div>
<?php if ($zbp->Config('filmlee')->DisplayAd3=="1") { ?>
<div id="tv_das">
	<?php  echo $zbp->Config('filmlee')->Ad3;  ?>
</div>
<?php } ?>
<?php if (!$article->IsLock) { ?>
<div id="comments">	
	<?php  include $this->GetTemplate('comments');  ?>
	<span class="icon icon_comment" title="comment"></span>
</div>
<?php } ?>
<?php if ($zbp->Config('clublee')->DisplayAd2=="1") { ?> 
<div class="ad_s">
	<div class="ad_h_b">
		<?php  echo $zbp->Config('clublee')->Ad2;  ?>
	</div>
</div>
<?php } ?>
</div>
<aside class="sidebar">
	<?php  include $this->GetTemplate('sidebar2');  ?>
</aside>