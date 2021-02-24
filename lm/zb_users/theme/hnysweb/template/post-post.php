<?php echo'404';die();?>
{if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if} {if $zbp->Config('hnysweb')->nofollow}rel="nofollow"{/if}>{/if}
<li>
  <div class="logo"><img alt="{$post.Title}" src="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}">{$post.Title}</div>
    <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>