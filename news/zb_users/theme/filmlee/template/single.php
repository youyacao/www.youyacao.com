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
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}

</section>
</div>
{template:footer}