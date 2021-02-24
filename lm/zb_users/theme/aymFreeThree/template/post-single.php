<article class="article">
	<h1 class="title">{$article.Title}</h1>
	<div class="meta">
		<span>频道：<a href="{$article.Category.Url}" title="{$article.Category.Name}">{$article.Category.Name}</a></span>
		<span>日期：<time datetime="{$article.Time('Y-m-d')}">{$article.Time('Y-m-d')}</time></span>
		<span>浏览：{$article.ViewNums}</span>
	</div>
	<div class="entry">		
		{$article.Content}		
	</div>
	{if $article.Tags}
	<div class="postTags">
		<span>关键词：</span>{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a>{/foreach}
	</div>
	{/if}
	<div class="postnavi">
		{if $article.Prev}
		<p><span>上一篇：</span><a data-type="mip" href="{$article.Prev.Url}" title="{$article.Prev.Title}">{$article.Prev.Title}</a></p>
		{/if}
		{if $article.Next}
		<p><span>下一篇：</span><a data-type="mip" href="{$article.Next.Url}" title="{$article.Next.Title}">{$article.Next.Title}</a></p>
		{/if}
	</div>
	{if !$article.IsLock}
	{template:comments}
	{/if}
</article>