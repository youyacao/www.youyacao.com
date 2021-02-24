<!--猜你喜欢-->
<?php 
          if($zbp->Config('hnysweb')->caini_num)
          $Rnums = $zbp->Config('hnysweb')->caini_num;
          else
          $Rnums = 8;
 ?>
<?php if ($zbp->Config('hnysweb')->caini_xz=='1') { ?>
<div class="spm <?php if ($zbp->Config('hnysweb')->spmtwo) { ?><?php }else{  ?>spmtwo<?php } ?>">
<h3>猜你喜欢</h3>
<?php if ($article->Category->Metas->liststyle =='1') { ?>
<ul class="weburl">
<?php  foreach ( GetList($Rnums,$article->Category->ID) as $post) { ?>
<?php if ($post->Category->Metas->offdetails) { ?>
<a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $post->Title;  ?>" width="40" height="40"><?php  echo $post->Title;  ?></div>
  <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a>
<?php }else{  ?>
<?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>><?php } ?>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $post->Title;  ?>" width="40" height="40"><?php  echo $post->Title;  ?></div>
  <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a><?php } ?>
<?php }   ?></ul>
<?php }elseif($article->Category->Metas->liststyle =='2') {  ?>   
<ul class="weburl_jian">
<?php  foreach ( GetList($Rnums,$article->Category->ID) as $post) { ?>
<?php if ($post->Category->Metas->offdetails) { ?>
<li><a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>><?php if ($zbp->Config('hnysweb')->icoapioff) { ?><i class="iconfont">&#xe6a6;</i><?php }else{  ?><img src="<?php if ($zbp->Config( 'hnysweb' )->icoapi) { ?><?php  echo $zbp->Config( 'hnysweb' )->icoapi;  ?><?php }else{  ?>https://ico.hnysnet.com/get.php?url=<?php } ?><?php  echo $post->Metas->Setwailian;  ?>" alt="<?php  echo $post->Title;  ?>"><?php } ?><?php  echo $post->Title;  ?></a></li>
<?php }else{  ?>
<li><?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>><?php } ?><?php if ($zbp->Config('hnysweb')->icoapioff) { ?><i class="iconfont">&#xe6a6;</i><?php }else{  ?><img src="<?php if ($zbp->Config( 'hnysweb' )->icoapi) { ?><?php  echo $zbp->Config( 'hnysweb' )->icoapi;  ?><?php }else{  ?>https://ico.hnysnet.com/get.php?url=<?php } ?><?php  echo $post->Metas->Setwailian;  ?>" alt="<?php  echo $post->Title;  ?>"><?php } ?><?php  echo $post->Title;  ?></a></li><?php } ?>   
<?php }   ?></ul> 
<?php }elseif($article->Category->Metas->liststyle =='3') {  ?> 
<ul class="qrcode">
<?php  foreach ( GetList($Rnums,$article->Category->ID) as $post) { ?>
<li><?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a><?php } ?>
  <h2><?php  echo $post->Title;  ?></h2>
  <div class="logo"><img class="lazy" data-original="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $post->Title;  ?>" width="120" height="120"></div>
    <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
  </a> 
</li>
<?php }   ?></ul>
<?php }elseif($article->Category->Metas->liststyle =='4') {  ?>  
<ul class="catelist">
<?php  foreach ( GetList($Rnums,$article->Category->ID) as $post) { ?>
<li><span><?php  echo hnysweb_TimeAgo($post->Time());  ?></span><a href="<?php  echo $post->Url;  ?>"><?php  echo $post->Title;  ?></a></li>
<?php }   ?>
</ul>
<?php }else{  ?>
<ul class="weburl">
<?php  foreach ( GetList($Rnums,$article->Category->ID) as $post) { ?>
<?php if ($post->Category->Metas->offdetails) { ?>
<a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $post->Title;  ?>" width="40" height="40"><?php  echo $post->Title;  ?></div>
  <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a>
<?php }else{  ?>
<?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>><?php } ?>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $post->Title;  ?>" width="40" height="40"><?php  echo $post->Title;  ?></div>
  <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a><?php } ?>
<?php }   ?></ul>
<?php } ?></div>
<?php }else{  ?>
<div class="spm">
<h3>猜你喜欢</h3>
  <ul class="catelist">
  <?php  foreach ( GetList($Rnums,null,null,null,null,null,array('is_related'=>$article->ID)) as $post) { ?>
  <li><span><?php  echo hnysweb_TimeAgo($post->Time());  ?></span><a href="<?php  echo $post->Url;  ?>"><?php  echo $post->Title;  ?></a></li>
    <?php }   ?></ul>
</div>
<?php } ?>