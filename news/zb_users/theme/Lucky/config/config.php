<?php /* EL PSY CONGROO */    	 	  	 	
require 'config_header.php';    	  			 	
if(count($_POST) > 0){    	  	 	 	
    CheckIsRefererValid();    			  			
    $zbp->Config('Lucky')->twitter = $_POST['twitter'];    		  	   
    $zbp->Config('Lucky')->pjax = $_POST['pjax'];      					 
    $zbp->Config('Lucky')->check_bdurl = $_POST['check_bdurl'];        	 		
    $zbp->Config('Lucky')->gdjc = $_POST['gdjc'];    			 	 	 
    $zbp->Config('Lucky')->qq_qr_code = $_POST['qq_qr_code'];    	  	 	 	
    $zbp->Config('Lucky')->qq_contact = $_POST['qq_contact'];    	   				
    $zbp->Config('Lucky')->link_pc_kg = $_POST['link_pc_kg'];     		   	 
    $zbp->Config('Lucky')->link_mobile_kg = $_POST['link_mobile_kg'];    	  	 	 	
    $zbp->Config('Lucky')->mobilenav_search = $_POST['mobilenav_search'];    	 	     
    $zbp->Config('Lucky')->sidebarfollowed = $_POST['sidebarfollowed'];     		 			 
    $zbp->Config('Lucky')->geetest = $_POST['geetest'];     	    	 
    $zbp->Config('Lucky')->captcha_id = $_POST['captcha_id'];    		   	 	
    $zbp->Config('Lucky')->private_key = $_POST['private_key'];     		 		 	
    $zbp->Config('Lucky')->exclude_category = $_POST['exclude_category'];    	   	   
    $zbp->Config('Lucky')->upyun = $_POST['upyun'];    	 		 		 
    $zbp->Config('Lucky')->canvas = $_POST['canvas'];    		  			 
    if($zbp->Config('Lucky')->upyun == 'a'){       		 	 
        if (!$zbp->CheckPlugin('upyun')) {echo '仅支持又拍云插件，请确保又拍云插件已经启用并正确配置。';die();}    	 	    	
    }    		 		 		
    $zbp->SaveConfig('Lucky');     	 	 		 
    Lucky_Tips('success');    	  	  		
}     		  		 
       	 			
if ($zbp->Config('Lucky')->twitter && $zbp->Config('Lucky')->twitter != 'off') {    	    			
    $choiceTwitter = '当前被选择的分类为：'.$zbp->categorys[$zbp->Config('Lucky')->twitter]->Name;    				  	 
} else {        	   
    $choiceTwitter = '已关闭微语功能';      				 	
}     		 	  	
    		 		 		
?>

<form role="form" class="popover-main" method="post">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            基本设置
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            PJAX：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="PJAX无刷新翻页，可实现不间断音乐播放。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="pjax">
                                <option value="a" <?php if($zbp->Config('Lucky')->pjax == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->pjax == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            背景Canvas特效：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="整站背景Canvas特效，默认打开，手机浏览不加载。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="canvas">
                                <option value="a" <?php if($zbp->Config('Lucky')->canvas == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->canvas == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            微语分类：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="<?php echo $choiceTwitter; ?>">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="twitter">
                                <option value='off' <?php echo $zbp->Config('Lucky')->twitter ? '' : 'selected=""' ?>>关闭微语</option>
                                <?php echo Lucky_Category_twitter($zbp->Config('Lucky')->twitter);?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            百度收录：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="在文章页标题下显示当前文章是否被百度收录。（注意：此功能对网站打开速度略有影响，打开后文章打不开的话请关闭。）">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="check_bdurl">
                                <option value="a" <?php if($zbp->Config('Lucky')->check_bdurl == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->check_bdurl == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            更多精彩：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="在文章版权下方。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="gdjc">
                                <option value="a" <?php if($zbp->Config('Lucky')->gdjc == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->gdjc == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            联系站长：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="在页面右下方。关闭后下方的QQ号码和上传专区的右下角二维码设置无效">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="qq_qr_code">
                                <option value="a" <?php if($zbp->Config('Lucky')->qq_qr_code == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->qq_qr_code == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            QQ号码：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="侧栏顶部个人模块中的联系我，填写QQ号码即可。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="qq_contact" value="<?php echo $zbp->Config('Lucky')->qq_contact;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            隐藏分类：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="填写需要隐藏的分类ID，多个分类ID请用英文逗号（,）隔开；留空则不使用该功能；">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="exclude_category" value="<?php echo $zbp->Config('Lucky')->exclude_category;?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            移动导航-搜索：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否在移动端显示搜索（仅搜索菜单，并非全文，建议在设置多个菜单时候启用）">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="mobilenav_search">
                                <option value="a" <?php if($zbp->Config('Lucky')->mobilenav_search == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->mobilenav_search == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            侧栏跟随：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="填写需要跟随的ID或者Class即可，<a href='https://www.songhaifeng.com/ZBlog-Course/106.html' target='_blank'>查看说明</a>">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="sidebarfollowed" value="<?php echo $zbp->Config('Lucky')->sidebarfollowed;?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            电脑端友情链接：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否在电脑端显示友情链接">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="link_pc_kg">
                                <option value="a" <?php if($zbp->Config('Lucky')->link_pc_kg == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->link_pc_kg == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            移动端友情链接：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否在移动端显示友情链接">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="link_mobile_kg">
                                <option value="a" <?php if($zbp->Config('Lucky')->link_mobile_kg == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->link_mobile_kg == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            又拍云：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="使用此功能前，必须开启又拍云插件并正确配置，而且又拍云插件必须使用绑定域名功能，不懂请关闭，否则页面出错。<a href='<?php echo $zbp->host;?>/zb_users/theme/Lucky/main.php?act=explain'>查看又拍云设置说明</a>">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="upyun">
                                <option value="a" <?php if($zbp->Config('Lucky')->upyun == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->upyun == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            极验验证：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否使用极验验证">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="geetest">
                                <option value="a" <?php if($zbp->Config('Lucky')->geetest == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->geetest == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            极验验证ID：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="请到 http://geetest.com/ 注册获取验证ID和Key写入配置项。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="captcha_id" value="<?php echo $zbp->Config('Lucky')->captcha_id;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            极验验证Key：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="请到 http://geetest.com/ 注册获取验证ID和Key写入配置项。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="private_key" value="<?php echo $zbp->Config('Lucky')->private_key;?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">提交保存</button>
        </div>
    </div>
</form>

<?php
require 'config_footer.php';       					
?>