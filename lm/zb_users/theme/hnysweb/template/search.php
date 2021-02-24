<?php echo'404';die();?>
{template:header}
<div id="mainContent">
  {template:post-adtop}  
  <div class="spm">
    <h3><a href="{$host}" title="{$name}">首页</a><i class="iconfont">&#xe6f1;</i>{$article.Title}显示的结果</h3>
    <ul class="catelist">{foreach $articles as $article}
<li><span>{hnysweb_TimeAgo($article.Time())}</span><a href="{$article.Url}">{$article.Title}</a></li>
{/foreach}</ul>
{if $pagebar} <div class="pagebar">{template:pagebar}</div>{/if}
</div>{template:post-adbottom}
</div>
{template:footer}