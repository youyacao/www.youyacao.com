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
{* Template Name:侧栏模块 *}
{if (!$module.IsHideTitle)&&($module.Name)}
<div class="widget {$module.HtmlID}">
	<div class="widget-title">
		<div class="w-t">
			{if $module.HtmlID =="divTags"}
				<i class="fa fa-tags"></i>
			{elseif $module.HtmlID =="divComments"}
				<i class="fa fa-comments"></i>
			{elseif $module.HtmlID =="divPrevious"}
				<i class="fa fa-pencil"></i>
			{elseif $module.HtmlID =="divCatalog"}
				<i class="fa-sitemap fa"></i>
			{elseif $module.HtmlID =="divLinkage"}
				<i class="fa fa-link"></i>
			{elseif $module.HtmlID =="divAuthors"}
				<i class="fa fa-users"></i>
			{elseif $module.HtmlID =="divFavorites"}
				<i class="fa fa-heartbeat"></i>
			{elseif $module.HtmlID =="divStatistics"}
				<i class="fa fa-signal"></i>
			{else}
			<i class="fa fa-bars"></i>{/if} {$module.Name}</div>
	</div>
	<div class="function">{$module.Content}</div>
</div>
{else}
{$module.Content}
{/if}