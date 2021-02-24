
<?php  /* Template Name:首页及列表页 */  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<?php  include $this->GetTemplate('index-s');  ?>
<?php }else{  ?>
	<?php  include $this->GetTemplate('index-list');  ?>
<?php } ?>