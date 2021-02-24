
<?php  /* Template Name:侧栏用户卡片 */  ?>
<?php 
    $admin = $zbp->GetMemberList(
        '',
        array(array('=', 'mem_Level', 1), array('=', 'mem_Status', 0)),
        array('mem_ID' => 'ASC'),
        1
    );
	$avatarUrl = $zbp->Config('Lucky')->avatar ? Lucky_Host($zbp->Config('Lucky')->avatar) : Lucky_Host($zbp->host.'zb_users/theme/Lucky/style/image/avatar.png');
	$bgUrl = $zbp->Config('Lucky')->cardBg ? Lucky_Host($zbp->Config('Lucky')->cardBg) : Lucky_Host($zbp->host.'zb_users/theme/Lucky/style/image/profile-bg.jpg');
 ?>
<div class="card widget">
	<img src="<?php  echo $bgUrl;  ?>" alt="<?php  echo $admin[0]->StaticName;  ?> background-image">
	<div class="card-body little-profile">
		<div class="pro-img">
			<img src="<?php  echo $avatarUrl;  ?>" alt="<?php  echo $admin[0]->StaticName;  ?>">
		</div>
		<h3 class="m-b-0"><?php  echo $admin[0]->StaticName;  ?></h3>
		<p><?php  echo $admin[0]->Intro;  ?></p>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php  echo $zbp->Config('Lucky')->qq_contact;  ?>&site=qq&menu=yes" target="_blank" class="m-t-10 btn btn-primary"><i class="fa fa-qq"></i> 联系我</a>
		<div class="data">
			<div class="box">
                <h3 class="m-b-0 font-light"><?php  echo $zbp->cache->all_article_nums;  ?></h3>
                <small>文章</small>
            </div>
            <div class="box">
                <h3 class="m-b-0 font-light"><?php  echo $zbp->cache->all_comment_nums;  ?></h3>
                <small>评论</small>
            </div>
            <div class="box">
                <h3 class="m-b-0 font-light"><?php  echo $zbp->cache->all_view_nums;  ?></h3>
                <small>浏览</small>
            </div>
        </div>
    </div>
</div>