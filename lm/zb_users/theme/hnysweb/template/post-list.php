<?php echo'404';die();?>
<div class="spm {if $zbp->Config('hnysweb')->spmtwo}{else}spmtwo{/if}">{template:post-breadcrumb}      
  {if $type == 'category'}
  {if $category->Parent}
  {$catId = $category->ParentID}
  <div class="navlower">
    <ul>
      <div class="lower">同级分类：</div>
      {hnysweb_subCate($catId)}
    </ul>
  </div>
  {elseif $category->SubCategorys}
  {$catId = $category->ID}
  <div class="navlower">
    <ul>
      <div class="lower">子分类：</div>
      {hnysweb_subCate($catId)}
    </ul>
  </div>
  {/if}
  {/if} 
  {if $type=='category'} 
  {if $category.Intro}
  <div class="abstract">{$category.Intro}</div>
  {/if}
  {if $category.Metas.liststyle =='1'} 
  <!---网站导航列表-->
  <ul class="weburl"> 
    {foreach $articles as $article}
    {template:post-list-weburl}
    {/foreach}
  </ul>
  {elseif $category.Metas.liststyle =='2'}
  <ul class="weburl_jian">
    {foreach $articles as $article}
    {template:post-list-weburljian}
    {/foreach}
  </ul>
  <!---网站导航(精简ico+标题)--> 
  {elseif $category.Metas.liststyle =='3'} 
  <!---二维码列表-->
  <ul class="qrcode">
    {foreach $articles as $article}
    {template:post-list-qrcode}
    {/foreach}
  </ul>
  {elseif $category.Metas.liststyle =='4'} 
  <!---文章列表-->
  <ul class="catelist">
    {foreach $articles as $article}
    {template:post-list-news}
    {/foreach}
  </ul>
  {else} 
  <!---什么都不选择时默认网站导航列表-->
  <ul class="weburl">
    {foreach $articles as $article}
    {template:post-list-weburl}
    {/foreach}
  </ul>
  {/if}
  {else}
    <ul class="catelist">
    {foreach $articles as $article}
    {template:post-list-news}
    {/foreach}
  </ul>
  {/if} 

  {if $pagebar}
  <div class="pagebar">{template:pagebar}</div>
  {/if} </div>
