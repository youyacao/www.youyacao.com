
    <div class="nav">
  <div class="item"><i class="iconfont">&#xe607;</i>网站全部分类</div>
      <ul id="nav">
        <li class="wap"><a href="<?php  echo $host;  ?>">网站首页</a></li>
        <?php if ($zbp->Config('hnysweb')->daohang) { ?>
        <?php  if(isset($modules['catalog'])){echo $modules['catalog']->Content;}  ?>
        <?php }else{  ?>
        <?php  foreach ( $categorys as $cate) { ?>
        <li><i class="iconfont"><?php  echo $cate->Metas->hnysweb_icon;  ?></i><a href="<?php if ($zbp->Config('hnysweb')->dhcate) { ?><?php  echo $cate->Url;  ?><?php }else{  ?><?php  echo $host;  ?>#a<?php  echo $cate->ID;  ?><?php } ?>"><?php  echo $cate->Name;  ?><?php if ($zbp->Config('hnysweb')->dhnum) { ?>(<?php  echo $cate->Count;  ?>)<?php } ?></a></li>
        <?php }   ?>
        <?php } ?>
      </ul> 
<div class="item msg-board"><?php if ($zbp->Config('hnysweb')->liuyanon) { ?><?php  echo $zbp->Config('hnysweb')->liuyan;  ?>
    <?php }else{  ?><?php  $hnysweburl=GetPost((int)$zbp->Config('hnysweb')->pageid);  ?><a href="<?php  echo $hnysweburl->Url;  ?>"><i class="iconfont">&#xe64a;</i>提交收录</a><?php } ?></div>
</div>