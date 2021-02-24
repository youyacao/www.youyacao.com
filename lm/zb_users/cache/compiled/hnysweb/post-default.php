
<?php if ($zbp->Config('hnysweb')->slidebox) { ?>
    <?php  include $this->GetTemplate('post-index-banner');  ?>
<?php } ?>
<?php if ($zbp->Config('hnysweb')->Setindexhot) { ?>
<div class="spm <?php if ($zbp->Config('hnysweb')->spmtwo) { ?><?php }else{  ?>spmtwo<?php } ?>">
<h3><i class="iconfont">&#xe690;</i>站长推荐</h3>
     <?php 
    if($zbp->Config('hnysweb')->Sihotpx)
    $TeOrder = array('log_PostTime'=>'ASC');
    else
    $TeOrder = array('log_PostTime'=>'DESC');
    if($zbp->Config('hnysweb')->Sihotnum)
          $hotnum = $zbp->Config('hnysweb')->Sihotnum;
          else
          $hotnum = 500;
    $TeWhere = array(array('=','log_Status','0'));
    $TeWhere[]=array('like','log_Meta','%hots%');
    $TeArray = $zbp->GetArticleList(array('*'),$TeWhere,$TeOrder,array($hotnum),'');
     ?>
<ul class="weburl">
    <?php  foreach ( $TeArray as $article) { ?>
<?php  include $this->GetTemplate('post-list-weburl');  ?>
<?php }   ?></ul>
</div>
<?php } ?>
<?php 
$SetindexIDs=explode(',',$zbp->Config('hnysweb')->SetindexID);
if($zbp->Config('hnysweb')->Setindex)
          $Rnums = $zbp->Config('hnysweb')->Setindex;
          else
          $Rnums = 12;
if($zbp->Config('hnysweb')->Setindex2)
          $Rnums2 = $zbp->Config('hnysweb')->Setindex2;
          else
          $Rnums2 = 10;
if($zbp->Config('hnysweb')->Setindex3)
          $Rnums3 = $zbp->Config('hnysweb')->Setindex3;
          else
          $Rnums3 = 30;
 ?>
<?php  foreach ( $SetindexIDs as $key=>$bid) { ?><?php  $i=$key+1;  ?>
<?php if (isset($categorys[$bid])) { ?>
<div class="spm <?php if ($zbp->Config('hnysweb')->spmtwo) { ?><?php }else{  ?>spmtwo<?php } ?>">
 <h3 id="a<?php  echo $categorys[$bid]->ID;  ?>"><i class="iconfont"><?php  echo $zbp->categorys[$bid]->Metas->hnysweb_icon;  ?></i><?php  echo $categorys[$bid]->Name;  ?><span> <?php if ($zbp->Config('hnysweb')->daohang) { ?><a href="<?php  echo $categorys[$bid]->Url;  ?>">更多</a><?php } ?></span></h3>
  <?php if ($zbp->categorys[$bid]->Metas->liststyle =='1') { ?>
    <ul class="weburl"><!--网址分类--> 
   <?php if ($zbp->Config('hnysweb')->paixu =='1') { ?>
   <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='2') {  ?>
    <?php  foreach ( hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='3') {  ?>
    <?php  foreach ( hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='4') {  ?>
    <?php  foreach ( hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }else{  ?>
    <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>    
    <?php } ?></ul>
    <?php }elseif($zbp->categorys[$bid]->Metas->liststyle =='2') {  ?>
    <ul class="weburl_jian"><!--网址分类简-->
    <?php if ($zbp->Config('hnysweb')->paixu =='1') { ?>
   <?php  foreach ( GetList($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-weburljian');  ?>     
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='2') {  ?>
   <?php  foreach ( hnysweb_postasc($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburljian');  ?>     
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='3') {  ?>
   <?php  foreach ( hnysweb_GetArticleCategorys($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburljian');  ?>     
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='4') {  ?>
    <?php  foreach ( hnysweb_commnums($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
   <?php  include $this->GetTemplate('post-list-weburljian');  ?>     
    <?php }   ?>
    <?php }else{  ?>
    <?php  foreach ( GetList($Rnums3,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
   <?php  include $this->GetTemplate('post-list-weburljian');  ?>     
    <?php }   ?>
    <?php } ?>
    </ul>
    <?php }elseif($zbp->categorys[$bid]->Metas->liststyle =='3') {  ?>
    <ul class="qrcode"><!--二维码分类-->
    <?php if ($zbp->Config('hnysweb')->paixu =='1') { ?>
    <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='2') {  ?>
<?php  foreach ( hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='3') {  ?>
    <?php  foreach ( hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='4') {  ?>
    <?php  foreach ( hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
    <?php }else{  ?>
    <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
    <?php } ?>
    </ul>
    <?php }elseif($zbp->categorys[$bid]->Metas->liststyle =='4') {  ?>
    <ul class="catelist">
    <?php  foreach ( GetList($Rnums2,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-news');  ?>
    <?php }   ?></ul>
    <?php }else{  ?>
    <ul class="weburl"><!--网址分类-->
   <?php if ($zbp->Config('hnysweb')->paixu =='1') { ?>
   <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='2') {  ?>
    <?php  foreach ( hnysweb_postasc($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='3') {  ?>
   <?php  foreach ( hnysweb_GetArticleCategorys($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }elseif($zbp->Config('hnysweb')->paixu =='4') {  ?>
    <?php  foreach ( hnysweb_commnums($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture')) as $key=>$article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
    <?php }else{  ?>
    <?php  foreach ( GetList($Rnums,$bid,null,null,null,null,array('has_subcate'=>'ture'))as $key=>$article) { ?> 
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>    
    <?php } ?></ul>
    <?php } ?>
    </div>
<?php } ?>
<?php }   ?>
<?php if ($zbp->Config('hnysweb')->flink) { ?>
<div class="spm">
 <h3>友情链接</h3>
  <ul class="flink"><?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?></ul>
</div>
<?php } ?> 