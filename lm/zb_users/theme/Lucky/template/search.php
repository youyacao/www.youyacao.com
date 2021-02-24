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
{* Template Name:搜索列表页 *}
{template:header}
<div id="container">
	{template:search-banner}
	<div id="ajx_content">
		<div id="main">
			<div class="post-warp">
				<div class="content">
				<div id="searchpage">{$title}{$LuckySearchSubtitle}</div>
					<div class="blog-content">
						{foreach $articles as $article}
						{template:post-search}
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
			{template:sidebar4}
			{/if}
		</div>
	</div>
</div>
{template:footer}