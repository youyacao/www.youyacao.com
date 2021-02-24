<div class="msg" id="cmt<?php  echo $comment->ID;  ?>">
<div class="msgimg">
		<img class="avatar" src="<?php  echo $comment->Author->Avatar;  ?>" alt=""/>
</div>
<div class="msgtxt">
	<div class="msgtxtbogy">
		<div class="msgname">
			<span class="dot"><?php  echo $key+1;  ?>#</span><a href="/links/?url=<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank"><?php  echo $comment->Author->StaticName;  ?></a>&nbsp;&nbsp;<span><?php  echo $comment->Time();  ?>&nbsp;<a href="#comment" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">回复该评论</a></span>
		</div>
	<div class="msgarticle">
		<?php  echo $comment->Content;  ?>
		<?php  foreach ( $comment->Comments as $comment) { ?>
		<?php  include $this->GetTemplate('comment');  ?>
		<?php }   ?>
	</div>
	</div>
</div>
</div>