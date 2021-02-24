<?php echo'404';die();?>
    <div class="nav">
  <div class="item"><i class="iconfont">&#xe607;</i>网站全部分类</div>
      <ul id="nav">
        <li class="wap"><a href="{$host}">网站首页</a></li>
        {if $zbp->Config('hnysweb')->daohang}
        {module:catalog}
        {else}
        {foreach $categorys as $cate}
        <li><i class="iconfont">{$cate.Metas.hnysweb_icon}</i><a href="{if $zbp->Config('hnysweb')->dhcate}{$cate.Url}{else}{$host}#a{$cate.ID}{/if}">{$cate.Name}{if $zbp->Config('hnysweb')->dhnum}({$cate.Count}){/if}</a></li>
        {/foreach}
        {/if}
      </ul> 
<div class="item msg-board">{if $zbp->Config('hnysweb')->liuyanon}{$zbp->Config('hnysweb')->liuyan}
    {else}{php} $hnysweburl=GetPost((int)$zbp->Config('hnysweb')->pageid); {/php}<a href="{$hnysweburl->Url}"><i class="iconfont">&#xe64a;</i>提交收录</a>{/if}</div>
</div>