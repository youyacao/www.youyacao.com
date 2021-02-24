
<?php  /* Template Name:系统标签 */  ?>
<?php  foreach ( $tags as $tag) { ?>
	<a href="<?php  echo $tag->Url;  ?>" title="<?php  echo $tag->Count;  ?>篇文章"><?php  echo $tag->Name;  ?></a>
<?php }   ?>