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
{* Template Name:相册页面 *}
{template:header}
	<div id="container">
		{template:search-banner}
		<div id="ajx_content">
			<div id="main" class="xf-photo">
				<div class="warp">
					<div class="breadcrumb">
						<span>
							<a href="{$host}" title="{$name}">&nbsp;首页&nbsp;</a>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;{if isset($article->Urls)}<a href="{$article.Urls}">&nbsp;相册&nbsp;&nbsp;</a><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;{$article.Title}{else}&nbsp;{$article.Title}{/if}
						</span>
					</div>
					<div class="post">
						<h1 class="post-title"><a href="{$article.Url}" rel="bookmark">{$article.Title}</a></h1>
						<div class="main-content" rel="lightbox">
							{$article.Content}
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
{template:footer}