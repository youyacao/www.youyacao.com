<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>{template:header}
<section class="container">
<div class="speedbar">
	<div class="pull-right"><i class="fa fa-power-off"></i>{$zbp->Config('filmlee')->denglu}</div>
	<div class="toptip" id="callboard">
		<ul style="font-size:16px;margin-top: 2px;">
		{$zbp->Config('filmlee')->gonggao}
		</ul>
	</div>
	</div>
{if $zbp->Config('filmlee')->DisplayAd2=="1"}
<div class="adflink">
	{$zbp->Config('filmlee')->Ad2}
</div>
{/if}
<div class="content-wrap">
	<div class="content">
{if $type=='index' && $zbp->Config('filmlee')->lunbooff=="1"}
	<div class="metro">
		<div class="banner">
			{module:slide}
		</div>
	</div>
{/if}{if $zbp->Config('filmlee')->DisplayAd1=="1"}
<div id="tv_das">
	{$zbp->Config('filmlee')->Ad1}
</div>
{/if}
{if $type=='index'}
<div class="hot-posts">
	<h2 class="title">热门推荐</h2>
	<ul>
		{filmlee_ViewNums()}
	</ul>
</div>
{/if}
<div class="pagewrapper" style="padding-top:.1px">
	<div id="cardslist" class="cardlist" role="main">
	{foreach $articles as $article}
	{if $article.IsTop}
		{template:post-istop}
	{else}
		{template:post-multi}
	{/if}
	{/foreach}
	</div>
</div>
	<div class="pagination"><ul>{template:pagebar}</ul></div>
</div>
</div>
<aside class="sidebar">
	{template:sidebar}
</aside>
</section>
</div>
{template:footer}
