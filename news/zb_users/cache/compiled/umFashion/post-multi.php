<?php  /* Template Name:列表页普通文章 */  ?>
<?php 
$randimg=mt_rand(1,5);
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $article->Content;
preg_match_all($pattern,$content,$matchContent);
if(isset($matchContent[1][0]))
$randimg=$matchContent[1][0];
else
$randimg=$zbp->host."zb_users/theme/umFashion/style/images/$randimg.jpg";
$intro=preg_replace("/<(.*?)>/","",$article->Content); 
$intro=str_replace("&nbsp;"," ",$intro); 
$intro=trim(SubStrUTF8($intro,100)).'...'
 ?>
<div class="post">
    <div class="post-media">
      <a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><img src="<?php  echo $randimg;  ?>" /></a>
    </div>
    <div class="post-content">
      <div class="post-head">
       <h3 class="post-title"><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h3>
       <div class="post-info"><?php  echo $intro;  ?></div>
      </div>
       <div class="post-meta">
            <span class="author"><em><i class="iconfont author">&#xe6a1;</i><?php  echo $article->Author->StaticName;  ?></em><em><i class="iconfont time">&#xe69b;</i><?php  echo $article->Time('Y-m-d');  ?></em><em><i class="iconfont view">&#xe6a0;</i><?php  echo $article->ViewNums;  ?></em></span>
        </div>
    </div>
</div>