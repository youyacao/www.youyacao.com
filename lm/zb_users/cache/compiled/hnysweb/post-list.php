
<div class="spm <?php if ($zbp->Config('hnysweb')->spmtwo) { ?><?php }else{  ?>spmtwo<?php } ?>"><?php  include $this->GetTemplate('post-breadcrumb');  ?>      
  <?php if ($type == 'category') { ?>
  <?php if ($category->Parent) { ?>
  <?php  $catId = $category->ParentID;  ?>
  <div class="navlower">
    <ul>
      <div class="lower">同级分类：</div>
      <?php  echo hnysweb_subCate($catId);  ?>
    </ul>
  </div>
  <?php }elseif($category->SubCategorys) {  ?>
  <?php  $catId = $category->ID;  ?>
  <div class="navlower">
    <ul>
      <div class="lower">子分类：</div>
      <?php  echo hnysweb_subCate($catId);  ?>
    </ul>
  </div>
  <?php } ?>
  <?php } ?> 
  <?php if ($type=='category') { ?> 
  <?php if ($category->Intro) { ?>
  <div class="abstract"><?php  echo $category->Intro;  ?></div>
  <?php } ?>
  <?php if ($category->Metas->liststyle =='1') { ?> 
  <!---网站导航列表-->
  <ul class="weburl"> 
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
  </ul>
  <?php }elseif($category->Metas->liststyle =='2') {  ?>
  <ul class="weburl_jian">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-weburljian');  ?>
    <?php }   ?>
  </ul>
  <!---网站导航(精简ico+标题)--> 
  <?php }elseif($category->Metas->liststyle =='3') {  ?> 
  <!---二维码列表-->
  <ul class="qrcode">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-qrcode');  ?>
    <?php }   ?>
  </ul>
  <?php }elseif($category->Metas->liststyle =='4') {  ?> 
  <!---文章列表-->
  <ul class="catelist">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-news');  ?>
    <?php }   ?>
  </ul>
  <?php }else{  ?> 
  <!---什么都不选择时默认网站导航列表-->
  <ul class="weburl">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-weburl');  ?>
    <?php }   ?>
  </ul>
  <?php } ?>
  <?php }else{  ?>
    <ul class="catelist">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-list-news');  ?>
    <?php }   ?>
  </ul>
  <?php } ?> 

  <?php if ($pagebar) { ?>
  <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
  <?php } ?> </div>
