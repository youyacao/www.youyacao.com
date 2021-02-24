<ol>
	<li id="cmt<?php  echo $comment->ID;  ?>">
		<figure class="avatar">
			<img alt="<?php  echo $comment->Author->StaticName;  ?>" src="<?php  echo $comment->Author->Avatar;  ?>"/>
		</figure>
		<div class="info">
			<div class="name">网友<a href="<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank"><?php  echo $comment->Author->StaticName;  ?></a>留言：</div>
			<time><?php  echo $comment->Time();  ?></time>
			<div class="replay"><a href="javascript:void(0);" onclick="zbp.comment.reply('<?php  echo $comment->ID;  ?>')">回复该留言</a></div>
			<div class="text">
				<?php  echo $comment->Content;  ?>
			</div>
		</div>
		<?php  foreach ( $comment->Comments as $comment) { ?>
		<?php  include $this->GetTemplate('comment');  ?>
		<?php }   ?>
	</li>		
</ol>