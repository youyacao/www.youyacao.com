<?php echo'
	<meta charset="UTF-8">
	<div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Theme ID: Lucky</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author: 小锋博客</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author URI: Www.SongHaiFeng.Com</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author QQ: 284204003</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author Email: 284204003@qq.com</h2>
	</div>
';die();?>
{* Template Name:所有评论模板 *}
<input type="hidden" id="post_id" value="{$article.ID}">
{if $socialcomment}
<div class="post-comment-list" id="post-comment-list">	<span class="icon_comment" title="comment"></span>{$socialcomment}</div>
{else}
<div class="post-comment-list" id="post-comment-list">
	<div class="comment-tab">
		<span class="come-comt"><i class="fa fa-comments"></i> 评论列表
		{if $article.CommNums==0}
		<span id="comment_count">暂无评论</span>
		{/if}
		{if $article.CommNums>0}
		<span id="comment_count">{$article.CommNums}条评论</span>
		{/if}
		</span>
	</div>
	<!--评论输出-->
	<div class="comment-list" id="comment_list">
	<ul id="thecomments">
	<label id="AjaxCommentBegin"></label>
	{foreach $comments as $key => $comment}
		{template:comment}
	{/foreach}
	{template:pagebar-c}
	<label id="AjaxCommentEnd"></label>
	</ul>
	</div> 
	<!--评论框-->
	{if !$article.IsLock}
	{template:commentpost}
	{/if}
</div>
{/if}