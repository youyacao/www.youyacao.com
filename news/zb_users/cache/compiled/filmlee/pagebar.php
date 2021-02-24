<?php if ($pagebar) { ?>
<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
<?php if ($pagebar->PageNow==$k) { ?>
<li class="active"><a><span><?php  echo $k;  ?></span></a></li>
<?php }elseif($k=='‹') {  ?>
<li><a href="<?php  echo $v;  ?>" title="<?php  echo $k;  ?>" class="prev-page">上一页</a></li>
<?php }elseif($k=='›') {  ?>
<li><a href="<?php  echo $v;  ?>" title="<?php  echo $k;  ?>" class="next-page">下一页</a></li>
<?php }else{  ?>
<li><a href="<?php  echo $v;  ?>"><?php  echo $k;  ?></a></li>
<?php } ?>
<?php }   ?>
<?php } ?>