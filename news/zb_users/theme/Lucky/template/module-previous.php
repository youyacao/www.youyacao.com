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
{* Template Name:系统最近发表 *}
{foreach $articles as $key => $article}
	{php}$b=$key+1;{/php}
	{if $b == 1}
		<li><em class="li-icon li-icon-{$b}">{$b}</em><a href="{$article->Url}">{$article->Title}</a></li>
	{elseif $b == 2}
		<li><em class="li-icon li-icon-{$b}">{$b}</em><a href="{$article->Url}">{$article->Title}</a></li>
	{elseif $b == 3}
		<li><em class="li-icon li-icon-{$b}">{$b}</em><a href="{$article->Url}">{$article->Title}</a></li>
	{else}
		<li><em class="li-icon li-icon-{$b}">{$b}</em><a href="{$article->Url}">{$article->Title}</a></li>
	{/if}
{/foreach}