<?php  include $this->GetTemplate('header');  ?>
<section class="container">
<div class="speedbar">
	<div class="pull-right"><i class="fa fa-power-off"></i><?php  echo $zbp->Config('filmlee')->denglu;  ?></div>
	<div class="toptip" id="callboard">
		<ul style="font-size:16px;margin-top: 2px;">
		<?php  echo $zbp->Config('filmlee')->gonggao;  ?>
		</ul>
	</div>
</div>
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>

</section>
</div>
<?php  include $this->GetTemplate('footer');  ?>