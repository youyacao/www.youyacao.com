{* Template Name:文章页单页 *}
{template:header}
<body class="single {$type}">
<header class="header">
  <div class="container">
    <div class="logo fl"> {php}
    if($zbp->Config('umFashion')->logo){
    $logo = $zbp->Config('umFashion')->logo;
    }else{
    $logo = $host."zb_users/theme/".$theme."/style/images/logo.png";
    }
    {/php} 
    <a href="{$host}" title="{$name}" rel="home"><img src="{$logo}" alt="{$name}"></a> </div>
    <div class="navBar fr">
      <ul class="nav">
        {$modules['navbar'].Content}
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
<div class="orw">
 <div class="artBox">
  <div id="article"> 
  {if $article.Type==ZC_POST_TYPE_ARTICLE}
  {template:post-single}
  {else}
  {template:post-page}
  {/if}
  </div>
  </div>
</div>
</div>
{template:footer}
