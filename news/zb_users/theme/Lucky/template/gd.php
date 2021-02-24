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
{* Template Name:文章归档 *}
{template:header}
<div id="container">
	{template:search-banner}
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="post">
					<h1 class="page-title">{$article.Title}</h1>
					<div class="main-statistics" >{module:statistics}</div>
					<div class="main-content" rel="lightbox">
						<div class="gd_on_off">
							<span id="al_expand_collapse">全部展开/折叠</span><em> (注:点击月份可以展开.)</em>
						</div>
						<ul id="archives" >
							{php}echo Lucky_page_archive_list(){/php}
						</ul>
					</div>
				</div>
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