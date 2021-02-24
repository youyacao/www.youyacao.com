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
{* Template Name:评论发布框 *}
<div class="commentpost" id="comment">
    <div class="user_conment">{if $user.ID>0}<i class="fa fa-user"></i> {$user.Name#} <span id="comment_count">发表评论</span>{else}<i class="fa fa-pencil"></i> 发表评论{/if} <a rel="nofollow" id="cancel-reply" href="javascript:;" style="display:none;"><small>取消回复</small></a></div>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<div class="inpName"><input type="text" name="inpName" id="inpName" placeholder="昵称/QQ号码：" class="text" value="" size="28" tabindex="1" /></div>
	<div class="inpEmail"><input type="text" name="inpEmail" id="inpEmail" placeholder="邮箱：" class="replytext text" value="" size="28" tabindex="2" /></div>
	<div class="inpHomePage"><input type="text" name="inpHomePage" id="inpHomePage" placeholder="网址：" class="replytext text" value="" size="28" tabindex="3" /></div>
	{if $option['ZC_COMMENT_VERIFY_ENABLE']}
		<div class="inpVerify">
			<input type="text" name="inpVerify" id="inpVerify" placeholder="验证码：" value="" size="28" tabindex="5" />
			<div class="inpverifyimg">
				<img src="{$article.ValidCodeUrl}" class="verifyimg" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
			</div>
		</div>
	{else}
		{if $zbp->Config('Lucky')->geetest=="a"}
			<div id="geetest" class="geetest"></div>
		{/if}
	{/if}
{/if}
	<div class="txaArticle">
		<div id="shortcut-reply">
			<span id="faces"><i class="fa fa-smile-o"></i></span>
			<a href="javascript:;" title="签到" id="sign" ><i class="fa fa-pencil"></i></a>
			<a href="javascript:;" title="赞一个" id="praise"><i class="fa fa-thumbs-o-up"></i></a>
			<a href="javascript:;" title="踩一个" id="down"><i class="fa fa-thumbs-o-down"></i></a>
			<a href="javascript:;" title="加油" id="peace"><i class="fa fa-hand-peace-o"></i></a>
			<div id="UbbFrame" style="display: none;" ></div>
		</div>
		<textarea name="txaArticle" id="txaArticle" class="textarea text" placeholder="文明用语，禁止广告 ... 如需得到博主回复，提交评论前请正确填写邮箱地址 ..." style="height: 142px;" cols="50" rows="4" tabindex="5" required ></textarea>
	</div>
	<div class="inpsumbit inpsumbits">
		<input href="#comment" name="sumbit" type="submit" id="comment-btn" tabindex="6" value="提交评论" onclick="return zbp.comment.post()" class="button" />
	</div>
	</form>
	<div class="clear"></div>
</div>