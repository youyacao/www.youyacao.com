{* Template Name:首页及列表页 *}
{template:header}
<body class="multi {$type}">
<header class="header">
  <div class="container">
  	{php}
      if($zbp->Config('umFashion')->logo){
      $logo = $zbp->Config('umFashion')->logo;
      }else{
      $logo = $host."zb_users/theme/".$theme."/style/images/logo.png";
      }
    {/php}
   {if $type=='article'}
    <div class="logo fl">  <a href="{$host}" title="{$name}" rel="home"><img src="{$logo}" alt="{$name}"></a> </div>
    {else}
    <h1 class="logo fl">  <a href="{$host}" title="{$name}" rel="home"><img src="{$logo}" alt="{$name}"></a> </h1>
    {/if}
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
{if $type=='index'&&$page=='1'}
{if $zbp->Config('umFashion')->umSlider}
 <div class="owl-carousel owl-theme owl">
	{php}	
        if(json_decode($umSliderArray,true)){
        $umSliderArray = json_decode($umSliderArray,true);
        {/php}
        {foreach $umSliderArray as $slider}
	<div class="item">
	 <a href="{$slider['url']}" target="_blank" title="{$slider['title']}">
	   <img class="owl-lazy" data-src="{$slider['img']}" alt="{$slider['title']}"/>
	   <div class="text"><h4>{$slider['title']}</h4>{if $slider['info']}<div class="info">{$slider['info']}</div>{/if}</div>
	 </a>
	</div>
	{/foreach}
	{php}
	}
	{/php}     
</div>
{/if}
{/if}
<section class="warp">
<div class="container">
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

