
<?php  /* Template Name:所有评论模板 */  ?>
<input type="hidden" id="post_id" value="<?php  echo $article->ID;  ?>">
<?php if ($socialcomment) { ?>
<div class="post-comment-list" id="post-comment-list">	<span class="icon_comment" title="comment"></span><?php  echo $socialcomment;  ?></div>
<?php }else{  ?>
<div class="post-comment-list" id="post-comment-list">
	<div class="comment-tab">
		<span class="come-comt"><i class="fa fa-comments"></i> 评论列表
		<?php if ($article->CommNums==0) { ?>
		<span id="comment_count">暂无评论</span>
		<?php } ?>
		<?php if ($article->CommNums>0) { ?>
		<span id="comment_count"><?php  echo $article->CommNums;  ?>条评论</span>
		<?php } ?>
		</span>
	</div>
	<!--评论输出-->
	<div class="comment-list" id="comment_list">
	<ul id="thecomments">
	<label id="AjaxCommentBegin"></label>
	<?php  foreach ( $comments as $key => $comment) { ?>
		<?php  include $this->GetTemplate('comment');  ?>
	<?php }   ?>
	<?php  include $this->GetTemplate('pagebar-c');  ?>
	<label id="AjaxCommentEnd"></label>
	</ul>
	</div> 
	<!--评论框-->
	<?php if (!$article->IsLock) { ?>
	<?php  include $this->GetTemplate('commentpost');  ?>
	<?php } ?>
</div>
<?php } ?>