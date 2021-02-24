<?php echo'404';die();?>
{if $zbp->Config('hnysweb')->slidebox}
    {template:post-index-banner}
{/if}
{if $zbp->Config('hnysweb')->Setindexhot}
<div class="spm {if $zbp->Config('hnysweb')->spmtwo}{else}spmtwo{/if}">
<h3><i class="iconfont">&#xe690;</i>站长推荐</h3>
     {php}
    if($zbp->Config('hnysweb')->Sihotpx)
    $TeOrder = array('log_PostTime'=>'ASC');
    else
    $TeOrder = array('log_PostTime'=>'DESC');
    if($zbp->Config('hnysweb')->Sihotnum)
          $hotnum = $zbp->Config('hnysweb')->Sihotnum;
          else
          $hotnum = 500;
    $TeWhere = array(array('=','log_Status','0'));
    $TeWhere[]=array('like','log_Meta','%hots%');
    $TeArray = $zbp->GetArticleList(array('*'),$TeWhere,$TeOrder,array($hotnum),'');
    {/php}
<ul class="weburl">
    {foreach $TeArray as $article}
{template:post-list-weburl}
{/foreach}</ul>
</div>
{/if}
{php}
$SetindexIDs=explode(',',$zbp->Config('hnysweb')->SetindexID);
if($zbp->Config('hnysweb')->Setindex)
          $Rnums = $zbp->Config('hnysweb')->Setindex;
          else
          $Rnums = 12;
if($zbp->Config('hnysweb')->Setindex2)
          $Rnums2 = $zbp->Config('hnysweb')->Setindex2;
          else
          $Rnums2 = 10;
if($zbp->Config('hnysweb')->Setindex3)
          $Rnums3 = $zbp->Config('hnysweb')->Setindex3;
          else
          $Rnums3 = 30;
{/php}
{foreach $SetindexIDs as $key=>$bid}{$i=$key+1}
{if isset($categorys[$bid])}
<div class="spm {if $zbp->Config('hnysweb')->spmtwo}{else}spmtwo{/if}">
 <h3 id="a{$categorys[$bid].ID}"><i class="iconfont">{$zbp->categorys[$bid]->Metas.hnysweb_icon}</i>{$categorys[$bid].Name}<span> {if $zbp->Config('hnysweb')->daohang}<a href="{$categorys[$bid].Url}">更多</a>{/if}</span></h3>
  {if $zbp->categorys[$bid]->Metas.liststyle =='1'}
    <ul class="weburl"><!--网址分类--> 
   {if $zbp->Config('hnysweb')->paixu =='1'}
   {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='2'}
    {foreach hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='3'}
    {foreach hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='4'}
    {foreach hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {else}
    {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-weburl}
    {/foreach}    
    {/if}</ul>
    {elseif $zbp->categorys[$bid]->Metas.liststyle =='2'}
    <ul class="weburl_jian"><!--网址分类简-->
    {if $zbp->Config('hnysweb')->paixu =='1'}
   {foreach GetList($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-weburljian}     
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='2'}
   {foreach hnysweb_postasc($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburljian}     
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='3'}
   {foreach hnysweb_GetArticleCategorys($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburljian}     
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='4'}
    {foreach hnysweb_commnums($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
   {template:post-list-weburljian}     
    {/foreach}
    {else}
    {foreach GetList($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
   {template:post-list-weburljian}     
    {/foreach}
    {/if}
    </ul>
    {elseif $zbp->categorys[$bid]->Metas.liststyle =='3'}
    <ul class="qrcode"><!--二维码分类-->
    {if $zbp->Config('hnysweb')->paixu =='1'}
    {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-qrcode}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='2'}
{foreach hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-qrcode}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='3'}
    {foreach hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-qrcode}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='4'}
    {foreach hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-qrcode}
    {/foreach}
    {else}
    {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-qrcode}
    {/foreach}
    {/if}
    </ul>
    {elseif $zbp->categorys[$bid]->Metas.liststyle =='4'}
    <ul class="catelist">
    {foreach GetList($Rnums2,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article}
    {template:post-list-news}
    {/foreach}</ul>
    {else}
    <ul class="weburl"><!--网址分类-->
   {if $zbp->Config('hnysweb')->paixu =='1'}
   {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='2'}
    {foreach hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='3'}
   {foreach hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {elseif $zbp->Config('hnysweb')->paixu =='4'}
    {foreach hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article}
    {template:post-list-weburl}
    {/foreach}
    {else}
    {foreach GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article} 
    {template:post-list-weburl}
    {/foreach}    
    {/if}</ul>
    {/if}
    </div>
{/if}
{/foreach}
{if $zbp->Config('hnysweb')->flink}
<div class="spm">
 <h3>友情链接</h3>
  <ul class="flink">{module:link}</ul>
</div>
{/if} 