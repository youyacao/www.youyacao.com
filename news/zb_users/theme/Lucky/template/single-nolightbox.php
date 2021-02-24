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
{* Template Name:文章页没图片灯箱 *}
{template:header}
<div id="container">
	{template:search-banner}
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="breadcrumb">
					<span>
						<a href="{$host}" title="{$name}">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;{if $type=='page'}&nbsp;{$article.Title}&nbsp;{else}<a href="{$article.Category.Url}" title="{$article.Category.Name}">&nbsp;{$article.Category.Name}&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;正文{/if}
					</span>
				</div>
				{if $article.Type==ZC_POST_TYPE_ARTICLE}
					{template:post-single}
				{else}
					{template:post-page}
				{/if}
				<div class="clear"></div>
			</div>
		</div>
		<div id="sidebar">
			{template:user-card}
			{if $zbp->Config('Lucky')->pjax=='a'}
				{template:sidebar}
			{else}
				{template:sidebar3}
			{/if}
		</div>
	</div>
</div>
{template:footer}