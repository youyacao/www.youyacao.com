{* Template Name:页页面内容 *}
<div class="post single">
<div class="post-box">
	<h1 class="post-title">{$article.Title}</h1>
</div>
	<div class="post-body">{$article.Content}</div>
</div>
{if !$article.IsLock}
{template:comments}
{/if}