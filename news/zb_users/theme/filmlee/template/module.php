<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?>
<div class="widget" id="{$module.HtmlID}">
<span class="icon"><i class="fa fa-navicon"></i></span>
{if (!$module.IsHideTitle)&&($module.Name)}
<h2>{$module.Name}</h2>
{/if}
{if $module.Type=='div'}
{if $module.FileName=="comments"}
<div class="{$module.HtmlID}">{php}echo filmleecomments(){/php}</div>
{else}
<div class="{$module.HtmlID}">{$module.Content}</div>
{/if}{/if}
{if $module.Type=='ul'}
{if $module.FileName=="comments"}
<ul class="{$module.HtmlID}">{php}echo filmleecomments(){/php}</ul>
{else}
<ul class="{$module.HtmlID}">{$module.Content}</ul>
{/if}{/if}
</div>