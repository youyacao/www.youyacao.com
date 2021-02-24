<?php 
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $article->Content;
preg_match_all($pattern,$content,$matchContent);
if(isset($matchContent[1][0]))
$temp=$matchContent[1][0];
else
$temp=$zbp->host."zb_users/theme/$theme/include/wutu.png";
 ?>
<article class="card col span_1_of_4" role="main">
<div class="shop-item">
	<div class="thumb-img focus">
	  <div class="metacat"><a class="metacat" href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></div>
		<a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><img class="thumb" src="<?php  echo $temp;  ?>" alt="<?php  echo $article->Title;  ?>"></a>
	</div>
	<h3><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>" target="_blank"><?php  echo $article->Title;  ?></a></h3>
	<p><?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),80)).'...'); ?><?php  echo $description;  ?></p>
	<div class="pricebtn"><i class="fa fa-calendar"></i><?php  echo $article->Time('m-d');  ?><a class="buy" href="<?php  echo $article->Url;  ?>"><i class="fa fa-eye"></i> 立刻查看</a></div>
</div>
</article>
<?php 
$zero1=strtotime (date('y-m-d')); //当前时间
$zero2=strtotime ($article->Time('y-m-d'));  //过年时间
$isnew=false;
if (ceil(($zero1-$zero2)/86400) < 2){
    $isnew=true;
}
 ?>
<?php if ($isnew) { ?>
<div class="news"></div>
<?php } ?>
