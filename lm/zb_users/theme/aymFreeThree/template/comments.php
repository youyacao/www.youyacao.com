<?php include('post-safe.php');?>{if $socialcomment}
{$socialcomment}
{else}
<section class="commentlist">
	<h3 class="boxtitle">评论留言</h3>
	{if $article.CommNums>0}
	<label id="AjaxCommentBegin"></label>
	{foreach $comments as $key => $comment}
		{template:comment}
	{/foreach}
	<div class="pagenavi">
	{template:pagebar}
	</div>
	<label id="AjaxCommentEnd"></label>
	{else}
	<p>暂时没有留言！</p>
	{/if}
</section>
{template:commentpost}
{/if}