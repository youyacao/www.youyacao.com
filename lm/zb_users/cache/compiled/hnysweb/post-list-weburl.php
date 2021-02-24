
<?php if ($article->Category->Metas->offdetails) { ?>
<a <?php if ($article->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $article->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($article->Metas->pic) { ?><?php  echo $article->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $article->Title;  ?>" width="40" height="40"><?php  echo $article->Title;  ?></div>
  <p class="desc"><?php if ($article->Metas->Setjs) { ?><?php  echo $article->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a>
<?php }else{  ?>
<?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $article->Url;  ?>"><?php }else{  ?><a <?php if ($article->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $article->Metas->Setwailian;  ?>"<?php } ?><?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>><?php } ?>
<li>
  <div class="logo"><img class="lazy" data-original="<?php if ($article->Metas->pic) { ?><?php  echo $article->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $article->Title;  ?>" width="40" height="40"><?php  echo $article->Title;  ?></div>
  <p class="desc"><?php if ($article->Metas->Setjs) { ?><?php  echo $article->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a><?php } ?>