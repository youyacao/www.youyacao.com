<?php /* EL PSY CONGROO */        	   
require 'config_header.php';     		 		 	
    	 		 		 
if(count($_POST) > 0){     	  	  	
    CheckIsRefererValid();     			  	 
    $zbp->Config('Lucky')->logo = $_POST['logo'];      	   		
    $zbp->Config('Lucky')->avatar = $_POST['avatar'];      	 	   
    $zbp->Config('Lucky')->zfb = $_POST['zfb'];         		 
    $zbp->Config('Lucky')->qq = $_POST['qq'];     		  		 
    $zbp->Config('Lucky')->wx = $_POST['wx'];    		 	 			
    $zbp->Config('Lucky')->qrcode = $_POST['qrcode'];    			  		 
    $zbp->Config('Lucky')->cardBg = $_POST['cardBg'];    						  
    $zbp->SaveConfig('Lucky');     		  			
    Lucky_Tips('success');     	  		  
}     	 		 		
     	  				
if ($zbp->CheckPlugin('UEditor')) {     	 		 	 
    echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';     	 		   
    echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';     			 			
?>
<form role="form" class="popover-main" method="post">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            上传设置
        </div>
        <div class="panel-body">
        	<div class="form-group">
                <label class="block">
                    LOGO：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为90*68">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="logo" value="<?php echo $zbp->Config('Lucky')->logo;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    说说头像：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为256*256">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="avatar" value="<?php echo $zbp->Config('Lucky')->avatar;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    支付宝二维码：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为256*256">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="zfb" value="<?php echo $zbp->Config('Lucky')->zfb;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    QQ二维码：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为256*256">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="qq" value="<?php echo $zbp->Config('Lucky')->qq;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    微信二维码：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为256*256">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="wx" value="<?php echo $zbp->Config('Lucky')->wx;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    右下角二维码：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸为400*400">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="qrcode" value="<?php echo $zbp->Config('Lucky')->qrcode;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    侧栏顶部背景图：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尺寸默认为345*136,其它尺寸效果自测">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-10">
                    <input type="text" class="form-control upload-url" name="cardBg" value="<?php echo $zbp->Config('Lucky')->cardBg;?>">
                </div>
                <div class="col-sm-2">
                    <span class="btn btn-primary upload-btn">上传图片</span>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" class="btn btn-primary">提交保存</button>
        </div>
    </div>
</form>

<script>
    function upwindow(){
        var container = document.createElement('script');
        $(container).attr('type', 'text/plain').attr('id', 'img_editor');
        $('body').append(container);
        _editor = UE.getEditor('img_editor');
        _editor.ready(function () {
            _editor.hide();
            $('.form-group .upload-btn').click(function(){        
                object = $(this).parents('.form-group').find('.upload-url');
                _editor.getDialog('insertimage').open();
                _editor.addListener('beforeInsertImage', function (t, arg) {
                    object.attr('value', arg[0].src);
                });
            });
        });
    }
    upwindow();
</script>

<?php
} else {    		  		  
    echo '<div class="alert alert-danger alert-dismissable" style="display: block;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>请先启用UEdit编辑器</div>';    		 	 			
}       		 		
require 'config_footer.php';    	 		 		 
?>