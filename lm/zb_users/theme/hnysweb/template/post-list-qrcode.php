<?php echo'404';die();?>
<li>{if $zbp->Config('hnysweb')->wzdetails}<a href="{$article.Url}">{else}<a>{/if}
  <h2>{$article.Title}</h2>
  <div class="logo"><img class="lazy" data-original="{if $article->Metas->pic}{$article->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$article.Title}" width="120" height="120"></div>
    <p class="desc">{if $article->Metas->Setjs}{$article->Metas->Setjs}{else}未填写{/if}</p>
  </a> 
</li>