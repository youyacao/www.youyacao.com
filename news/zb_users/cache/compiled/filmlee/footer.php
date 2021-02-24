<footer class="footer">
<div class="footer-inner">
	<div class="footer-copyright">
		Copyright © <?php  echo $zbp->Config('filmlee')->footer;  ?><span class="spfgf">|</span>基于zblog搭建
		<span class="yunluocopyright">Theme by <a id="yunluo" href="https://www.talklee.com/"  rel="nofollow"  target="_blank" style="cursor:help;">李洋博客</a> -成都市一颗优雅草的官方博客欢迎大家投稿，免费分享PHP学习，技术知识，专注于PHP!
      
      </span>
      
	</div>
</div>
</footer>
<?php  echo $footer;  ?>
<div class="tongjicode"></div>
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/filmlee.js"></script>
<?php if ($zbp->Config('filmlee')->pjax=="1") { ?>
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/pjax.js" ></script>
<?php } ?>
</body>
</html>
