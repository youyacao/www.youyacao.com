<?php /* EL PSY CONGROO */        				
require 'config_header.php';    				 	  
if(count($_POST) > 0){     	 				 
    CheckIsRefererValid();     	 	  	 
    $zbp->Config('Lucky')->keywords = $_POST['keywords'];    		 			 	
    $zbp->Config('Lucky')->description = $_POST['description'];     	   			
    $zbp->Config('Lucky')->seo = $_POST['seo'];    			 			 
    $zbp->Config('Lucky')->post_category = $_POST['post_category'];     				  	
    $zbp->Config('Lucky')->page_subname = $_POST['page_subname'];        	 		
    $zbp->SaveConfig('Lucky');    	 				 	
    Lucky_Tips('success');     				   
}      		 	  
?>

<form role="form" class="popover-main" method="post">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            SEO设置
        </div>
        <div class="panel-body">
        	<div class="form-group">
                <label class="block">
                	首页关键词：
                	<a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="多个关键词请用英文逗号（,）隔开。">
                    	<i class="fa fa-question-circle"></i>
                    </a>
            	</label>
            	<div class="nopadding col-sm-12">
            		<input class="form-control" name="keywords" value="<?php echo $zbp->Config('Lucky')->keywords;?>">
            	</div>
            </div>
            <div class="form-group textarea">
                <label class="block">
                	首页描述：
                	<a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="填写网站首页描述。">
                    	<i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="description" class="form-control" rows="2"><?php echo $zbp->Config('Lucky')->description;?></textarea>
            </div>
            <div class="form-group select">
                <label class="block">
                	SEO功能：
                	<a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="使用主题自带SEO功能请打开，使用其它插件提供的SEO请关闭。">
                    	<i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <select class="form-control" name="seo">
                    <option value="a" <?php if($zbp->Config('Lucky')->seo == 'a') echo 'selected'?>>打开</option>
					<option value="b" <?php if($zbp->Config('Lucky')->seo == 'b') echo 'selected'?>>关闭</option>
                </select>
            </div>
            <div class="form-group select">
                <label class="block">
                	文章是否显示分类名：
                	<a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="只显示当前分类，不显示父分类。SEO功能关闭时此项无效。">
                    	<i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <select class="form-control" name="post_category">
                    <option value="a" <?php if($zbp->Config('Lucky')->post_category == 'a') echo 'selected'?>>打开</option>
					<option value="b" <?php if($zbp->Config('Lucky')->post_category == 'b') echo 'selected'?>>关闭</option>
                </select>
            </div>
            <div class="form-group select">
                <label class="block">
                	单页是否显示网站副标题：
                	<a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="页面管理中的单页面是否显示网站副标题。SEO功能关闭时此项无效。">
                    	<i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <select class="form-control" name="page_subname">
                    <option value="a" <?php if($zbp->Config('Lucky')->page_subname == 'a') echo 'selected'?>>打开</option>
					<option value="b" <?php if($zbp->Config('Lucky')->page_subname == 'b') echo 'selected'?>>关闭</option>
                </select>
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