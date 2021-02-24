<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>{if $pagebar}
{foreach $pagebar.buttons as $k=>$v}
{if $pagebar.PageNow==$k}
<li class="active"><a><span>{$k}</span></a></li>
{elseif $k=='‹'}
<li><a href="{$v}" title="{$k}" class="prev-page">上一页</a></li>
{elseif $k=='›'}
<li><a href="{$v}" title="{$k}" class="next-page">下一页</a></li>
{else}
<li><a href="{$v}">{$k}</a></li>
{/if}
{/foreach}
{/if}