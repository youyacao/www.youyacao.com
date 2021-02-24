<?php /* EL PSY CONGROO */    	 	  	 	
require 'config_header.php';     	     	
if(count($_GET) > 0){    	 		 	 	
    CheckIsRefererValid();    	 		 	 	
    $type = GetVars('type', 'GET');     	 	   	
    $result = Lucky_repair($type);       	 		 
    if ($result) {     		   		
        Lucky_Tips('success');    	 	 			 
    } else {         		 
        Lucky_Tips('error');     	 			 	
    }    	  			  
}      		    
?>

<div class="panel panel-default">
    <div class="panel-heading">
        修复主题
    </div>
    <div class="panel-body">
    	<div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <form role="form" class="popover-main" method="post" action="./repair.php?type=twitter">
                        <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
                        <label class="block">
                            微语相关：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="微语模版的相关设置">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <span class="btn btn-primary form-group toRepair">一键修复</span>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form role="form" class="popover-main" method="post" action="./repair.php?type=seo">
                        <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
                        <label class="block">
                            SEO相关：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="SEO的相关设置">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <span class="btn btn-primary form-group toRepair">一键修复</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="form-group explain">
            <div class="row">
                <div class="col-sm-12">
                    <p class="form-control-static">修复说明：</p>
                    <p class="form-control-static">1、此处修复是给5.2版本以下的老用户使用，如果安装版本是5.2以上则无需进行修复操作。</p>
                    <p class="form-control-static">2、修复操作只需要执行1次，提示“操作成功”即可，执行多次为无意义操作，并且会损耗服务器性能。</p>
                    <p class="form-control-static">3、使用本主题时间越久，文章越多，该修复操作需要等待的时间也就越长。</p>
                    <p class="form-control-static">4、此次修复只为提供更好的功能，请耐心等待直至提示“操作成功”即可。</p>
                    <p class="form-control-static">5、此处提到的“文章越多”，指的是几十万乃至上百万的文章数量，达到这个数量的朋友可以联系我进行操作。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.toRepair').click(function() {
        $(this).parents('form').submit();
    });
</script>

<?php
require 'config_footer.php';    				  		
?>