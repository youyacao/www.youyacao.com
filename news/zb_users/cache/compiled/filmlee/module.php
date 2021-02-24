
<div class="widget" id="<?php  echo $module->HtmlID;  ?>">
<span class="icon"><i class="fa fa-navicon"></i></span>
<?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
<h2><?php  echo $module->Name;  ?></h2>
<?php } ?>
<?php if ($module->Type=='div') { ?>
<?php if ($module->FileName=="comments") { ?>
<div class="<?php  echo $module->HtmlID;  ?>"><?php echo filmleecomments() ?></div>
<?php }else{  ?>
<div class="<?php  echo $module->HtmlID;  ?>"><?php  echo $module->Content;  ?></div>
<?php } ?><?php } ?>
<?php if ($module->Type=='ul') { ?>
<?php if ($module->FileName=="comments") { ?>
<ul class="<?php  echo $module->HtmlID;  ?>"><?php echo filmleecomments() ?></ul>
<?php }else{  ?>
<ul class="<?php  echo $module->HtmlID;  ?>"><?php  echo $module->Content;  ?></ul>
<?php } ?><?php } ?>
</div>