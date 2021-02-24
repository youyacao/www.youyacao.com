<?php echo'404';die();?><!--猜你喜欢-->
{php}
          if($zbp->Config('hnysweb')->caini_num)
          $Rnums = $zbp->Config('hnysweb')->caini_num;
          else
          $Rnums = 8;
{/php}
{if $zbp->Config('hnysweb')->caini_xz=='1'}
<div class="spm {if $zbp->Config('hnysweb')->spmtwo}{else}spmtwo{/if}">
<h3>猜你喜欢</h3>
{if $article.Category.Metas.liststyle =='1'}
<ul class="weburl">
{foreach GetList($Rnums,$article.Category.ID) as $post}
{if $post.Category.Metas.offdetails}
<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>
<li>
  <div class="logo"><img class="lazy" data-original="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$post.Title}" width="40" height="40">{$post.Title}</div>
  <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>
{else}
{if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>{/if}
<li>
  <div class="logo"><img class="lazy" data-original="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$post.Title}" width="40" height="40">{$post.Title}</div>
  <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>{/if}
{/foreach}</ul>
{elseif $article.Category.Metas.liststyle =='2'}   
<ul class="weburl_jian">
{foreach GetList($Rnums,$article.Category.ID) as $post}
{if $post.Category.Metas.offdetails}
<li><a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>{if $zbp->Config('hnysweb')->icoapioff}<i class="iconfont">&#xe6a6;</i>{else}<img src="{if $zbp->Config( 'hnysweb' )->icoapi}{$zbp->Config( 'hnysweb' )->icoapi}{else}https://ico.hnysnet.com/get.php?url={/if}{$post->Metas->Setwailian}" alt="{$post.Title}">{/if}{$post.Title}</a></li>
{else}
<li>{if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>{/if}{if $zbp->Config('hnysweb')->icoapioff}<i class="iconfont">&#xe6a6;</i>{else}<img src="{if $zbp->Config( 'hnysweb' )->icoapi}{$zbp->Config( 'hnysweb' )->icoapi}{else}https://ico.hnysnet.com/get.php?url={/if}{$post->Metas->Setwailian}" alt="{$post.Title}">{/if}{$post.Title}</a></li>{/if}   
{/foreach}</ul> 
{elseif $article.Category.Metas.liststyle =='3'} 
<ul class="qrcode">
{foreach GetList($Rnums,$article.Category.ID) as $post}
<li>{if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a>{/if}
  <h2>{$post.Title}</h2>
  <div class="logo"><img class="lazy" data-original="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$post.Title}" width="120" height="120"></div>
    <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
  </a> 
</li>
{/foreach}</ul>
{elseif $article.Category.Metas.liststyle =='4'}  
<ul class="catelist">
{foreach GetList($Rnums,$article.Category.ID) as $post}
<li><span>{hnysweb_TimeAgo($post.Time())}</span><a href="{$post.Url}">{$post.Title}</a></li>
{/foreach}
</ul>
{else}
<ul class="weburl">
{foreach GetList($Rnums,$article.Category.ID) as $post}
{if $post.Category.Metas.offdetails}
<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>
<li>
  <div class="logo"><img class="lazy" data-original="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$post.Title}" width="40" height="40">{$post.Title}</div>
  <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>
{else}
{if $zbp->Config('hnysweb')->wzdetails}<a href="{$post.Url}">{else}<a {if $post->Metas->Setwailian}target="_blank" href="{$post->Metas->Setwailian}"{/if}{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>{/if}
<li>
  <div class="logo"><img class="lazy" data-original="{if $post->Metas->pic}{$post->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$post.Title}" width="40" height="40">{$post.Title}</div>
  <p class="desc">{if $post->Metas->Setjs}{$post->Metas->Setjs}{else}未填写{/if}</p>
</li>
</a>{/if}
{/foreach}</ul>
{/if}</div>
{else}
<div class="spm">
<h3>猜你喜欢</h3>
  <ul class="catelist">
  {foreach GetList($Rnums,null,null,null,null,null,array('is_related'=>$article.ID)) as $post}
  <li><span>{hnysweb_TimeAgo($post.Time())}</span><a href="{$post.Url}">{$post.Title}</a></li>
    {/foreach}</ul>
</div>
{/if}