<?php echo'404';die();?>
<li>
 {if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a>{/if}
  <h2>{$post.Title}</h2>
  <div class="logo"> <img art="{$post.Title}" src="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}"></div>
    <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
  </a> 
</li>
