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
{* Template Name:单条评论 *}
<li class="comment even thread-even" id="comment-{$comment.ID}">
	<div class="comment-avatar">
		<img src="{$comment.Author.Avatar}" class="avatar scrollLoading" width="40" height="40" alt="头像" />
	</div>
	<div class="comment-container">
		<div class="comment-info">
			<a title="{$comment.Author.Name}" rel="nofollow" target="_blank" class="comment-author-url" href="{$comment.Author.HomePage}">{$comment.Author.Name} {if $comment.Author.Level == 1}[管理员]{/if}</a>
			<span>{$comment.Time()}</span>
			<a class="comment-reply-link" href="javascript:void(0)" onclick="zbp.comment.reply('{$comment.ID}')">回复Ta</a>
			<div class="clr"></div>
		</div>
	</div>
	<ul class="children">
		{if $comment.ParentID!=0}
				{php}
					$newc=$zbp->GetCommentByID($comment->ParentID);
					$atid=$newc->ID;
					$atname=$newc->Name;
				{/php}
				<p>
				<a href="#comment-{$atid}" class="comment_at" >@{$atname}</a>
				{php}$comment->Content=Lucky_Symbol($comment->Content);{/php}
				{$comment.Content}
				</p>
				<label id="AjaxComment{$comment.ID}"></label>
			{else}
				{php}$comment->Content=Lucky_Symbol($comment->Content);{/php}
				{$comment.Content}
			{/if}
		{foreach $comment.Comments as $comment}
			{template:comment}
		{/foreach}
	</ul>
</li>