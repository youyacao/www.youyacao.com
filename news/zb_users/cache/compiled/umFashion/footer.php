<?php  /* Template Name:公共底部 */  ?>
</section><div class="clear"></div>
<div id="divBottom">
    <div class="text"><h4 id="BlogPowerBy">Powered By zblog</h4><span>&nbsp;主题：优美尚品模版开发</span></div>
    <div class="text"><h3 id="BlogCopyRight"><?php  echo $copyright;  ?></h3><?php if ($zbp->Config('umFashion')->beian) { ?>&nbsp;<span><?php  echo $zbp->Config('umFashion')->beian;  ?></span><?php } ?></div>
</div>
<?php  echo $zbp->Config('umFashion')->ftcode;  ?>
<?php  echo $footer;  ?>
<div class="mask"></div>
</body>
</html>