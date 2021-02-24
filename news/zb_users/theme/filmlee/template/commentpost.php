<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?><div class="commentpost" id="comment">
    <h4><span>{if $user.ID>0}{$user.StaticName#}{/if}<a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;"><small>取消回复</small></a></span>发表评论</h4>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />	
{else}
	<div class="form-group liuyan form-name"><input type="text" id="inpName" class="text" name="inpName" tabindex="1" value="访客" placeholder="名称（必填）"></div>
	<div class="form-group liuyan form-email"><input type="text" id="inpEmail" class="text" name="inpEmail" tabindex="2" placeholder="邮箱"> </div>
	<div class="form-group liuyan form-www"><input type="text" id="inpHomePage" name="inpHomePage" onfocus="this.value='http://';" class="text" tabindex="3" placeholder="网址"> </div>
{/if}
	<!--verify-->
	<p><textarea placeholder="请爱护环境，勿发小广告！O(∩_∩)O~~" name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" ></textarea></p>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<div class="form-inpVerify"> 
	<div class="input-inpVerify"><input type="text" id="inpVerify" name="inpVerify" tabindex="4" placeholder="验证码">
	<div class="input-group-addon"><img src="{$article.ValidCodeUrl}" alt="验证码" class="verifyimg" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();" /></div></div></div>
{/if}
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return VerifyMessage()" class="button" /></p>
	</form>
</div>