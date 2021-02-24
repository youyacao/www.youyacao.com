
<?php  include $this->GetTemplate('header');  ?>
<?php if ($type=='article') { ?><?php  include $this->GetTemplate('post-single');  ?><?php } ?>
<?php if ($type=='page') { ?><?php  include $this->GetTemplate('post-page');  ?><?php } ?>
<?php  include $this->GetTemplate('footer');  ?>