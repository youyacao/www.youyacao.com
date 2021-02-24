
<?php  include $this->GetTemplate('header');  ?>
<div id="mainContent">
  <?php  include $this->GetTemplate('post-adtop');  ?>  
  <div class="spm">
    <h3><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">首页</a><i class="iconfont">&#xe6f1;</i><?php  echo $article->Title;  ?>显示的结果</h3>
    <ul class="catelist"><?php  foreach ( $articles as $article) { ?>
<li><span><?php  echo hnysweb_TimeAgo($article->Time());  ?></span><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
<?php }   ?></ul>
<?php if ($pagebar) { ?> <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div><?php } ?>
</div><?php  include $this->GetTemplate('post-adbottom');  ?>
</div>
<?php  include $this->GetTemplate('footer');  ?>