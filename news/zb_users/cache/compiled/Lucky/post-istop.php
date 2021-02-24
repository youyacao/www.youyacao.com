
<?php  /* Template Name:列表页单条置顶文章 */  ?>
<?php 
	$randImg = Lucky_Host().'zb_users/theme/Lucky/style/img/'.mt_rand(1, 5).'.jpg';
	if ($article->Metas->XF_Thumbnail) {
		$img = Lucky_Host($article->Metas->XF_Thumbnail);
	} elseif ($zbp->Config('Lucky')->upyun == 'a') {
		$pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
		preg_match_all($pattern, $article->Content, $matchContent);
		if(isset($matchContent[1][0])) {
			$img = Lucky_Host($matchContent[1][0], true);
		} else {
			$img = $randImg;
		}
	} else {
		IMAGE::getPics($article,200,130,3);
		if ($article->IMAGE_COUNT>0) {
			$img = $article->IMAGE[0];
		} else {
			$img = $randImg;
		}
	}
 ?>
<div class="post-box tra">
<div class="top"></div>
	<div class="post-thumb">
		<div class="post-cate tra">
			<ul class="post-categories"><li><a href="<?php  echo $article->Category->Url;  ?>" title="<?php  echo $article->Category->Name;  ?>" rel="category tag"><?php  echo $article->Category->Name;  ?></a></li></ul>
		</div>
		<a href="<?php  echo $article->Url;  ?>" rel="bookmark" title="<?php  echo $article->Title;  ?>">
			<img class="scrollLoading" src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/grey.gif" data-original="<?php  echo $img;  ?>" title="<?php  echo $article->Title;  ?>" alt="<?php  echo $article->Title;  ?>" />
		</a>
		<div class="clear"></div>
	</div>
	<div class="post-main">
		<div class="post-header">
			<h2 class="post-title tra">
				<span>[置顶]</span>
				<a href="<?php  echo $article->Url;  ?>" class="inlo-a tra" rel="bookmark" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?>
					<span class="tra animate-bounce-up"></span>
				</a>
			</h2>
		</div>
		<div class="post-tags">
			<span class="podate"><a><i class="fa fa-clock-o fa-fw"></i><?php  echo Lucky_TimeAgo($article->Time());  ?></a></span>
			<span class="views"><a><i class="fa fa-eye fa-fw"></i> <?php  echo $article->ViewNums;  ?>人围观</a></span>
			<?php if ($zbp->CheckPlugin('changyan') != 1) { ?><span class="comments" ><a href="<?php  echo $article->Url;  ?>#comment" title="查看《<?php  echo $article->Title;  ?>》的吐槽"><i class="fa fa-comment-o fa-fw"></i> <?php if ($article->CommNums==0) { ?>抢沙发<?php }else{  ?><?php  echo $article->CommNums;  ?>次吐槽<?php } ?></a></span><?php } ?>
		</div>
		<div class="post-excerpt">
		<?php $description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),78)).'...'; ?>
		<?php  echo $description;  ?>
		</div>
	</div>
</div>