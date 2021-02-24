<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>
{if $zbp->Config('filmlee')->DisplayAd2=="1"}
<div class="adflink">
	{$zbp->Config('filmlee')->Ad2}
</div>
{/if}
<div class="content-wrap">
<div class="content min-page">
	<div class="breadcrumbs">
		<a title="返回首页" href="{$host}"><i class="fa fa-home"></i></a> <small>&gt;</small>
		<a href="{$article.Category.Url}" title="查看 {$article.Category.Name} 中的全部文章" >{$article.Category.Name}</a> <small>&gt;</small>
		<span class="muted">{$article.Title}</span>
	</div>
<div class="article-header"><h2 class="article-title"><a href="{$article.Url}">{$article.Title}</a></h2>
	<div class="meta">
		<span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
		<span class="muted"><i class="fa fa-user"></i> <a href="{$article.Author.Url}">{$article.Author.Name}</a></span>
		<span class="muted"><i class="fa fa-clock-o"></i>{$article.Time('Y-m-d')}</span>
		<span class="muted"><i class="fa fa-eye"></i> {$article.ViewNums} 次浏览</span>
		<span class="muted"><i class="fa fa-comments-o"></i> <a href="{$article.Url}#comments">{$article.CommNums}个评论</a></span>
	</div>
	<div class="baidufx">
		{$zbp->Config('filmlee')->bdfx}
	</div>
</div> 
<div class="article-content">
	{$article.Content}
</div>
<div class="article-footer">
	<div class="article-tags">
		<strong><i class="fa fa-tags"></i>本文标签：</strong>{foreach $article.Tags as $tag}<a href="{$tag.Url}" rel="tag" class="keytags" title="查看标签为《{$tag.Name}》的所有文章">{$tag.Name},</a>{/foreach}
	</div>
</div>
<nav class="article-nav">
	<span class="article-nav-prev"><i class="fa fa-angle-double-left"></i>{if $article.Prev}<a href="{$article.Prev.Url}" rel="prev">{$article.Prev.Title}</a>{/if}</span>
	<span class="article-nav-next">{if $article.Next}<a href="{$article.Next.Url}" rel="next">{$article.Next.Title}</a>{/if}<i class="fa fa-angle-double-right"></i></span>
</nav>
</div>
<div class="related_posts">
	<div class="relates"><ul>
	{foreach GetList(8,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}
	<li><i class="fa fa-minus"></i><a target="_blank" href="{$related.Url}">{$related.Title}</a></li>
	{/foreach}</ul>
	</div>
</div>
{if $zbp->Config('filmlee')->DisplayAd3=="1"}
<div id="tv_das">
	{$zbp->Config('filmlee')->Ad3}
</div>
{/if}
{if !$article.IsLock}
<div id="comments">	
	{template:comments}
	<span class="icon icon_comment" title="comment"></span>
</div>
{/if}
{if $zbp->Config('clublee')->DisplayAd2=="1"} 
<div class="ad_s">
	<div class="ad_h_b">
		{$zbp->Config('clublee')->Ad2}
	</div>
</div>
{/if}
</div>
<aside class="sidebar">
	{template:sidebar2}
</aside>