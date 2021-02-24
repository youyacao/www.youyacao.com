<?php /* EL PSY CONGROO */        		  
require 'config_header.php';      	 			 
if(count($_POST) > 0){    	 			 		
    CheckIsRefererValid();    		     	
    $zbp->Config('Lucky')->pay_text = $_POST['pay_text'];     	     	
    $zbp->Config('Lucky')->z_s_f_kg=$_POST['z_s_f_kg'];    			 		 	
    $strc = implode("|", $_POST["color"]);    		 	 		 
    $zbp->Config('Lucky')->Lucky_color = $strc;      						
    $zbp->SaveConfig('Lucky');    			  	 	
    Lucky_savetofile("style.css");     			  	 
    Lucky_Tips('success');     	 	 		 
}    					   
$strColor = $zbp->Config('Lucky')->Lucky_color;    			 		  
$aryColor = explode('|', $strColor);      	  			
?>
<link href="../style/static/minicolors/jquery.minicolors.css" rel="stylesheet">
<script src="../style/static/minicolors/jquery.minicolors.js"></script>
<form role="form" class="popover-main" method="POST" action="./color.php?timestamp=<?php echo time(); ?>">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            颜色设置
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            打赏说明：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="最好不要超过14个字，否则手机版可能错位。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="pay_text" value="<?php echo $zbp->Config('Lucky')->pay_text;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            赞、赏、分享：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否启用赞、赏、分享功能，位于文章底部。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="z_s_f_kg">
                                <option value="a" <?php if($zbp->Config('Lucky')->z_s_f_kg == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->z_s_f_kg == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            点赞按钮颜色：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色是FF4400">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[0] ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            打赏按钮颜色：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色是7AB951">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[1] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            分享按钮颜色：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色是ECB842">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[2] ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            赞赏分享辅色：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色是878787">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[3] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            颜色（1）：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色（3E3E3E）<br>包括导航背景色、底部背景色">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[4] ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            颜色（2）：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="默认颜色（737F99），包括总体链接停留色、导航停留色">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input class="form-control minicolor" name="color[]" value="<?php echo $aryColor[5] ?>">
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
<script>
    $(document).ready( function() {
        $('.minicolor').each( function() {
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                defaultValue: $(this).attr('data-defaultValue') || '',
                inline: $(this).attr('data-inline') === 'true',
                letterCase: $(this).attr('data-letterCase') || 'lowercase',
                opacity: $(this).attr('data-opacity'),
                position: $(this).attr('data-position') || 'bottom left',
                change: function(hex, opacity) {
                    if( !hex ) return;
                    if( opacity ) hex += ', ' + opacity;
                    try {
                        $(this).val(hex);
                    } catch(e) {}
                },
                theme: 'bootstrap'
            });
        });
    });
</script>
<?php
require 'config_footer.php';    	 	  		 
?>