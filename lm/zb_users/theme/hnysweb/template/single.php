<?php echo'404';die();?>
{template:header}
{if $type=='article'}{template:post-single}{/if}
{if $type=='page'}{template:post-page}{/if}
{template:footer}