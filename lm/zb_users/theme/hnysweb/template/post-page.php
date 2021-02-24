<?php echo'404';die();?>
<div id="mainContent">{template:post-adtop}
  <div class="spm"> {template:post-breadcrumb}
    <div class="content">
      <h1>{$article.Title}</h1>
      <div class="bodytext"> {$article.Content}</div>
    </div>
</div> {if !$article.IsLock}
    <div class="spm">
      {template:comments}
     </div> {/if}{template:post-adbottom}
</div>
