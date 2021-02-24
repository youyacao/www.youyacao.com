{* Template Name:单条评论 *}
<ul class="{if $key==0}bordertop{/if}">
<li id="{$comment.ID}">
	{if $zbp->CheckPlugin('Gravatar') || $zbp->CheckPlugin('GravatarCache')}<img src="{$comment.Author.Avatar}">
		{else}{php}$randimg=rand(1,36);$randimg=$zbp->host."zb_users/theme/$theme/include/avator/$randimg.jpg";{/php}<img src="{if $comment.Author.Level<4}{$comment.Author.Avatar}{else}{$randimg}{/if}">{/if}
	<div class="clbody">
		<div class="cinfo">
			<a rel="nofollow" href="{$comment.Author.HomePage}"><h5>{$comment.Author.StaticName}</h5></a>
			<span><a rel="nofollow" href="#comments" onclick="zbp.comment.reply('{$comment.ID}')">回复</a></span>
		</div>
		<em>{$comment.Time()}</em>
		<p>{if $comment.ParentID!=0} {php} $newc=$zbp->GetCommentByID($comment->ParentID); $atid=$newc->ID; $atname=$newc->Author->StaticName; {/php}
		<a href="#comment-{$atid}" class="comment_at" rel="nofollow">@{$atname}</a> {/if}{$comment.Content}</p>
	</div>
</li>
    {foreach $comment.Comments as $comment}
    {template:comment}
    {/foreach}
</ul>