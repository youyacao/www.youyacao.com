<?php echo'
	<meta charset="UTF-8">
	<div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Theme ID: Lucky</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author: 小锋博客</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author URI: Www.SongHaiFeng.Com</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author QQ: 284204003</h2>
		<h2 style="font-size:28px;margin-bottom:32px;color:000;">Author Email: 284204003@qq.com</h2>
	</div>
';die();?>
{* Template Name:公共底部 *}
<div class="right-fixed">
	<div class="right-tool">
		<div class="a-box gotop" id="j-top"></div>
		<a href="{$host}">
			<div class="a-box to_home"></div>
		</a>
		{if $type=='article' || $type=='page'}
			<a href="javascript:;">
				<div class="a-box to_comment" id="to_comment"></div>
			</a>
		{/if}
		{if $zbp->Config('Lucky')->qq_qr_code=="a"}
		<div class="a-box wechat">
			<div class="wechat-wrap" style="display: none;">
				{if $zbp->Config('Lucky')->upyun == "b"}
					{if $zbp->Config('Lucky')->qrcode}
						<img src="{$zbp->Config('Lucky')->qrcode}" alt="qr_code"/>
					{else}
						<img src="{$host}zb_users/theme/{$theme}/style/image/qr_code.png" alt="qr_code"/>
					{/if}
				{else}
					{if $zbp->Config('Lucky')->qrcode}
						{php}
							$qrcode = $zbp->Config('Lucky')->qrcode;
							$qrcode = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $qrcode);
						{/php}
						<img src="{$qrcode}" alt="qr_code"/>
					{else}
						<img src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/{$theme}/style/image/qr_code.png" alt="qr_code"/>
					{/if}
				{/if}
			</div>
		</div>
		{/if}
		<div class="a-box godown" id="j-down"></div>
	</div>
</div>
</div>
<div id="footer">
	<div class="container">
		{if $type=='index'&&$page=='1'}
		<div class="footer_links">
			<span class="links_title">友情链接：</span>
			<div id="bookmarks" class="bookmarks">
				{module:link}
				<div class="clear"></div>
			</div>
		</div>
		{/if}
		<div id="footer_bottom">
			<div class="copyright">{$zbp->Config('Lucky')->footer_left}{$copyright}</div>
			<div class="themeauthor">{$zbp->Config('Lucky')->footer_right}</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="sign">
	<div class="sign-mask"></div>
	<div class="containers">
		<div class="sign-tips"></div>
		{if $user.ID>0}
		<div class="sign-social">
			<h2>欢迎 {$user.Name} ({$user.LevelName})</h2>
		</div>
		<div class="sign-content">
			<p><i class="fa fa-asterisk"></i> 现在您可以进行以下操作：</p>
			<div class="sign-function">
				<ul>
					<li><a href="{$host}zb_system/cmd.php?act=login"><i class="fa fa-link"></i> 后台首页</a></li>
					<li><a href="{$host}zb_users/theme/Lucky/config/main.php"><i class="fa fa-link"></i> 主题配置</a></li>
					<li><a href="{$host}zb_system/admin/edit.php?act=ArticleEdt"><i class="fa fa-link"></i> 新建文章</a></li>
					<li><a href="{$host}zb_system/admin/index.php?act=SettingMng"><i class="fa fa-link"></i> 网站设置</a></li>
					<li><a href="{$host}zb_users/plugin/AppCentre/main.php"><i class="fa fa-link"></i> 应用中心</a></li>
					<li><a href="{$host}zb_system/admin/?act=ArticleMng"><i class="fa fa-link"></i> 查看文章</a></li>
					<div class="clear"></div>
				</ul>
				<div class="sign-exit">
					<a href="{$host}zb_system/cmd.php?act=logout&csrfToken={$zbp.GetCSRFToken()}" onclick="alert('您已成功退出！')">退出登陆 <i class="fa fa-sign-out"></i></a>
				</div>
			</div>
		</div>
		{else}
		<div class="sign-social">
			<h2>User Login</h2>
		</div>
		<div class="sign-form">
			<div class="login-error">
				<h4>帐号或密码错误,请重试.</h4>
			</div>
			<form id="sign-in" method="post">
				<input type="hidden" name="username" id="username" value=""/>
				<input type="hidden" name="password" id="password" value=""/>
				<input type="hidden" name="savedate" id="savedate" value="1"/>
				<h6><input type="text" name="edtUserName" class="form-control" id="edtUserName" checked="checked" required="required" value="{GetVars('username','COOKIE')}" placeholder="用户名"><i class="fa fa-user"></i></h6>
				<h6><input type="password" name="edtPassWord" class="form-control" id="edtPassWord" checked="checked" required="required" placeholder="密码"><i class="fa fa-lock" style="font-size:18px;"></i></h6>
				<div class="sign-submit">
					<input type="submit" class="btn btn-primary signinsubmit-loader" id="btnPosts" name="btnPosts" value="登录">
					<input type="hidden" name="action" value="signin">
					<label><input type="checkbox" name="chkRemember" id="chkRemember" tabindex="3" />下次自动登录</label>
				</div>
			</form>
		</div>
		{/if}
	</div>
</div>
<script src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/typical.js" type="text/javascript"></script>
{if $zbp->Config('Lucky')->sliders=='a'}
	<script src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/{$theme}/script/swiper.min.js" type="text/javascript"></script>
{/if}
<script>
{if $zbp->Config('Lucky')->sliders=='a'}var swiper=new Swiper('.swiper-container',{pagination:'.swiper-pagination',nextButton:'.swiper-button-next',prevButton:'.swiper-button-prev',paginationClickable:true,centeredSlides:true,autoplay:3333,loop:true});{/if}$(document).ready(function(){$('nav#menu').mmenu({extensions:['border-full',"pagedim-black"],{if $zbp->Config('Lucky')->mobilenav_search=='a'}searchfield:true,{/if}counters:true,navbar:{title:'Advanced Menu'},navbars:[{position:'top'{if $zbp->Config('Lucky')->mobilenav_search=='a'},content:['searchfield']{/if}},{position:'bottom',content:['<a href="{$host}" title="{$name}">{$name}</a>']}]});var API=$("nav#menu").data("mmenu");$(".mm-listview li a:not(a.mm-next)").click(function(){API.close()});$('#hamburger').on('click',function(e){e.preventDefault();var $html=$('html');if($html.hasClass('mm-opened')){API.close()}else{API.open()}});$('#main').lightGallery({zoomFromImage:false,selector:'.lightgallery_item',thumbnail:true,animateThumb:false,showThumbByDefault:false})});
</script>
{if $zbp->Config('Lucky')->pjax=='a'}
<script type="text/javascript" src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/Lucky/script/pjax.js"></script><div class="pjax_loading"></div>
{/if}
{$footer}
{if !($zbp.user.ID > 0 && $zbp.user.ID < 5) && $zbp->Config('Lucky')->geetest=='a'}
	<script type="text/javascript" src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/Lucky/script/gt.js"></script>
	<script type="text/javascript" src="{if $zbp->Config('Lucky')->upyun == 'a'}{$zbp->Config('upyun')->upyun_domain}/{else}{$host}{/if}zb_users/theme/Lucky/script/plugin.js"></script>
{/if}
</body>
</html>