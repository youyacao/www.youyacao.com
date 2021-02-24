<?php  /* Template Name:评论发布框 */  ?>
<div class="compost">
    <form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>">
        <input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>"/>
        <input type="hidden" name="inpRevID" id="inpRevID" value="0"/>
        <div class="com_name">
            <?php if ($user->ID>0) { ?><span><?php  echo $user->StaticName;  ?></span><?php } ?><a rel="nofollow" id="cancel-reply" href="#comments" style="display:none;"><span>取消回复</span></a>
        </div>
        <div class="com_info">
            <?php if ($user->ID>0) { ?>
            <input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->StaticName;  ?>"/>
            <input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>"/>
            <input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>"/> <?php }else{  ?>
            <ul>
                <li><input type="text" name="inpName" id="inpName" value="<?php  echo $user->StaticName;  ?>" size="28" tabindex="1" placeholder="昵称（*必填）"/>
                </li>
                <li><input type="text" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" size="28" tabindex="2" placeholder="邮箱"/>
                </li>
                <li><input type="text" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" size="28" tabindex="3" placeholder="主页"/>
                </li>
                <?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
                <li><input type="text" name="inpVerify" id="inpVerify" value="" size="28" tabindex="4" placeholder="验证码"/>
                    <span><img style="width:<?php  echo $option['ZC_VERIFYCODE_WIDTH'];  ?>px;height:<?php  echo $option['ZC_VERIFYCODE_HEIGHT'];  ?>px;cursor:pointer;" src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/></span>
                </li>
                <?php } ?>
            </ul>
            <?php } ?> 
        </div>
        <div class="com_box">
            <textarea name="txaArticle" id="txaArticle" cols="50" rows="4" tabindex="5" placeholder="◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。"></textarea>
        </div>
        <div class="com_info">
            <button name="sumbit" type="submit" id="sumbit" tabindex="6" onclick="return zbp.comment.post()">提交评论</button>
        </div>
    </form>
</div>