
<?php  /* Template Name:公共底部 */  ?>
<div class="right-fixed">
	<div class="right-tool">
		<div class="a-box gotop" id="j-top"></div>
		<a href="<?php  echo $host;  ?>">
			<div class="a-box to_home"></div>
		</a>
		<?php if ($type=='article' || $type=='page') { ?>
			<a href="javascript:;">
				<div class="a-box to_comment" id="to_comment"></div>
			</a>
		<?php } ?>
		<?php if ($zbp->Config('Lucky')->qq_qr_code=="a") { ?>
		<div class="a-box wechat">
			<div class="wechat-wrap" style="display: none;">
				<?php if ($zbp->Config('Lucky')->qrcode) { ?>
					<img src="<?php  echo Lucky_Host($zbp->Config('Lucky')->qrcode);  ?>" alt="qr_code"/>
				<?php }else{  ?>
					<img src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/style/image/qr_code.png" alt="qr_code"/>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
		<div class="a-box godown" id="j-down"></div>
	</div>
</div>
</div>
<div id="footer">
	<div class="container">
		<?php if ($type == 'index' && $page == '1' && Lucky_Links()) { ?>
			<div class="footer_links">
				<span class="links_title">友情链接：</span>
				<div id="bookmarks" class="bookmarks">
					<?php  echo Lucky_Links();  ?>
					<div class="clear"></div>
				</div>
			</div>
		<?php } ?>
		<div id="footer_bottom">
			<div class="copyright"><?php  echo $zbp->Config('Lucky')->footer_left;  ?><?php  echo $copyright;  ?></div>
			<div class="themeauthor"><?php  echo $zbp->Config('Lucky')->footer_right;  ?></div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="sign">
	<div class="sign-mask"></div>
	<div class="containers">
		<div class="sign-tips"></div>
		<?php if ($user->ID>0) { ?>
		<div class="sign-social">
			<h2>欢迎 <?php  echo $user->Name;  ?> (<?php  echo $user->LevelName;  ?>)</h2>
		</div>
		<div class="sign-content">
			<p><i class="fa fa-asterisk"></i> 现在您可以进行以下操作：</p>
			<div class="sign-function">
				<ul>
					<li><a href="<?php  echo $host;  ?>zb_system/cmd.php?act=login"><i class="fa fa-link"></i> 后台首页</a></li>
					<li><a href="<?php  echo $host;  ?>zb_users/theme/Lucky/config/main.php"><i class="fa fa-link"></i> 主题配置</a></li>
					<li><a href="<?php  echo $host;  ?>zb_system/admin/edit.php?act=ArticleEdt"><i class="fa fa-link"></i> 新建文章</a></li>
					<li><a href="<?php  echo $host;  ?>zb_system/admin/index.php?act=SettingMng"><i class="fa fa-link"></i> 网站设置</a></li>
					<li><a href="<?php  echo $host;  ?>zb_users/plugin/AppCentre/main.php"><i class="fa fa-link"></i> 应用中心</a></li>
					<li><a href="<?php  echo $host;  ?>zb_system/admin/?act=ArticleMng"><i class="fa fa-link"></i> 查看文章</a></li>
					<div class="clear"></div>
				</ul>
				<div class="sign-exit">
					<a href="<?php  echo $host;  ?>zb_system/cmd.php?act=logout&csrfToken=<?php  echo $zbp->GetCSRFToken();  ?>" onclick="alert('您已成功退出！')">退出登陆 <i class="fa fa-sign-out"></i></a>
				</div>
			</div>
		</div>
		<?php }else{  ?>
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
				<h6><input type="text" name="edtUserName" class="form-control" id="edtUserName" checked="checked" required="required" value="<?php  echo GetVars('username','COOKIE');  ?>" placeholder="用户名"><i class="fa fa-user"></i></h6>
				<h6><input type="password" name="edtPassWord" class="form-control" id="edtPassWord" checked="checked" required="required" placeholder="密码"><i class="fa fa-lock" style="font-size:18px;"></i></h6>
				<div class="sign-submit">
					<input type="submit" class="btn btn-primary signinsubmit-loader" id="btnPosts" name="btnPosts" value="登录">
					<input type="hidden" name="action" value="signin">
					<label><input type="checkbox" name="chkRemember" id="chkRemember" tabindex="3" />下次自动登录</label>
				</div>
			</form>
		</div>
		<?php } ?>
	</div>
</div>
<script src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/typical.js" type="text/javascript"></script>
<?php if ($zbp->Config('Lucky')->sliders=='a') { ?>
	<script src="<?php  echo Lucky_Host();  ?>zb_users/theme/<?php  echo $theme;  ?>/script/swiper.min.js" type="text/javascript"></script>
<?php } ?>
<script>
<?php if ($zbp->Config('Lucky')->sliders=='a') { ?>var swiper=new Swiper('.swiper-container',{pagination:'.swiper-pagination',nextButton:'.swiper-button-next',prevButton:'.swiper-button-prev',paginationClickable:true,centeredSlides:true,autoplay:3333,loop:true});<?php } ?>$(document).ready(function(){$('nav#menu').mmenu({extensions:['border-full',"pagedim-black"],<?php if ($zbp->Config('Lucky')->mobilenav_search=='a') { ?>searchfield:true,<?php } ?>counters:true,navbar:{title:'Advanced Menu'},navbars:[{position:'top'<?php if ($zbp->Config('Lucky')->mobilenav_search=='a') { ?>,content:['searchfield']<?php } ?>},{position:'bottom',content:['<a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a>']}]});var API=$("nav#menu").data("mmenu");$(".mm-listview li a:not(a.mm-next)").click(function(){API.close()});$('#hamburger').on('click',function(e){e.preventDefault();var $html=$('html');if($html.hasClass('mm-opened')){API.close()}else{API.open()}});$('.main-content,.twitter_images').lightGallery({zoomFromImage:false,selector:'.lightgallery_item',thumbnail:true,animateThumb:false,showThumbByDefault:false})});
</script>
<?php if ($zbp->Config('Lucky')->pjax=='a') { ?>
<script type="text/javascript" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/script/pjax.js"></script><div class="pjax_loading"></div>
<?php } ?>
<?php  echo $footer;  ?>
<?php if (!($zbp->user->ID > 0 && $zbp->user->ID < 5) && $zbp->Config('Lucky')->geetest=='a') { ?>
	<script type="text/javascript" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/script/gt.js"></script>
	<script type="text/javascript" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/script/plugin.js"></script>
<?php } ?>
</body>
</html>