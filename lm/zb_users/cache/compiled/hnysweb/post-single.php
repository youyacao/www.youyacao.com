
<div id="mainContent"><?php  include $this->GetTemplate('post-adtop');  ?> 
  <div class="spm">
      <?php  include $this->GetTemplate('post-breadcrumb');  ?>
      
    <div class="content">
     <?php if ($article->Category->Metas->liststyle =='4') { ?>
        <h1><?php  echo $article->Title;  ?></h1>
      <p class="info">时间：<?php  echo hnysweb_TimeAgo($article->Time());  ?>&nbsp;&nbsp;&nbsp;阅读：<?php  echo $article->ViewNums;  ?><?php if ($article->CommNums>0) { ?>&nbsp;&nbsp;&nbsp;评论：<?php  echo $article->CommNums;  ?><?php } ?></p>
     <?php }else{  ?> 
      <div class="clogo"><img class="lazy" data-original="<?php if ($article->Metas->pic) { ?><?php  echo $article->Metas->pic;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/noimg.jpg<?php } ?>" alt="<?php  echo $article->Title;  ?>"></div>
      <div class="desc">
         <h1><?php  echo $article->Title;  ?></h1>
        <p><?php if ($article->Category->Metas->liststyle =='3') { ?>微信<?php }else{  ?>网址<?php } ?>简介：<?php if ($article->Metas->Setjs) { ?><?php  echo $article->Metas->Setjs;  ?><?php }else{  ?>未填写<?php } ?></p>
        <p>更新时间：<?php  echo hnysweb_TimeAgo($article->Time());  ?> </p>
        <p>访问次数：<?php  echo $article->ViewNums;  ?></p>
        <?php if ($article->Metas->Setwailian) { ?><div class="oclink"><a target="_blank" href="<?php  echo $article->Metas->Setwailian;  ?>"<?php if ($zbp->Config('hnysweb')->nofollow) { ?> rel="nofollow"<?php } ?>>访问网址</a></div><?php } ?>
      </div>
        <div class="description">详细介绍</div>
      <?php } ?>
        
        
       <div class="bodytext">
      <?php  echo $article->Content;  ?>
        </div>
        
       <?php if ($article->Tags) { ?><div class="tags">
      <?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a><?php }   ?>
      </div><?php } ?>
        
      <?php if ($article->Category->Metas->liststyle =='4') { ?>
     <div class="post-nav"> <?php if ($article->Prev->Url) { ?><p>上一篇：<a href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a></p><?php } ?>
      <?php if ($article->Next->Url) { ?><p>下一篇：<a href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a></p><?php } ?>
        </div>
        <?php } ?>
     </div>
  </div>
    
    <?php if ($zbp->Config('hnysweb')->caini) { ?>
 <?php  include $this->GetTemplate('post-caini');  ?><?php } ?>
     <?php if (!$article->IsLock) { ?>
    <div class="spm">
      <?php  include $this->GetTemplate('comments');  ?>
     </div> <?php } ?>
 <?php  include $this->GetTemplate('post-adbottom');  ?>
</div> 