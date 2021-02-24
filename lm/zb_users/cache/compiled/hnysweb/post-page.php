
<div id="mainContent"><?php  include $this->GetTemplate('post-adtop');  ?>
  <div class="spm"> <?php  include $this->GetTemplate('post-breadcrumb');  ?>
    <div class="content">
      <h1><?php  echo $article->Title;  ?></h1>
      <div class="bodytext"> <?php  echo $article->Content;  ?></div>
    </div>
</div> <?php if (!$article->IsLock) { ?>
    <div class="spm">
      <?php  include $this->GetTemplate('comments');  ?>
     </div> <?php } ?><?php  include $this->GetTemplate('post-adbottom');  ?>
</div>
