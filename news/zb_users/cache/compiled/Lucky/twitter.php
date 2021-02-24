
<?php  /* Template Name:微语列表页 */  ?>
<?php isset($pageType) ? $pageType : $pageType = false; ?>
<div class="twitter <?php if ($pageType) { ?>twitter_nr<?php } ?>">
	<div class="twitter_main">
		<div class="twitter_avatar">
			<?php if ($zbp->Config('Lucky')->avatar) { ?>
				<img src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/grey.gif" data-original="<?php  echo Lucky_Host($zbp->Config('Lucky')->avatar);  ?>" alt="<?php  echo $article->Author->StaticName;  ?>"/>
			<?php }else{  ?>
				<img src="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/grey.gif" data-original="<?php  echo Lucky_Host();  ?>zb_users/theme/Lucky/style/image/avatar.png" alt="<?php  echo $article->Author->StaticName;  ?>"/>
			<?php } ?>
		</div>
		<div class="twitter_content">
			<p class="author"><?php  echo $article->Author->StaticName;  ?></p>
			<a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Content;  ?></a>
			<?php if ($article->Metas->imgs[0] != null) { ?>
				<ul class="twitter_images">
					<?php  foreach ( $article->Metas->imgs as $key => $values) { ?>
						<?php 
						    if ($zbp->Config('Lucky')->upyun == 'a') {
						        $thumbImages = Lucky_Host($values, true, 1);
						    } else {
						        $thumbImages = IMAGE::getPicUrlBy($values,150,150,4);
						    }
						 ?>
						<li><a data-src="<?php  echo Lucky_Host($values);  ?>" href="<?php  echo Lucky_Host($values);  ?>" class="lightgallery_item"><img src="<?php  echo Lucky_Host();  ?>/zb_users/theme/Lucky/style/image/grey.gif" data-original="<?php  echo $thumbImages;  ?>" alt="<?php  echo $article->Title;  ?> 第<?php  echo $key+1;  ?>张" /></a></li>
					<?php }   ?>
					<div class="clear"></div>
				</ul>
			<?php } ?>
			<?php  $sf_praise_sdk=SF_praise_sdk::findPostCount($article->ID);;  ?>
			<div class="twitter_time">
				<span class="twitter_t tra"><i class="fa fa-clock-o fa-fw"></i><?php  echo Lucky_TimeAgo($article->Time());  ?></span>
				<?php if ($zbp->CheckPlugin('changyan') != 1) { ?><span class="twitter_t tra"><a href="<?php if ($pageType) { ?>javascript:void(0)<?php }else{  ?><?php  echo $article->Url;  ?>#comment<?php } ?>"><i class="fa fa-comment-o fa-fw"></i> <?php if ($article->CommNums==0) { ?>抢沙发<?php }else{  ?><?php  echo $article->CommNums;  ?>次吐槽<?php } ?></a></span><?php } ?>
				<span class="twitter_t tra"><a href="javascript:void(0)" class="actio Whisper-like sf-praise-sdk" sfa="click" data-postid="<?php  echo $sf_praise_sdk->postid;  ?>" data-value="1"><i class="fa fa-thumbs-up"></i> 赞(<span class="sf-praise-sdk" sfa="num" data-value="1" data-postid="<?php  echo $sf_praise_sdk->postid;  ?>"><?php  echo $sf_praise_sdk->value1;  ?></span>)</a></span>
			</div>
		</div>
	</div>
</div>
<?php if ($pageType) { ?>
	<div class="r-pn-post">
		<div class="twitter-prev">
			<?php if ($article->Prev) { ?>
				<a title="<?php  echo $article->Prev->Title;  ?>" href="<?php  echo $article->Prev->Url;  ?>" rel="bookmark" class="prev_p">
					<span>上一条 :</span> <?php  echo $article->Prev->Title;  ?>
				</a>
			<?php }else{  ?>
				<a href="javascript:void(0)" class="next_p">
				<span>上一条 :</span> 没有了，已是最新说说。</a>
			<?php } ?>
		</div>
		<div class="twitter-next">
			<?php if ($article->Next) { ?>
				<a title="<?php  echo $article->Next->Title;  ?>" href="<?php  echo $article->Next->Url;  ?>" rel="bookmark" class="next_p">
				<span>下一条 :</span> <?php  echo $article->Next->Title;  ?></a>
			<?php }else{  ?>
				<a href="javascript:void(0)" class="next_p">
				<span>下一条 :</span> 没有了，已是最新说说。</a>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div>
	<?php if (!$article->IsLock) { ?>
		<?php  include $this->GetTemplate('comments');  ?>
	<?php } ?>
<?php } ?>