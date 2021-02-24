
<?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a <?php if ($post->Metas->Setwailian) { ?>target="_blank" href="<?php  echo $post->Metas->Setwailian;  ?>"<?php } ?> <?php if ($zbp->Config('hnysweb')->nofollow) { ?>rel="nofollow"<?php } ?>><?php } ?>
<li>
  <div class="logo"><img alt="<?php  echo $post->Title;  ?>" src="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>"><?php  echo $post->Title;  ?></div>
    <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
</li>
</a>