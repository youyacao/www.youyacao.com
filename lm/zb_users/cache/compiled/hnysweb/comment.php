<label id="cmt<?php  echo $comment->ID;  ?>"></label><?php  /* Template Name:单条评论 */  ?>
<ul class="<?php if ($key==0) { ?>bordertop<?php } ?>">
<li id="<?php  echo $comment->ID;  ?>">
	<?php if ($zbp->CheckPlugin('Gravatar') || $zbp->CheckPlugin('GravatarCache')) { ?><img src="<?php  echo $comment->Author->Avatar;  ?>">
		<?php }else{  ?><?php $randimg=rand(1,36);$randimg=$zbp->host."zb_users/theme/$theme/include/avator/$randimg.jpg"; ?><img src="<?php if ($comment->Author->Level<4) { ?><?php  echo $comment->Author->Avatar;  ?><?php }else{  ?><?php  echo $randimg;  ?><?php } ?>"><?php } ?>
	<div class="clbody">
		<div class="cinfo">
			<a rel="nofollow" href="<?php  echo $comment->Author->HomePage;  ?>"><h5><?php  echo $comment->Author->StaticName;  ?></h5></a>
			<span><a rel="nofollow" href="#comments" onclick="zbp.comment.reply('<?php  echo $comment->ID;  ?>')">回复</a></span>
		</div>
		<em><?php  echo $comment->Time();  ?></em>
		<p><?php if ($comment->ParentID!=0) { ?> <?php  $newc=$zbp->GetCommentByID($comment->ParentID); $atid=$newc->ID; $atname=$newc->Author->StaticName;  ?>
		<a href="#comment-<?php  echo $atid;  ?>" class="comment_at" rel="nofollow">@<?php  echo $atname;  ?></a> <?php } ?><?php  echo $comment->Content;  ?></p>
	</div>
</li>
    <?php  foreach ( $comment->Comments as $comment) { ?>
    <?php  include $this->GetTemplate('comment');  ?>
    <?php }   ?>
</ul>