
<?php  /* Template Name:分页条 */  ?>
<?php if (!Lucky_mobile()) { ?>
    <div class="page-navigator mobile-navigator">
        <?php if ($pagebar) { ?>
            <?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
                <?php if ($pagebar->PageNow==$k) { ?>
                    <a href="javascript:;">第 <?php  echo $k;  ?> 页</a>
                <?php }elseif($k=='‹‹' and $pagebar->PageNow!=$pagebar->PageFirst) {  ?>
                <?php }elseif($k=='‹‹' and $pagebar->PageNow==$pagebar->PageFirst) {  ?>
                <?php }elseif($k=='››' and $pagebar->PageNow==$pagebar->PageLast) {  ?>
                <?php }elseif($k=='››' and $pagebar->PageNow!=$pagebar->PageLast) {  ?>
                <?php }elseif($k=='‹') {  ?>
                    <a href="<?php  echo $v;  ?>" class="c-nav prev ease"><i class="fa fa-angle-left"></i></a>
                <?php }elseif($k=='›') {  ?>
                    <a href="<?php  echo $v;  ?>" class="c-nav next ease"><i class="fa fa-angle-right"></i></a>
                <?php }else{  ?>
                <?php } ?>
            <?php }   ?>
        <?php } ?>
    </div>
<?php }else{  ?>
    <div class="page-navigator">
        <ul>
            <?php if ($pagebar) { ?>
                <?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
                    <?php if ($pagebar->PageNow==$k) { ?>
                        <li><a class="on"><?php  echo $k;  ?></a></li>
                    <?php }elseif($k=='‹‹' and $pagebar->PageNow!=$pagebar->PageFirst) {  ?>
                        <li><a href="<?php  echo $pagebar->buttons['‹‹'];  ?>" class="c-nav ease" title="首页">首页</a></li>
                    <?php }elseif($k=='‹‹' and $pagebar->PageNow==$pagebar->PageFirst) {  ?>
                    <?php }elseif($k=='››' and $pagebar->PageNow==$pagebar->PageLast) {  ?>
                    <?php }elseif($k=='››' and $pagebar->PageNow!=$pagebar->PageLast) {  ?>
                        <li><a href="<?php  echo $pagebar->buttons['››'];  ?>" class="c-nav ease" title="末页">末页 </a></li>
                    <?php }elseif($k=='‹') {  ?>
                        <li><a href="<?php  echo $v;  ?>" title="上一页" class="c-nav prev ease">上一页</a></li>
                    <?php }elseif($k=='›') {  ?>
                        <li><a href="<?php  echo $v;  ?>" title="下一页" class="c-nav next ease">下一页</a></li>
                    <?php }else{  ?>
                        <li><a href="<?php  echo $v;  ?>" title="第<?php  echo $k;  ?>页" class="ease"><?php  echo $k;  ?></a></li>
                    <?php } ?>
                <?php }   ?>
            <?php } ?>
        </ul>
    </div>
<?php } ?>