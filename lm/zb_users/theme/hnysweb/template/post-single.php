<?php echo'404';die();?>
<div id="mainContent">{template:post-adtop} 
  <div class="spm">
      {template:post-breadcrumb}
      
    <div class="content">
     {if $article.Category.Metas.liststyle =='4'}
        <h1>{$article.Title}</h1>
      <p class="info">时间：{hnysweb_TimeAgo($article.Time())}&nbsp;&nbsp;&nbsp;阅读：{$article.ViewNums}{if $article.CommNums>0}&nbsp;&nbsp;&nbsp;评论：{$article.CommNums}{/if}</p>
     {else} 
      <div class="clogo"><img class="lazy" data-original="{if $article->Metas->pic}{$article->Metas->pic}{else}{$host}zb_users/theme/{$theme}/style/images/noimg.jpg{/if}" alt="{$article.Title}"></div>
      <div class="desc">
         <h1>{$article.Title}</h1>
        <p>{if $article.Category.Metas.liststyle =='3'}微信{else}网址{/if}简介：{if $article.Metas.Setjs}{$article.Metas.Setjs}{else}未填写{/if}</p>
        <p>更新时间：{hnysweb_TimeAgo($article.Time())} </p>
        <p>访问次数：{$article.ViewNums}</p>
        {if $article.Metas.Setwailian}<div class="oclink"><a target="_blank" href="{$article.Metas.Setwailian}"{if $zbp->Config('hnysweb')->nofollow} rel="nofollow"{/if}>访问网址</a></div>{/if}
      </div>
        <div class="description">详细介绍</div>
      {/if}
        
        
       <div class="bodytext">
      {$article.Content}
        </div>
        
       {if $article.Tags}<div class="tags">
      {foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}
      </div>{/if}
        
      {if $article.Category.Metas.liststyle =='4'}
     <div class="post-nav"> {if $article.Prev.Url}<p>上一篇：<a href="{$article.Prev.Url}" title="{$article.Prev.Title}">{$article.Prev.Title}</a></p>{/if}
      {if $article.Next.Url}<p>下一篇：<a href="{$article.Next.Url}" title="{$article.Next.Title}">{$article.Next.Title}</a></p>{/if}
        </div>
        {/if}
     </div>
  </div>
    
    {if $zbp->Config('hnysweb')->caini}
 {template:post-caini}{/if}
     {if !$article.IsLock}
    <div class="spm">
      {template:comments}
     </div> {/if}
 {template:post-adbottom}
</div> 