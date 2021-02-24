{* Template Name:文章页文章内容 *}
<div class="post single">
<div class="post-box">
	<h1 class="post-title">{$article.Title}</h1>
	<div class="post-meta">
      <span class="author"><em><i class="iconfont author">&#xe6a1;</i>{$article.Author.StaticName}</em><em><i class="iconfont time">&#xe69b;</i>{$article.Time('Y-m-d')}</em><em><i class="iconfont view">&#xe6a0;</i>{$article.ViewNums}</em><em><i class="iconfont">&#xe6a4;</i>{$article.CommNums}</em></span>
    </div>
</div>
	<div class="post-body">{$article.Content}</div>
	{if $article.Tags}<h5 class="post-tags">标签:{foreach $article.Tags as $tag}<a href="{$tag.Url}" rel="tag">{$tag.Name}</a>{/foreach}</h5>{/if}
</div>
{if !$article.IsLock}
{template:comments}
{/if}