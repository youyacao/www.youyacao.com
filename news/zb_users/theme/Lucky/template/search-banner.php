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
{* Template Name:搜索和Banner *}
<div id="search">
	<div class="search-content">
		<form name="search" method="post" class="s-form" action="{$host}zb_system/cmd.php?act=search">
			<input name="q" size="11" autocomplete="off" id="edtSearch" type="text" class="s-key" placeholder="请输入关键词，回车即可搜索。" style="border:0"/>
			<ul id="search-result" data-reusltnum="8"></ul>
			<input value="搜 索" id="btnPost" type="submit"  class="s-sub tra"  style="display:none"/>
		</form>
	</div>
	<div class="search-bg"></div>
</div>
{if $zbp->Config('Lucky')->bg=='a'}
	<div id="img_url"></div>
	<div id="img_holder" class="loadit"></div>
{/if}