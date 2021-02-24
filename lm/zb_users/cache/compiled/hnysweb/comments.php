<?php  /* Template Name:所有评论模板 */  ?>
<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<div id="comments">
	<h3>网友评论</h3>
    <!--评论框-->
    <?php  include $this->GetTemplate('commentpost');  ?>
     <!--评论列表-->
	<div class="comlist">
		<label id="AjaxCommentBegin"></label>
		<?php  foreach ( $comments as $key => $comment) { ?>
			<?php  include $this->GetTemplate('comment');  ?>
		<?php }   ?>
		  <?php if ($pagebar) { ?><div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div><?php } ?>
		<label id="AjaxCommentEnd"></label>
	</div>
</div>
<?php } ?>