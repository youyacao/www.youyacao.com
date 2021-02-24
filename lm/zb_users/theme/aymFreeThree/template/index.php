{template:header}
<main class="wrapper">
	<div class="inner">
		<div class="blogList">
			{foreach $articles as $article}
			<article class="blog">
			    <a href="{$article.Url}" title="{$article.Title}">
				    <div class="thumbnail" style="background-image:url({aymFreeThree_thumbnail($article)});"></div>
    				<div class="info">
    				    <div class="box">
        					<h2>{$article.Title}</h2>
        					<div class="meta">
        						<span>频道：{$article.Category.Name}</span>
        						<span>日期：<time datetime="{$article.Time('Y-m-d')}">{$article.Time('Y-m-d')}</time></span>
        						<span>浏览：{$article.ViewNums}</span>
        					</div>
        					<div class="intro">
        						<p>{aymFreeThree_intro($article,1,125,'...')}</p>
        					</div>
    					</div>
    				</div>
				</a>
			</article>
		
			{/foreach}
		</div>
		<div class="pagenavi">
			{template:pagebar}
		</div>
	</div>
</main>
{template:footer}