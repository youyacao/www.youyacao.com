<?php  include $this->GetTemplate('header');  ?>
<main class="wrapper">
	<div class="inner">
		<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
		<?php  include $this->GetTemplate('post-single');  ?>
		<?php }else{  ?>
		<?php  include $this->GetTemplate('post-page');  ?>
		<?php } ?>
	</div>
</main>
<?php  include $this->GetTemplate('footer');  ?>