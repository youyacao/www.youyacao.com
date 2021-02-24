
<?php  /* Template Name:侧栏模块 */  ?>
<?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
<div class="widget <?php  echo $module->HtmlID;  ?>">
	<div class="widget-title">
		<div class="w-t">
			<?php if ($module->HtmlID =="divTags") { ?>
				<i class="fa fa-tags"></i>
			<?php }elseif($module->HtmlID =="divComments") {  ?>
				<i class="fa fa-comments"></i>
			<?php }elseif($module->HtmlID =="divPrevious") {  ?>
				<i class="fa fa-pencil"></i>
			<?php }elseif($module->HtmlID =="divCatalog") {  ?>
				<i class="fa-sitemap fa"></i>
			<?php }elseif($module->HtmlID =="divLinkage") {  ?>
				<i class="fa fa-link"></i>
			<?php }elseif($module->HtmlID =="divAuthors") {  ?>
				<i class="fa fa-users"></i>
			<?php }elseif($module->HtmlID =="divFavorites") {  ?>
				<i class="fa fa-heartbeat"></i>
			<?php }elseif($module->HtmlID =="divStatistics") {  ?>
				<i class="fa fa-signal"></i>
			<?php }else{  ?>
			<i class="fa fa-bars"></i><?php } ?> <?php  echo $module->Name;  ?></div>
	</div>
	<div class="function"><?php  echo $module->Content;  ?></div>
</div>
<?php }else{  ?>
<?php  echo $module->Content;  ?>
<?php } ?>