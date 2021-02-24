
<li>
 <?php if ($zbp->Config('hnysweb')->wzdetails) { ?><a href="<?php  echo $post->Url;  ?>"><?php }else{  ?><a><?php } ?>
  <h2><?php  echo $post->Title;  ?></h2>
  <div class="logo"> <img art="<?php  echo $post->Title;  ?>" src="<?php if ($post->Metas->pic) { ?><?php  echo $post->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>"></div>
    <p class="desc"><?php if ($post->Metas->Setjs) { ?><?php  echo $post->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
  </a> 
</li>
