
<?php if ($zbp->Config('filmlee')->DisplayAd2=="1") { ?>
<div class="adflink">
	<?php  echo $zbp->Config('filmlee')->Ad2;  ?>
</div>
<?php } ?>
<div class="content-wrap">
<div class="content min-page">
	<div class="breadcrumbs">
		<a title="返回首页" href="<?php  echo $host;  ?>"><i class="fa fa-home"></i></a> <small>&gt;</small>
		<span class="muted"><?php  echo $article->Title;  ?></span>
</div>
<header class="article-header"><h1 class="article-title"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h1>
	<div class="meta">
		<span class="muted"><i class="fa fa-user"></i> <a href="<?php  echo $article->Author->Url;  ?>"><?php  echo $article->Author->Name;  ?></a></span>
		<time class="muted"><i class="fa fa-clock-o"></i><?php  echo $article->Time('Y-m-d');  ?></time>
		<span class="muted"><i class="fa fa-eye"></i> <?php  echo $article->ViewNums;  ?> 次浏览</span>
		<span class="muted"><i class="fa fa-comments-o"></i> <a href="<?php  echo $article->Url;  ?>#comments"><?php  echo $article->CommNums;  ?>个评论</a></span>
		<span class="muted"></span>
	</div>
</header> 
<article class="article-content">
	<?php  echo $article->Content;  ?>
</article>
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