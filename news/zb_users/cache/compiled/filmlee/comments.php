<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<!--评论输出-->
<h3>已有 <?php  echo $article->ViewNums;  ?> 位网友参与，快来吐槽：</h3>
<label id="AjaxCommentBegin"></label>
<?php  foreach ( $comments as $key => $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>
<!--评论输出结束-->
<!--评论翻页条输出-->
<?php if ($article->CommNums>6) { ?>
<div class="pagination commentpagebar">
  <ul> 
    <?php  include $this->GetTemplate('pagebar');  ?>
  </ul>
</div><div class="clear"></div>
<?php } ?>
<label id="AjaxCommentEnd"></label>
<!--评论翻页条输出结束-->
<!--评论框-->
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('commentpost');  ?>
<?php } ?>
<!--评论框结束-->
<?php } ?>
