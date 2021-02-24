<article class="article">
	<h1 class="title"><?php  echo $article->Title;  ?></h1>
	<div class="meta">
		<span>频道：<a href="<?php  echo $article->Category->Url;  ?>" title="<?php  echo $article->Category->Name;  ?>"><?php  echo $article->Category->Name;  ?></a></span>
		<span>日期：<time datetime="<?php  echo $article->Time('Y-m-d');  ?>"><?php  echo $article->Time('Y-m-d');  ?></time></span>
		<span>浏览：<?php  echo $article->ViewNums;  ?></span>
	</div>
	<div class="entry">		
		<?php  echo $article->Content;  ?>		
	</div>
	<?php if ($article->Tags) { ?>
	<div class="postTags">
		<span>关键词：</span><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Name;  ?>"><?php  echo $tag->Name;  ?></a><?php }   ?>
	</div>
	<?php } ?>
	<div class="postnavi">
		<?php if ($article->Prev) { ?>
		<p><span>上一篇：</span><a data-type="mip" href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a></p>
		<?php } ?>
		<?php if ($article->Next) { ?>
		<p><span>下一篇：</span><a data-type="mip" href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a></p>
		<?php } ?>
	</div>
	<?php if (!$article->IsLock) { ?>
	<?php  include $this->GetTemplate('comments');  ?>
	<?php } ?>
</article>