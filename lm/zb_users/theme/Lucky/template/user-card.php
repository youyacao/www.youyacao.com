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
{* Template Name:侧栏用户卡片 *}
{php}
	$admin = isset($zbp->members[1]) ? $zbp->members[1] : false;
	if(!$admin){
		return false;
	}
    if ($zbp->Config('Lucky')->upyun == "b") {
    	$avatarUrl = $zbp->Config('Lucky')->avatar ? $zbp->Config('Lucky')->avatar : $zbp->host.'zb_users/theme/Lucky/style/image/avatar.png';
    	$bgUrl = $zbp->Config('Lucky')->cardBg ? $zbp->Config('Lucky')->cardBg : $zbp->host.'zb_users/theme/Lucky/style/image/profile-bg.jpg';
	} else {
		$avatarUrlOld = $zbp->host.'zb_users/theme/Lucky/style/image/avatar.png';
		$avatarUrlNew = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $avatarUrlOld);
		$avatarUrl = $zbp->Config('Lucky')->avatar ? $zbp->Config('Lucky')->avatar : $avatarUrlNew;
		$bgUrlOld = $zbp->host.'zb_users/theme/Lucky/style/image/profile-bg.jpg';
		$bgUrlNew = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $bgUrlOld);
		$bgUrl = $zbp->Config('Lucky')->cardBg ? $zbp->Config('Lucky')->cardBg : $bgUrlNew;
	}
{/php}
<div class="card widget">
	<img class="" src="{$bgUrl}" alt="{$admin.StaticName} background-image">
	<div class="card-body little-profile">
		<div class="pro-img">
			<img src="{$avatarUrl}" alt="{$admin.StaticName}">
		</div>
		<h3 class="m-b-0">{$admin.StaticName}</h3>
		<p>{$admin.Intro}</p>
		<a href="http://wpa.qq.com/msgrd?v=3&uin={$zbp->Config('Lucky')->qq_contact}&site=qq&menu=yes" target="_blank" class="m-t-10 btn btn-primary"><i class="fa fa-qq"></i> 联系我</a>
		<div class="data">
			<div class="box">
                <h3 class="m-b-0 font-light">{$zbp->cache->all_article_nums}</h3>
                <small>文章</small>
            </div>
            <div class="box">
                <h3 class="m-b-0 font-light">{$zbp->cache->all_comment_nums}</h3>
                <small>评论</small>
            </div>
            <div class="box">
                <h3 class="m-b-0 font-light">{$zbp->cache->all_view_nums}</h3>
                <small>浏览</small>
            </div>
        </div>
    </div>
</div>