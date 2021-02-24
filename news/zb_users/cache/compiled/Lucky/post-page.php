
<?php  /* Template Name:页面页页面内容 */  ?>
<div class="post">
    <h1 class="post-title">
    	<?php if ($user->ID>0) { ?>
			<a href="<?php  echo $host;  ?>zb_system/admin/edit.php?act=ArticleEdt&id=<?php  echo $article->ID;  ?>" target="_blank">[编辑]</a>
		<?php } ?>
    	<a href="<?php  echo $article->Url;  ?>" rel="bookmark"><?php  echo $article->Title;  ?></a>
    </h1>
    <div class="p_info">
        <span class="info_author info_ico"><i class="fa fa-user"></i> <a href="<?php  echo $article->Author->Url;  ?>" title="<?php  echo $name;  ?>"><?php  echo $article->Author->StaticName;  ?></a></span>
		<span class="info_date info_ico"><i class="fa fa-clock-o fa-fw"></i><?php  echo Lucky_TimeAgo($article->Time());  ?></span>
        <span class="info_views info_ico"><i class="fa fa-eye fa-fw"></i> <?php  echo $article->ViewNums;  ?>人围观</span>
        <?php if ($zbp->CheckPlugin('changyan') != 1) { ?><span class="info_comment info_ico"><i class="fa fa-comment-o fa-fw"></i> <a href="javascript:;" title="点击评论"><?php if ($article->CommNums==0) { ?>抢沙发<?php }else{  ?><?php  echo $article->CommNums;  ?>次吐槽<?php } ?></a></span><?php } ?>
		<?php if ($zbp->Config('Lucky')->check_bdurl=="a") { ?>
			<span class="info_baiduurl info_ico"><?php  echo $LuckyBaiduRecond;  ?></span>
		<?php } ?>
        <span style="font-size:12px;position:relative;top:-1px"></span>
    </div>
    <div class="main-content" rel="lightbox">
		<?php  echo $article->Content;  ?>
		<?php if ($zbp->Config('Lucky')->z_s_f_kg=="a") { ?>
		<div id="xf_zsf">
			<div class="xf_zsf-main">
				<span class="likes">
					<a href="javascript:;" title="文章很赞，我赞，我赞，我赞赞赞..." class="sf-praise-sdk" sfa="click" data-postid="<?php  echo $sf_praise_sdk->postid;  ?>" data-value="1" data-ok="zan" ><i class="fa fa-thumbs-up"></i> 赞 <span class="sf-praise-sdk" sfa="num" data-value="1" data-postid="<?php  echo $sf_praise_sdk->postid;  ?>"><?php  echo $sf_praise_sdk->value1;  ?></span> </a>
				</span>
				<span class="da_shang">
					<a href="javascript:;" onclick="PaymentUtils.show();" >赏</a>
				</span>
				<span class="shares">
					<a href="javascript:;" onclick="Post_Share.show();" title="文章不错，好内容要一起分享。"><i class="fa fa-share-alt"></i> 分享 </a>
				</span>
				<div class="clear"></div>
			</div>
		</div>
		<div class="ds-dialog" id='pay' style="display: none;">
			<div class="ds-dialog-bg" onclick="PaymentUtils.hide();"></div>
			<div class="ds-dialog-content ds-dialog-pc ">
				<i class="ds-close-dialog">&times;</i>
				<h5>选择打赏方式：</h5>
				<div class="ds-payment-way">
					<label for="wechat"><input type="radio" id="wechat" class="reward-radio" value="0" name="reward-way" checked="checked" />微信</label>
					<label for="qqqb"><input type="radio" id="qqqb" class="reward-radio" value="1" name="reward-way" />QQ钱包</label>
					<label for="alipay"><input type="radio" id="alipay" class="reward-radio" value="2" name="reward-way"/>支付宝</label>
				</div>
				<div class="ds-payment-img">
					<div class="qrcode-img qrCode_0" id="qrCode_0">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(60, 175, 54">
							<?php if ($zbp->Config('Lucky')->wx) { ?>
								<img class="qrcode-img qrCode_0" id="qrCode_0" src="<?php  echo Lucky_Host($zbp->Config('Lucky')->wx);  ?>" />
							<?php }else{  ?>
								<img class="qrcode-img qrCode_0" id="qrCode_0" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/wx.png" />
							<?php } ?>
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
					<div class="qrcode-img qrCode_1" id="qrCode_1">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(102, 153, 204">
							<?php if ($zbp->Config('Lucky')->qq) { ?>
								<img class="qrcode-img qrCode_1" id="qrCode_1" src="<?php  echo Lucky_Host($zbp->Config('Lucky')->qq);  ?>" />
							<?php }else{  ?>
								<img class="qrcode-img qrCode_1" id="qrCode_1" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/qq.png" />
							<?php } ?>
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
					<div class="qrcode-img qrCode_2" id="qrCode_2">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(235, 95, 1">
							<?php if ($zbp->Config('Lucky')->zfb) { ?>
								<img class="qrcode-img qrCode_2" id="qrCode_2" src="<?php  echo Lucky_Host($zbp->Config('Lucky')->zfb);  ?>" />
							<?php }else{  ?>
								<img class="qrcode-img qrCode_2" id="qrCode_2" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/zfb.png" />
							<?php } ?>
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
				</div>
				<div class="ds-payment-text">
					<p><i class="fa fa-quote-left"></i><i class="fa fa-quote-right"></i><?php  echo $zbp->Config('Lucky')->pay_text;  ?></p>
				</div>
			</div>
		</div>
		<div class="ds-dialog" id='post_share' style="display: none;">
			<div class="ds-dialog-bg" onclick="Post_Share.hide();"></div>
			<div class="ds-dialog-content ds-dialog-pc ">
				<i class="ds-close-dialog">&times;</i>
				<h5>选择分享方式：</h5>
				<div class="share-img ds-payment-img">
					<div class="qrcode-img">
						<div class="four-share">
							<?php 
								$pattern="/<[img|IMG].*?data-original=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
								$content = $article->Content;
								$Lucky_image="";
								preg_match_all($pattern,$content,$matchContent);
								if(isset($matchContent[1][0]))
									$Lucky_image=$matchContent[1][0];
							 ?>
							<a href="http://service.weibo.com/share/share.php?title=<?php  echo $title;  ?><?php if ($article->Metas->XF_Addtitle) { ?>-<?php  echo $article->Metas->XF_Addtitle;  ?><?php } ?><?php if ($zbp->Config('Lucky')->post_category=='a') { ?>-<?php  echo $article->Category->Name;  ?><?php } ?>-<?php  echo $name;  ?>&url=<?php  echo $article->Url;  ?>&source=<?php  echo $name;  ?>&pic=<?php  echo $Lucky_image;  ?>" title="分享到新浪微博" class="weibo" target="_blank" title=""><span></span></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php  echo $article->Url;  ?>&showcount=0&desc=给你分享一篇好文章，快来看看吧！&summary=<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...'; ?><?php  echo $description;  ?>&title=<?php  echo $title;  ?><?php if ($article->Metas->XF_Addtitle) { ?>-<?php  echo $article->Metas->XF_Addtitle;  ?><?php } ?><?php if ($zbp->Config('Lucky')->post_category=='a') { ?>-<?php  echo $article->Category->Name;  ?><?php } ?>-<?php  echo $name;  ?>&source=<?php  echo $name;  ?>&pics=<?php  echo $Lucky_image;  ?>" title="分享给QQ好友" class="qqqq" target="_blank" title=""><span></span></a>
							<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php  echo $article->Url;  ?>&desc=给大家分享一篇好文章，快来看看吧！&title=<?php  echo $title;  ?><?php if ($article->Metas->XF_Addtitle) { ?>-<?php  echo $article->Metas->XF_Addtitle;  ?><?php } ?><?php if ($zbp->Config('Lucky')->post_category=='a') { ?>-<?php  echo $article->Category->Name;  ?><?php } ?>-<?php  echo $name;  ?>&source=<?php  echo $name;  ?>&pics=<?php  echo $Lucky_image;  ?>&summary=<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...'; ?><?php  echo $description;  ?>" title="分享到QQ空间" class="qzone" target="_blank" title=""><span></span></a>
							<a href="http://shuo.douban.com/!service/share?href=<?php  echo $article->Url;  ?>&name=<?php  echo $title;  ?><?php if ($article->Metas->XF_Addtitle) { ?>-<?php  echo $article->Metas->XF_Addtitle;  ?><?php } ?><?php if ($zbp->Config('Lucky')->post_category=='a') { ?>-<?php  echo $article->Category->Name;  ?><?php } ?>-<?php  echo $name;  ?>&text=<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...'; ?><?php  echo $description;  ?>&image=<?php  echo $Lucky_image;  ?>" title="分享到豆瓣" class="douban" target="_blank" title=""><span></span></a>
						</div>
						<div id="output" class="qrcode-border box-size"></div>
						<div class="wechat-icon"></div>
						<div class="qrcode-text">
							<p class="qrcode-tip">微信扫一扫，分享朋友圈</p>
							<p class="qrcode-tip">Or</p>
							<p class="qrcode-tip">手机扫一扫，精彩随身带</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">if(!+[1,]){Render = "table";} else {Render = "canvas";};content = utf16to8('<?php  echo $article->Url;  ?>');$('#output').qrcode({width: 185,height: 185,render: Render,correctLevel: 0,text: content});</script>
		<?php } ?>
	</div>
</div>
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>