<?php echo'404';die();?>
{template:header}
<div id="mainContent"> 
  {template:post-adtop}  
  {if $type=='index'&&$page=='1'}
  {template:post-default}
  {else}
  {template:post-list}
  {/if}{template:post-adbottom}</div>
{template:footer}