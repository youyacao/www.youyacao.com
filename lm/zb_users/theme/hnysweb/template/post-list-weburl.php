<?php echo'404';die();?>
{if $article.Category.Metas.offdetails}
<a {if $article->Metas->Setwailian}target="_blank" href="{$article->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>
<li>
  <div class="logo"><img class="lazy" data-original="{if $article->Metas->pic}{$article->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$article.Title}" width="40" height="40">{$article.Title}</div>
  <p class="desc">{if $article->Metas->Setjs}{$article->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>
{else}
{if $zbp->Config('hnysweb')->wzdetails}<a href="{$article.Url}">{else}<a {if $article->Metas->Setwailian}target="_blank" href="{$article->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>{/if}
<li>
  <div class="logo"><img class="lazy" data-original="{if $article->Metas->pic}{$article->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$article.Title}" width="40" height="40">{$article.Title}</div>
  <p class="desc">{if $article->Metas->Setjs}{$article->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>{/if}