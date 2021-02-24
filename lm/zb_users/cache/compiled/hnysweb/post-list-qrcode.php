
<li><?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $article->Url;  ?>"><?php }else{  ?><a><?php } ?>
  <h2><?php  echo $article->Title;  ?></h2>
  <div class="logo"><img class="lazy" data-original="<?php if ($article->Metas->pic) { ?><?php  echo $article->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $article->Title;  ?>" width="120" height="120"></div>
    <p class="desc"><?php if ($article->Metas->Setjs) { ?><?php  echo $article->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
  </a> 
</li>