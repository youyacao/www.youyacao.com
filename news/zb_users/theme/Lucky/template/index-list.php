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
{* Template Name:列表页 *}
{template:header}
<div id="container">
	{template:search-banner}
	<div id="ajx_content">
		<div id="main">
			<div class="post-warp">
				<div class="breadcrumb">
					<span>
						<a href="{$host}" title="{$name}">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;
						{if $type=='tag'}
							<a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}&nbsp;</a>
						{elseif $type=='author'}
							<a href="{$author.Url}" title="{$author.StaticName}">{$author.StaticName}&nbsp;</a>
						{elseif $type=='category'}
							{if $category.RootID}
								<a href="{$categorys[$category->RootID].Url}" title="{$categorys[$category->RootID].Name}">{$categorys[$category->RootID].Name}&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;<a href="{$category.Url}" title="{$category.Name}">{$category.Name}&nbsp;</a>
							{else}
								<a href="{$category.Url}" title="{$category.Name}">{$category.Name}&nbsp;</a>
							{/if}
						{elseif $type=='index'}
							列表页
						{else}
							其它
						{/if}
					</span>
				</div>
				<div class="content">
					<div class="blog-content">
					{foreach $articles as $article}
						{if $article.IsTop}
							{if $zbp.Config('Lucky').twitter != 'off' && $article.Category.ID==$zbp.Config('Lucky').twitter}
								{template:twitter}
							{else}
								{template:post-istop}
							{/if}
						{elseif $zbp.Config('Lucky').twitter != 'off' && $article.Category.ID==$zbp.Config('Lucky').twitter}
							{template:twitter}
						{else}
							{template:post-multi}
						{/if}
					{/foreach}
					</div>
				</div>
				{template:pagebar}
				<div id="pagination" class="noajx">
				{if $pagebar}
					{foreach $pagebar.buttons as $k=>$v}
						{if $k=='›'}
							<a href="{$v}" title="点击加载下一页" id="post_over"><i class="fa fa-chevron-circle-down"></i>  加载更多</a>
						{/if}
					{/foreach}
				{/if}
				</div>
				<div id="loadmore"><a href="javascript:;"><i class="fa fa-spinner"></i>  正在加载</a></div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="sidebar">
			{template:user-card}
		{if $zbp->Config('Lucky')->pjax=='a'}
			{template:sidebar}
		{else}
			{template:sidebar2}
		{/if}
		</div>
	</div>
</div>
{template:footer}