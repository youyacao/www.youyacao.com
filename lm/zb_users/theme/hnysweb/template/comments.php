{* Template Name:所有评论模板 *}
{if $socialcomment}
{$socialcomment}
{else}
<div id="comments">
	<h3>网友评论</h3>
    <!--评论框-->
    {template:commentpost}
     <!--评论列表-->
	<div class="comlist">
		<label id="AjaxCommentBegin"></label>
		{foreach $comments as $key => $comment}
			{template:comment}
		{/foreach}
		  {if $pagebar}<div class="pagebar">{template:pagebar}</div>{/if}
		<label id="AjaxCommentEnd"></label>
	</div>
</div>
{/if}