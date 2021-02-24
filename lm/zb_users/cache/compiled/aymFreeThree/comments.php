<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<section class="commentlist">
	<h3 class="boxtitle">评论留言</h3>
	<?php if ($article->CommNums>0) { ?>
	<label id="AjaxCommentBegin"></label>
	<?php  foreach ( $comments as $key => $comment) { ?>
		<?php  include $this->GetTemplate('comment');  ?>
	<?php }   ?>
	<div class="pagenavi">
	<?php  include $this->GetTemplate('pagebar');  ?>
	</div>
	<label id="AjaxCommentEnd"></label>
	<?php }else{  ?>
	<p>暂时没有留言！</p>
	<?php } ?>
</section>
<?php  include $this->GetTemplate('commentpost');  ?>
<?php } ?>