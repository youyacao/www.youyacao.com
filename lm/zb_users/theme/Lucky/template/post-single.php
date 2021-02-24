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
{* Template Name:文章页文章内容 *}
<div class="post">
    <h1 class="post-title">
		{if $article.IsTop}[置顶]{/if}
		<a href="{$article.Url}" rel="bookmark" title="{$article.Title}">{$article.Title}</a>
	</h1>
    <div class="p_info">
       	<span class="info_author info_ico"><i class="fa fa-user"></i> <a href="{$article.Author.Url}" title="{$name}">{$article.Author.StaticName}</a></span>
		<span class="info_date info_ico"><i class="fa fa-clock-o fa-fw"></i>{Lucky_TimeAgo($article.Time())}</span>
        <span class="info_category info_ico">
			<i class="fa fa-folder-open"></i> <a href="{$article.Category.Url}" title="{$article.Category.Name}" rel="category tag">{$article.Category.Name}</a>
        </span>
        <span class="info_views info_ico"><i class="fa fa-eye fa-fw"></i> {$article.ViewNums}人围观</span>
        {if $zbp->CheckPlugin('changyan') != 1}<span class="info_comment info_ico"><i class="fa fa-comment-o fa-fw"></i> <a href="javascript:;" title="点击评论">{if $article.CommNums==0}抢沙发{else}{$article.CommNums}次吐槽{/if}</a></span>{/if}
		{if $zbp->Config('Lucky')->check_bdurl=="a"}
			<span class="info_baiduurl info_ico">{$LuckyBaiduRecond}</span>
		{/if}
        <span style="font-size:12px;position:relative;top:-1px"></span>
    </div>
    <div class="main-content" rel="lightbox">
		{$article.Content}
		{if $zbp->Config('Lucky')->z_s_f_kg=="a"}
		<div id="xf_zsf">
			<div class="xf_zsf-main">
				<span class="likes">
					<a href="javascript:;" title="文章很赞，我赞，我赞，我赞赞赞..." class="sf-praise-sdk" sfa="click" data-postid="{$sf_praise_sdk->postid}" data-value="1" data-ok="zan" ><i class="fa fa-thumbs-up"></i> 赞 <span class="sf-praise-sdk" sfa="num" data-value="1" data-postid="{$sf_praise_sdk->postid}">{$sf_praise_sdk->value1}</span> </a>
				</span>
				<span class="da_shang">
					<a href="javascript:;" onclick="PaymentUtils.show();" >赏</a>
				</span>
				<span class="shares">
					<a href="javascript:;" onclick="Post_Share.show();" title="文章不错，好内容要一起分享。"><i class="fa fa-share-alt"></i> 分享 </a>
				</span>
				<div class="clear"></div>
			</div>
		</div>
		<div class="ds-dialog" id='pay' style="display: none;">
			<div class="ds-dialog-bg" onclick="PaymentUtils.hide();"></div>
			<div class="ds-dialog-content ds-dialog-pc ">
				<i class="ds-close-dialog">&times;</i>
				<h5>选择打赏方式：</h5>
				<div class="ds-payment-way">
					<label for="wechat"><input type="radio" id="wechat" class="reward-radio" value="0" name="reward-way" checked="checked" />微信</label>
					<label for="qqqb"><input type="radio" id="qqqb" class="reward-radio" value="1" name="reward-way" />QQ钱包</label>
					<label for="alipay"><input type="radio" id="alipay" class="reward-radio" value="2" name="reward-way"/>支付宝</label>
				</div>
				<div class="ds-payment-img">
					<div class="qrcode-img qrCode_0" id="qrCode_0">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(60, 175, 54">
							{if $zbp->Config('Lucky')->upyun == "b"}
								{if $zbp->Config('Lucky')->wx}
									<img class="qrcode-img qrCode_0" id="qrCode_0" src="{$zbp->Config('Lucky')->wx}" />
								{else}
									<img class="qrcode-img qrCode_0" id="qrCode_0" src="{$host}zb_users/theme/Lucky/style/image/wx.png" />
								{/if}
							{else}
								{if $zbp->Config('Lucky')->wx}
									{php}
										$wx = $zbp->Config('Lucky')->wx;
										$wx = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $wx);
									{/php}
									<img class="qrcode-img qrCode_0" id="qrCode_0" src="{$wx}" />
								{else}
									<img class="qrcode-img qrCode_0" id="qrCode_0" src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/wx.png" />
								{/if}
							{/if}
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
					<div class="qrcode-img qrCode_1" id="qrCode_1">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(102, 153, 204">
							{if $zbp->Config('Lucky')->upyun == "b"}
								{if $zbp->Config('Lucky')->qq}
									<img class="qrcode-img qrCode_1" id="qrCode_1" src="{$zbp->Config('Lucky')->qq}" />
								{else}
									<img class="qrcode-img qrCode_1" id="qrCode_1" src="{$host}zb_users/theme/Lucky/style/image/qq.png" />
								{/if}
							{else}
								{if $zbp->Config('Lucky')->qq}
									{php}
										$qq = $zbp->Config('Lucky')->qq;
										$qq = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $qq);
									{/php}
									<img class="qrcode-img qrCode_1" id="qrCode_1" src="{$qq}" />
								{else}
									<img class="qrcode-img qrCode_1" id="qrCode_1" src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/qq.png" />
								{/if}
							{/if}
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
					<div class="qrcode-img qrCode_2" id="qrCode_2">
						<div class="qrcode-border box-size" style="border: 9.02px solid rgb(235, 95, 1">
							{if $zbp->Config('Lucky')->upyun == "b"}
								{if $zbp->Config('Lucky')->zfb}
									<img class="qrcode-img qrCode_2" id="qrCode_2" src="{$zbp->Config('Lucky')->zfb}" />
								{else}
									<img class="qrcode-img qrCode_2" id="qrCode_2" src="{$host}zb_users/theme/Lucky/style/image/zfb.png" />
								{/if}
							{else}
								{if $zbp->Config('Lucky')->zfb}
									{php}
										$zfb = $zbp->Config('Lucky')->zfb;
										$zfb = str_replace($zbp->host.'zb_users/', $zbp->Config('upyun')->upyun_domain.'/zb_users/', $zfb);
									{/php}
									<img class="qrcode-img qrCode_2" id="qrCode_2" src="{$zfb}" />
								{else}
									<img class="qrcode-img qrCode_2" id="qrCode_2" src="{$zbp->Config('upyun')->upyun_domain}/zb_users/theme/Lucky/style/image/zfb.png" />
								{/if}
							{/if}
						</div>
						<p class="qrcode-tip">打赏</p>
					</div>
				</div>
				<div class="ds-payment-text">
					<p><i class="fa fa-quote-left"></i><i class="fa fa-quote-right"></i>{$zbp->Config('Lucky')->pay_text}</p>
				</div>
			</div>
		</div>
		<div class="ds-dialog" id='post_share' style="display: none;">
			<div class="ds-dialog-bg" onclick="Post_Share.hide();"></div>
			<div class="ds-dialog-content ds-dialog-pc ">
				<i class="ds-close-dialog">&times;</i>
				<h5>选择分享方式：</h5>
				<div class="share-img ds-payment-img">
					<div class="qrcode-img">
						<div class="four-share">
							{php}
								$pattern="/<[img|IMG].*?data-original=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
								$content = $article->Content;
								$Lucky_image="";
								preg_match_all($pattern,$content,$matchContent);
								if(isset($matchContent[1][0]))
									$Lucky_image=$matchContent[1][0];
							{/php}
							<a href="http://service.weibo.com/share/share.php?title={$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}{if $zbp->Config('Lucky')->post_category=='a'}-{$article.Category.Name}{/if}-{$name}&url={$article.Url}&source={$name}&pic={$Lucky_image}" title="分享到新浪微博" class="weibo" target="_blank" title=""><span></span></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url={$article.Url}&showcount=0&desc=给你分享一篇好文章，快来看看吧！&summary={php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...';{/php}{$description}&title={$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}{if $zbp->Config('Lucky')->post_category=='a'}-{$article.Category.Name}{/if}-{$name}&source={$name}&pics={$Lucky_image}" title="分享给QQ好友" class="qqqq" target="_blank" title=""><span></span></a>
							<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={$article.Url}&desc=给大家分享一篇好文章，快来看看吧！&title={$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}{if $zbp->Config('Lucky')->post_category=='a'}-{$article.Category.Name}{/if}-{$name}&source={$name}&pics={$Lucky_image}&summary={php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...';{/php}{$description}" title="分享到QQ空间" class="qzone" target="_blank" title=""><span></span></a>
							<a href="http://shuo.douban.com/!service/share?href={$article.Url}&name={$title}{if $article.Metas.XF_Addtitle}-{$article.Metas.XF_Addtitle}{/if}{if $zbp->Config('Lucky')->post_category=='a'}-{$article.Category.Name}{/if}-{$name}&text={php}$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),66)).'...';{/php}{$description}&image={$Lucky_image}" title="分享到豆瓣" class="douban" target="_blank" title=""><span></span></a>
						</div>
						<div id="output" class="qrcode-border box-size"></div>
						<div class="wechat-icon"></div>
						<div class="qrcode-text">
							<p class="qrcode-tip">微信扫一扫，分享朋友圈</p>
							<p class="qrcode-tip">Or</p>
							<p class="qrcode-tip">手机扫一扫，精彩随身带</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">if(!+[1,]){Render = "table";} else {Render = "canvas";};content = utf16to8('{$article.Url}');$('#output').qrcode({width: 185,height: 185,render: Render,correctLevel: 0,text: content});</script>
		{/if}
	</div>
    <div class="p_msg">
        <div class="p_tags">
            <div class="tagcloud">
                <span>
                    TAGS：{if $article.Tags}{foreach $article.Tags as $tag}<a href="{$tag.Url}" title="{$tag.Name}" class="label bg-primary">{$tag.Name}</a>{/foreach}{else}本文暂时没有添加标签{/if}
                </span>
            </div>
        </div>
    </div>
    <div class="p-authorinfo">
        <div class="p-copyright">
            <p>
                本站文章除注明转载/出处外，均为本站原创或翻译。若要转载请务必注明出处，尊重他人劳动成果共创和谐网络环境。
            </p>
            <p>
                转载请注明 : 文章转载自 <i class="fa fa-angle-double-right"></i>&nbsp;
                <a href="{$host}" rel="bookmark" title="作者：{$article.Author.StaticName}">
                    {$name}
                </a>
                <i class="fa fa-angle-double-right"></i>&nbsp;
                <a href="{$article.Url}" rel="bookmark" title="本文固定链接：{$article.Url}">
                    {$article.Title}
                </a>
            </p>
            <p>
                本文标题：{$article.Title}
            </p>
            <p>
                本文链接：{$article.Url}
            </p>
        </div>
        <div class="clear">
        </div>
    </div>
	{if $zbp->Config('Lucky')->gdjc=="a"}
	<div class="p-recommend">
		<div class="p-recommend-title">更多精彩</div>
		<div class="p-recommend-all">
			<div class="recommend-left">
			{foreach GetList(3,null,null,null,null,null,array('is_related'=>$article.ID)) as $key => $related}
			{$i=$key+1}
				<li class="recommend-{$i++}" ><span>[{$related.Time('m-d')}]</span><a href="{$related.Url}" title="{$related.Title}" rel="bookmark">{$related.Title}</a></li>
			{/foreach}
			</div>
			<div class="recommend-right">
			{foreach GetList(6,null,null,null,null,null,array('is_related'=>$article.ID)) as $key => $related}
			{if $key>2}
				<li class="recommend-{$i++}" ><span>[{$related.Time('m-d')}]</span><a href="{$related.Url}" title="{$related.Title}" rel="bookmark">{$related.Title}</a></li>
			{/if}
			{/foreach}
			</div>
			<div class="clear"></div>
		</div>
	</div>
	{/if}
    <div class="r-pn-post">
		<div class="shang">
			{if $article.Prev}
				<a title="{$article.Prev.Title}" href="{$article.Prev.Url}" rel="bookmark" class="prev_p">
					<span>上一篇 :</span> {$article.Prev.Title}
				</a>
			{else}
				<a href="javascript:void(0)" class="next_p">
				<span>上一篇 :</span> 没有了,已是最新文章.</a>
			{/if}
		</div>
        <div class="xia">
			{if $article.Next}
				<a title="{$article.Next.Title}" href="{$article.Next.Url}" rel="bookmark" class="next_p">
				<span>下一篇 :</span> {$article.Next.Title}</a>
			{else}
				<a href="javascript:void(0)" class="next_p">
				<span>下一篇 :</span> 没有了,已是最新文章.</a>
			{/if}
		</div>
        <div class="clear"></div>
    </div>
</div>
{if !$article.IsLock}
{template:comments}
{/if}