<div class="commentform">
	<h3 class="boxtitle">我要留言</h3>
	<div id="comment">
		<form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>">
			<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
			<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
			<?php if ($user->ID>0) { ?>
			<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->Name;  ?>" />
			<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
			<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />
			<p>登录用户：<?php  echo $user->StaticName;  ?></p>
			<?php }else{  ?>
			<div class="item">
				<label>昵称：<i>*</i></label>
				<div class="input">
					<input type="text" name="inpName" id="inpName" class="text" value="<?php  echo $user->Name;  ?>" tabindex="1" placeholder="输入您的称呼"/> 
				</div>
			</div>
			<div class="item">
				<label>邮箱：<i>*</i></label>
				<div class="input">
					<input type="text" name="inpEmail" id="inpEmail" class="text" value="<?php  echo $user->Email;  ?>" tabindex="2" placeholder="输入您的邮箱，我们会为您保密"/>
				</div>
			</div>
			<div class="item">
				<label>网址：</label>
				<div class="input">
					<input type="text" name="inpHomePage" id="inpHomePage" class="text" value="<?php  echo $user->HomePage;  ?>" tabindex="3" placeholder="输入您的个人网站地址，可不填"/>
				</div>
			</div>
			<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
			<div class="item verify">
				<label for="verify">验证码*</label>
				<img src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/>
				<div class="input">
					<input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4" />
				</div>
			</div>
			<?php } ?>
			<?php } ?>
			<div class="item">
				<label>内容：</label>
				<div class="input">
					<textarea name="txaArticle" id="txaArticle" tabindex="5" placeholder="输入您要留言的内容"></textarea>
				</div>
			</div>
			<div class="item">
				<input type="submit" name="submit" class="submit" value="提交" tabindex="6" onclick="return zbp.comment.post()"/>
				<a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;">取消回复</a>
			</div>
		</form>
	</div>
</div>