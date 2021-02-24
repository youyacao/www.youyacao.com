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
{* Template Name:读者墙页面 *}
{template:header}
<div id="container">
	{template:search-banner}
	<div id="ajx_content">
		<div id="main">
			<div class="warp">
				<div class="post">
					<h1 class="page-title">{$article.Title}</h1>
					<div class="main-content" rel="lightbox">
						<div class="readers">
							<div class="readers_explain">取前{$zbp->Config('Lucky')->readers_num}位好友放在此页面上作为感谢并互访交流</div>
							{php}echo Lucky_page_readers(){/php}
						</div>
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