
<?php  include $this->GetTemplate('header');  ?>
<div id="mainContent"> 
  <?php  include $this->GetTemplate('post-adtop');  ?>  
  <?php if ($type=='index'&&$page=='1') { ?>
  <?php  include $this->GetTemplate('post-default');  ?>
  <?php }else{  ?>
  <?php  include $this->GetTemplate('post-list');  ?>
  <?php } ?><?php  include $this->GetTemplate('post-adbottom');  ?></div>
<?php  include $this->GetTemplate('footer');  ?>