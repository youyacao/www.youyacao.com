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
{* Template Name:微语列表页 *}
{php}isset($pageType) ? $pageType : $pageType = false;{/php}
<div class="twitter {if $pageType}twitter_nr{/if}">
	<div class="twitter_main">
		<div class="twitter_avatar">
			{if $zbp->Config('Lucky')->upyun == "b"}
				{if $zbp->Config('Lucky')->avatar}
					<img src="{$host}zb_users/theme/Lucky/style/image/grey.gif" data-original="{$zbp->Config('Lucky')->avatar}" alt="{$article.Author.StaticName}"/>
				{else}
					<img src="{$host}zb_users/theme/Lucky/style/image/grey.gif" data-original="{$host}zb_users/theme/{$theme}/style/image/avatar.png" alt="{$article.Author.StaticName}"/>
				{/if}
			{else}
				{if $zbp->Config('Lucky')->avatar}
					{php}
						$avatar = $zbp->Config('Lucky')->avatar;
						$avatar = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $avatar);
					{/php}
					<img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/grey.gif" data-original="{$avatar}" alt="{$article.Author.StaticName}"/>
				{else}
					<img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/grey.gif" data-original="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/{$theme}/style/image/avatar.png" alt="{$article.Author.StaticName}"/>
				{/if}
			{/if}
		</div>
		<div class="twitter_content">
			<p class="author">{$article.Author.StaticName}</p>
			<a href="{$article.Url}">{$article.Content}</a>
			{if $zbp->Config('Lucky')->upyun == "b"}
				{if $article->Metas->imgs[0] != null}
					<ul class="twitter_images">
						{foreach $article.Metas.imgs as $key => $values}
							{php}
								$thumbImages = IMAGE::getPicUrlBy($values,180,135,4);
							{/php}
							<li><a data-src="{$values}" href="{$values}" class="lightgallery_item"><img src="{$host}/zb_users/theme/Lucky/style/image/grey.gif" data-original="{$thumbImages}" alt="{$article.Title} 第{$key+1}张" /></a></li>
						{/foreach}
						<div class="clear"></div>
					</ul>
				{/if}
			{else}
				{if $article->Metas->imgs[0] != null}
					<ul class="twitter_images">
						{foreach $article.Metas.imgs as $key => $values}
							{php}
								$values = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $values);
							{/php}
							<li><a data-src="{$values}" href="{$values}" class="lightgallery_item"><img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/grey.gif" data-original="{$values}{$zbp->Config('upyun')->upyun_cutname}{$zbp->Config('upyun')->upyun_ver_name}" alt="{$article.Title} 第{$key+1}张" /></a></li>
						{/foreach}
						<div class="clear"></div>
					</ul>
				{/if}
			{/if}
			{$sf_praise_sdk=SF_praise_sdk::findPostCount($article->ID);}
			<div class="twitter_time">
				<span class="twitter_t tra"><i class="fa fa-clock-o fa-fw"></i>{Lucky_TimeAgo($article.Time())}</span>
				{if $zbp->CheckPlugin('changyan') != 1}<span class="twitter_t tra"><a href="{if $pageType}javascript:void(0){else}{$article.Url}#comment{/if}"><i class="fa fa-comment-o fa-fw"></i> {if $article.CommNums==0}抢沙发{else}{$article.CommNums}次吐槽{/if}</a></span>{/if}
				<span class="twitter_t tra"><a href="javascript:void(0)" class="actio Whisper-like sf-praise-sdk" sfa="click" data-postid="{$sf_praise_sdk.postid}" data-value="1"><i class="fa fa-thumbs-up"></i> {if $article.Metas.yijuhua}{$article.Metas.yijuhua}{else}赞{/if}(<span class="sf-praise-sdk" sfa="num" data-value="1" data-postid="{$sf_praise_sdk.postid}">{$sf_praise_sdk.value1}</span>)</a></span>
			</div>
		</div>
	</div>
</div>
{if $pageType}
	<div class="r-pn-post">
		<div class="twitter-prev">
			{if $article.Prev}
				<a title="{$article.Prev.Title}" href="{$article.Prev.Url}" rel="bookmark" class="prev_p">
					<span>上一条 :</span> {$article.Prev.Title}
				</a>
			{else}
				<a href="javascript:void(0)" class="next_p">
				<span>上一条 :</span> 没有了，已是最新说说。</a>
			{/if}
		</div>
		<div class="twitter-next">
			{if $article.Next}
				<a title="{$article.Next.Title}" href="{$article.Next.Url}" rel="bookmark" class="next_p">
				<span>下一条 :</span> {$article.Next.Title}</a>
			{else}
				<a href="javascript:void(0)" class="next_p">
				<span>下一条 :</span> 没有了，已是最新说说。</a>
			{/if}
		</div>
		<div class="clear"></div>
	</div>
	{if !$article.IsLock}
		{template:comments}
	{/if}
{/if}