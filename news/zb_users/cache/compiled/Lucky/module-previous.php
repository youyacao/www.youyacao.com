
<?php  /* Template Name:系统最近发表 */  ?>
<?php  foreach ( $articles as $key => $article) { ?>
	<?php $b=$key+1; ?>
	<?php if ($b == 1) { ?>
		<li><em class="li-icon li-icon-<?php  echo $b;  ?>"><?php  echo $b;  ?></em><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
	<?php }elseif($b == 2) {  ?>
		<li><em class="li-icon li-icon-<?php  echo $b;  ?>"><?php  echo $b;  ?></em><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
	<?php }elseif($b == 3) {  ?>
		<li><em class="li-icon li-icon-<?php  echo $b;  ?>"><?php  echo $b;  ?></em><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
	<?php }else{  ?>
		<li><em class="li-icon li-icon-<?php  echo $b;  ?>"><?php  echo $b;  ?></em><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
	<?php } ?>
<?php }   ?>