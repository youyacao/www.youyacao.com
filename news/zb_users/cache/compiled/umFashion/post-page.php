<?php  /* Template Name:页页面内容 */  ?>
<div class="post single">
<div class="post-box">
	<h1 class="post-title"><?php  echo $article->Title;  ?></h1>
</div>
	<div class="post-body"><?php  echo $article->Content;  ?></div>
</div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>