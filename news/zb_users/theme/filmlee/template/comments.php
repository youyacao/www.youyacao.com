<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>{if $socialcomment}
{$socialcomment}
{else}
<!--评论输出-->
<h3>已有 {$article.ViewNums} 位网友参与，快来吐槽：</h3>
<label id="AjaxCommentBegin"></label>
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}
<!--评论输出结束-->
<!--评论翻页条输出-->
{if $article.CommNums>6}
<div class="pagination commentpagebar">
  <ul> 
    {template:pagebar}
  </ul>
</div><div class="clear"></div>
{/if}
<label id="AjaxCommentEnd"></label>
<!--评论翻页条输出结束-->
<!--评论框-->
{if !$article.IsLock}
{template:commentpost}
{/if}
<!--评论框结束-->
{/if}
