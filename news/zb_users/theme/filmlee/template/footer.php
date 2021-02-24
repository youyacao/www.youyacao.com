<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2></div>';die();?><footer class="footer">
<div class="footer-inner">
	<div class="footer-copyright">
		Copyright © {$zbp->Config('filmlee')->footer}<span class="spfgf">|</span>基于zblog搭建
		<span class="yunluocopyright">Theme by <a id="yunluo" href="https://www.talklee.com/"  rel="nofollow"  target="_blank" style="cursor:help;">李洋博客</a> -成都市一颗优雅草的官方博客欢迎大家投稿，免费分享PHP学习，技术知识，专注于PHP!
      
      </span>
      
	</div>
</div>
</footer>
{$footer}
<div class="tongjicode"></div>
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/filmlee.js"></script>
{if $zbp->Config('filmlee')->pjax=="1"}
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/pjax.js" ></script>
{/if}
</body>
</html>
