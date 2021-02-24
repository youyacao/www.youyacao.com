<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>{php}
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $article->Content;
preg_match_all($pattern,$content,$matchContent);
if(isset($matchContent[1][0]))
$temp=$matchContent[1][0];
else
$temp=$zbp->host."zb_users/theme/$theme/include/wutu.png";
{/php}
<article class="card col span_1_of_4" role="main">
<div class="shop-item">
	<div class="thumb-img focus">
	  <div class="metacat"><a class="metacat" href="{$article.Category.Url}">{$article.Category.Name}</a></div>
		<a href="{$article.Url}" title="{$article.Title}"><img class="thumb" src="{$temp}" alt="{$article.Title}"></a>
	</div>
	<h3><a href="{$article.Url}" title="{$article.Title}" target="_blank">{$article.Title}</a></h3>
	<p>{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),80)).'...');{/php}{$description}</p>
	<div class="pricebtn"><i class="fa fa-calendar"></i>{$article.Time('m-d')}<a class="buy" href="{$article.Url}"><i class="fa fa-eye"></i> 立刻查看</a></div>
</div>
</article>
{php}
$zero1=strtotime (date('y-m-d')); //当前时间
$zero2=strtotime ($article->Time('y-m-d'));  //过年时间
$isnew=false;
if (ceil(($zero1-$zero2)/86400) < 2){
    $isnew=true;
}
{/php}
{if $isnew}
<div class="news"></div>
{/if}
