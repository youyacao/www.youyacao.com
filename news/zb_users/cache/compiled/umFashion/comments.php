<?php  /* Template Name:所有评论模板 */  ?>
<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<?php if ($article->CommNums>0) { ?>
<div class="cmBox t">
  <ul class="msg msghead">
    <li class="tbname"><?php  echo $lang['umFashion']['comment_list'];  ?>:</li>
  </ul>
</div>
<?php } ?>
<label id="AjaxCommentBegin"></label>
<!--评论输出-->
<?php if ($article->CommNums>0) { ?>
<div class="cmBox">
 <?php  foreach ( $comments as $key => $comment) { ?>
  <?php  include $this->GetTemplate('comment');  ?>
 <?php }   ?> 
</div>
<?php } ?>
<!--评论翻页条输出-->
<div class="pagebar commentpagebar"> <?php  include $this->GetTemplate('pagebar');  ?> </div>
<label id="AjaxCommentEnd"></label>
<?php  include $this->GetTemplate('commentpost');  ?>
<?php } ?>