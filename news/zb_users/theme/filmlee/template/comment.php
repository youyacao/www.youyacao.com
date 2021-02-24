<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;color:f00;">欢迎您的访问！</h2><h3>但是，这里并没有你想找的东西，喜欢这个的主题可以联系我们！</h3><h2 style="font-size:50px;margin-bottom:32px;color:f00;">QQ：229693666</h2></div>';die();?><div class="msg" id="cmt{$comment.ID}">
<div class="msgimg">
		<img class="avatar" src="{$comment.Author.Avatar}" alt=""/>
</div>
<div class="msgtxt">
	<div class="msgtxtbogy">
		<div class="msgname">
			<span class="dot">{$key+1}#</span><a href="/links/?url={$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a>&nbsp;&nbsp;<span>{$comment.Time()}&nbsp;<a href="#comment" onclick="RevertComment('{$comment.ID}')">回复该评论</a></span>
		</div>
	<div class="msgarticle">
		{$comment.Content}
		{foreach $comment.Comments as $comment}
		{template:comment}
		{/foreach}
	</div>
	</div>
</div>
</div>