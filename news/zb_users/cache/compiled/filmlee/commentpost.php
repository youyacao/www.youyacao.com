<div class="commentpost" id="comment">
    <h4><span><?php if ($user->ID>0) { ?><?php  echo $user->StaticName#;  ?><?php } ?><a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;"><small>取消回复</small></a></span>发表评论</h4>
	<form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>" >
	<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
<?php if ($user->ID>0) { ?>
	<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->Name;  ?>" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />	
<?php }else{  ?>
	<div class="form-group liuyan form-name"><input type="text" id="inpName" class="text" name="inpName" tabindex="1" value="访客" placeholder="名称（必填）"></div>
	<div class="form-group liuyan form-email"><input type="text" id="inpEmail" class="text" name="inpEmail" tabindex="2" placeholder="邮箱"> </div>
	<div class="form-group liuyan form-www"><input type="text" id="inpHomePage" name="inpHomePage" onfocus="this.value='http://';" class="text" tabindex="3" placeholder="网址"> </div>
<?php } ?>
	<!--verify-->
	<p><textarea placeholder="请爱护环境，勿发小广告！O(∩_∩)O~~" name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
	<div class="form-inpVerify"> 
	<div class="input-inpVerify"><input type="text" id="inpVerify" name="inpVerify" tabindex="4" placeholder="验证码">
	<div class="input-group-addon"><img src="<?php  echo $article->ValidCodeUrl;  ?>" alt="验证码" class="verifyimg" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();" /></div></div></div>
<?php } ?>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return VerifyMessage()" class="button" /></p>
	</form>
</div>