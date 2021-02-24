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
{* Template Name:列表页单条置顶文章 *}
{if $zbp->Config('Lucky')->upyun == "b"}
	{php}
		IMAGE::getPics($article,200,130,3);
		$temp=mt_rand(1,5);
		$temp=$zbp->host."zb_users/theme/$theme/style/img/$temp.jpg";
	{/php}
	<div class="post-box tra">
	<div class="top"></div>
		<div class="post-thumb">
			<div class="post-cate tra">
				<ul class="post-categories"><li><a href="{$article.Category.Url}" title="{$article.Category.Name}" rel="category tag">{$article.Category.Name}</a></li></ul>
			</div>
			{if $article->IMAGE_COUNT>0}
				<a href="{$article.Url}" rel="bookmark" title="{$article.Title}">
					<img class="scrollLoading" src="{$host}zb_users/theme/Lucky/style/image/grey.gif" data-original="{$article.IMAGE[0]}" title="{$article.Title}" alt="{$article.Title}" />
				</a>
			{else}
				<a href="{$article.Url}" rel="bookmark" title="{$article.Title}">
					<img class="scrollLoading" src="{$host}zb_users/theme/Lucky/style/image/grey.gif" data-original="{$temp}" title="{$article.Title}" alt="{$article.Title}" />
				</a>
			{/if}
			<div class="clear"></div>
		</div>
		<div class="post-main">
			<div class="post-header">
				<h2 class="post-title tra">
					<span>[置顶]</span>
					<a href="{$article.Url}" class="inlo-a tra" rel="bookmark" title="{$article.Title}">{$article.Title}
						<span class="tra animate-bounce-up"></span>
					</a>
				</h2>
			</div>
			<div class="post-tags">
				<span class="podate"><a><i class="fa fa-clock-o fa-fw"></i>{Lucky_TimeAgo($article.Time())}</a></span>
				<span class="views"><a><i class="fa fa-eye fa-fw"></i> {$article.ViewNums}人围观</a></span>
				{if $zbp->CheckPlugin('changyan') != 1}<span class="comments" ><a href="{$article.Url}#comment" title="查看《{$article.Title}》的吐槽"><i class="fa fa-comment-o fa-fw"></i> {if $article.CommNums==0}抢沙发{else}{$article.CommNums}次吐槽{/if}</a></span>{/if}
			</div>
			<div class="post-excerpt">
			{php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),78)).'...';{/php}
			{$description}
			</div>
		</div>
	</div>
{else}
	{php}
		$temp=rand(1,5);
		$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
		$content = $article->Content;
		preg_match_all($pattern,$content,$matchContent);
		if(isset($matchContent[1][0])) {
			$temp=$matchContent[1][0];
			$temp = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $temp);
		} else {
			$temp=$zbp->Config('upyun')->upyun_domain."/zb_users/theme/$theme/style/img/$temp.jpg";
		}
	{/php}
	<div class="post-box tra">
	<div class="top"></div>
		<div class="post-thumb">
			<div class="post-cate tra">
				<ul class="post-categories"><li><a href="{$article.Category.Url}" title="{$article.Category.Name}" rel="category tag">{$article.Category.Name}</a></li></ul>
			</div>
			<a href="{$article.Url}" rel="bookmark" title="{$article.Title}">
				<img class="scrollLoading" src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/grey.gif" data-original="{$temp}{$zbp->Config('upyun')->upyun_cutname}{$zbp->Config('upyun')->upyun_ver_name}" title="{$article.Title}" alt="{$article.Title}" />
			</a>
			<div class="clear"></div>
		</div>
		<div class="post-main">
			<div class="post-header">
				<h2 class="post-title tra">
					<span>[置顶]</span>
					<a href="{$article.Url}" class="inlo-a tra" rel="bookmark" title="{$article.Title}">{$article.Title}
						<span class="tra animate-bounce-up"></span>
					</a>
				</h2>
			</div>
			<div class="post-tags">
				<span class="podate"><a><i class="fa fa-clock-o fa-fw"></i>{Lucky_TimeAgo($article.Time())}</a></span>
				<span class="views"><a><i class="fa fa-eye fa-fw"></i> {$article.ViewNums}人围观</a></span>
				{if $zbp->CheckPlugin('changyan') != 1}<span class="comments" ><a href="{$article.Url}#comment" title="查看《{$article.Title}》的吐槽"><i class="fa fa-comment-o fa-fw"></i> {if $article.CommNums==0}抢沙发{else}{$article.CommNums}次吐槽{/if}</a></span>{/if}
			</div>
			<div class="post-excerpt">
			{php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),78)).'...';{/php}
			{$description}
			</div>
		</div>
	</div>
{/if}