{* Template Name:搜索列表页 *}
{template:header}
<body class="multi {$type}">
<header class="header">
  <div class="container">
    <div class="logo fl"> {php}
      if($zbp->Config('umFashion')->logo){
      $logo = $zbp->Config('umFashion')->logo;
      }else{
      $logo = $host."zb_users/theme/".$theme."/style/images/logo.png";
      }
      {/php} <a href="{$host}" title="{$name}" rel="home"><img src="{$logo}" alt="{$name}"></a> </div>
    <div class="navBar fr">
      <ul class="nav">
        {module:navbar}
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="ssFrom">
  <form name="search" method="post" class="sform" action="{$host}zb_system/cmd.php?act=search"><input class="sinput" name="q" type="text" placeholder="请输入搜索关键词..."><button><i class="iconfont">&#xe6e1;</i></button></form>
</div>
<section class="warp">
<div class="container">
<div class="umCrumb"><i class="iconfont">&#xe6a7;</i><span class="current">以下是{$article.Title} 关联的文章</span></div>
<div class="orw">
 <div class="artBox">
  <div id="article" class="artPost">
    {foreach $articles as $article}
      {if $article.IsTop}
        {template:post-istop}
      {else}
        {template:post-multi}
      {/if}
    {/foreach}
    <div class="pagebar">{template:pagebar}</div>
  </div>
  </div>
</div>
</div>
{template:footer}

