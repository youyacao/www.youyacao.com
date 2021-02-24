<label id="cmt<?php  echo $comment->ID;  ?>"></label>
<?php  /* Template Name:单条评论 */  ?>
<li class="comment even thread-even" id="comment-<?php  echo $comment->ID;  ?>">
	<div class="comment-avatar">
		<img src="<?php  echo $comment->Author->Avatar;  ?>" class="avatar scrollLoading" width="40" height="40" alt="头像" />
	</div>
	<div class="comment-container">
		<div class="comment-info">
			<a title="<?php  echo $comment->Author->Name;  ?>" rel="nofollow" target="_blank" class="comment-author-url" href="<?php  echo $comment->Author->HomePage;  ?>"><?php  echo $comment->Author->Name;  ?> <?php if ($comment->Author->Level == 1) { ?>[管理员]<?php } ?></a>
			<span><?php  echo $comment->Time();  ?></span>
			<a class="comment-reply-link" href="javascript:void(0)" onclick="zbp.comment.reply('<?php  echo $comment->ID;  ?>')">回复Ta</a>
			<div class="clr"></div>
		</div>
	</div>
	<ul class="children">
		<?php if ($comment->ParentID!=0) { ?>
				<?php 
					$newc=$zbp->GetCommentByID($comment->ParentID);
					$atid=$newc->ID;
					$atname=$newc->Name;
				 ?>
				<p>
				<a href="#comment-<?php  echo $atid;  ?>" class="comment_at" >@<?php  echo $atname;  ?></a>
				<?php $comment->Content=Lucky_Symbol($comment->Content); ?>
				<?php  echo $comment->Content;  ?>
				</p>
				<label id="AjaxComment<?php  echo $comment->ID;  ?>"></label>
			<?php }else{  ?>
				<?php $comment->Content=Lucky_Symbol($comment->Content); ?>
				<?php  echo $comment->Content;  ?>
			<?php } ?>
		<?php  foreach ( $comment->Comments as $comment) { ?>
			<?php  include $this->GetTemplate('comment');  ?>
		<?php }   ?>
	</ul>
</li>