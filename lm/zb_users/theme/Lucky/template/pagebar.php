<?php echo'
	<meta charset="UTF-8">
	<div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Theme ID: Lucky</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author: 小锋博客</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author URI: Www.SongHaiFeng.Com</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author QQ: 284204003</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author Email: 284204003@qq.com</h2>
	</div>
';die();?>
{* Template Name:分页条 *}
{if !Lucky_mobile()}
    <div class="page-navigator mobile-navigator">
        {if $pagebar}
            {foreach $pagebar.buttons as $k=>$v}
                {if $pagebar.PageNow==$k}
                    <a href="javascript:;">第 {$k} 页</a>
                {elseif $k=='‹‹' and $pagebar.PageNow!=$pagebar.PageFirst}
                {elseif $k=='‹‹' and $pagebar.PageNow==$pagebar.PageFirst}
                {elseif $k=='››' and $pagebar.PageNow==$pagebar.PageLast}
                {elseif $k=='››' and $pagebar.PageNow!=$pagebar.PageLast}
                {elseif $k=='‹'}
                    <a href="{$v}" class="c-nav prev ease"><i class="fa fa-angle-left"></i></a>
                {elseif $k=='›'}
                    <a href="{$v}" class="c-nav next ease"><i class="fa fa-angle-right"></i></a>
                {else}
                {/if}
            {/foreach}
        {/if}
    </div>
{else}
    <div class="page-navigator">
        <ul>
            {if $pagebar}
                {foreach $pagebar.buttons as $k=>$v}
                    {if $pagebar.PageNow==$k}
                        <li><a class="on">{$k}</a></li>
                    {elseif $k=='‹‹' and $pagebar.PageNow!=$pagebar.PageFirst}
                        <li><a href="{$pagebar.buttons['‹‹']}" class="c-nav ease" title="首页">首页</a></li>
                    {elseif $k=='‹‹' and $pagebar.PageNow==$pagebar.PageFirst}
                    {elseif $k=='››' and $pagebar.PageNow==$pagebar.PageLast}
                    {elseif $k=='››' and $pagebar.PageNow!=$pagebar.PageLast}
                        <li><a href="{$pagebar.buttons['››']}" class="c-nav ease" title="末页">末页 </a></li>
                    {elseif $k=='‹'}
                        <li><a href="{$v}" title="上一页" class="c-nav prev ease">上一页</a></li>
                    {elseif $k=='›'}
                        <li><a href="{$v}" title="下一页" class="c-nav next ease">下一页</a></li>
                    {else}
                        <li><a href="{$v}" title="第{$k}页" class="ease">{$k}</a></li>
                    {/if}
                {/foreach}
            {/if}
        </ul>
    </div>
{/if}