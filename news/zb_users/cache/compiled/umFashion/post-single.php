<?php  /* Template Name:文章页文章内容 */  ?>
<div class="post single">
<div class="post-box">
	<h1 class="post-title"><?php  echo $article->Title;  ?></h1>
	<div class="post-meta">
      <span class="author"><em><i class="iconfont author">&#xe6a1;</i><?php  echo $article->Author->StaticName;  ?></em><em><i class="iconfont time">&#xe69b;</i><?php  echo $article->Time('Y-m-d');  ?></em><em><i class="iconfont view">&#xe6a0;</i><?php  echo $article->ViewNums;  ?></em><em><i class="iconfont">&#xe6a4;</i><?php  echo $article->CommNums;  ?></em></span>
    </div>
</div>
	<div class="post-body"><?php  echo $article->Content;  ?></div>
	<?php if ($article->Tags) { ?><h5 class="post-tags">标签:<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" rel="tag"><?php  echo $tag->Name;  ?></a><?php }   ?></h5><?php } ?>
</div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>