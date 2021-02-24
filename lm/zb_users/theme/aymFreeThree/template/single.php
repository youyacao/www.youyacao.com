{template:header}
<main class="wrapper">
	<div class="inner">
		{if $article.Type==ZC_POST_TYPE_ARTICLE}
		{template:post-single}
		{else}
		{template:post-page}
		{/if}
	</div>
</main>
{template:footer}