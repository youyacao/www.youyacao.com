<?php /* EL PSY CONGROO */    	  	  		
require 'config_header.php';       	 	 	
     	 		   
if(count($_POST) > 0){    		 	 	  
    CheckIsRefererValid();     		   	 
    $zbp->Config('Lucky')->sliders = $_POST['sliders'];     	  			 
    $zbp->Config('Lucky')->bg = $_POST['bg'];       	 		 
    $zbp->Config('Lucky')->bg_num = $_POST['bg_num'];    		 			  
    $zbp->SaveConfig('Lucky');    	  	 			
    Lucky_Tips('success');    	  	   	
}    		  				
     	  		 	
$where = array(array('=', 'sean_Type', '0'), array('<>', 'sean_Img', ''));    		 	  	 
$order = array('sean_IsUsed' => 'DESC', 'sean_Order' => 'ASC');    	  	 	 	
$sql = $zbp -> db -> sql -> Select($Lucky_Table, '*', $where, $order, null, null);     		 	   
$array = $zbp -> GetListCustom($Lucky_Table, $Lucky_DataInfo, $sql);    	 	 	  	
    	  			 	
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';     	   	 	
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';    	     	 
    	 	  		 
?>

<div class="panel panel-default">
    <div class="panel-heading">
        幻灯片设置
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <form role="form" id="form" class="popover-main" method="post">
                    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="block">
                                    幻灯片：
                                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="是否启用幻灯片">
                                        <i class="fa fa-question-circle"></i>
                                    </a>
                                </label>
                                <div class="nopadding col-sm-12">
                                    <select class="form-control" name="sliders">
                                        <option value="a" <?php if($zbp->Config('Lucky')->sliders == 'a') echo 'selected'?>>打开</option>
                                        <option value="b" <?php if($zbp->Config('Lucky')->sliders == 'b') echo 'selected'?>>关闭</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">
                                    Banner：
                                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="要么使用Banner，要么使用幻灯片，二选一，这样比较美观。">
                                        <i class="fa fa-question-circle"></i>
                                    </a>
                                </label>
                                <div class="nopadding col-sm-12">
                                    <select class="form-control" name="bg">
                                        <option value="a" <?php if($zbp->Config('Lucky')->bg == 'a') echo 'selected'?>>打开</option>
                                        <option value="b" <?php if($zbp->Config('Lucky')->bg == 'b') echo 'selected'?>>关闭</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">
                                    Banner图片数量：
                                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="填写Bnner图片数量，要小于或等于实际图片数量，不然会出现404。自带的仅有两张图片，如需更多请手动上传到'域名 -> zb_users -> theme -> Lucky -> style -> banner'中。">
                                        <i class="fa fa-question-circle"></i>
                                    </a>
                                </label>
                                <div class="nopadding col-sm-12">
                                    <input type="number" class="form-control" name="bg_num" value="<?php echo $zbp->Config('Lucky')->bg_num;?>">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">提交保存</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form role="form" class="popover-main" action="save.php?type=flash" method="post">
                    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            新建幻灯片
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="block">幻灯标题：</label>
                                <div class="nopadding col-sm-12">
                                    <input type="text" name="title" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">幻灯图片地址：</label>
                                <div class="nopadding col-sm-9">
                                    <input type="text" name="img" class="form-control upload-url">
                                </div>
                                <div class="col-sm-3">
                                    <span class="btn btn-primary upload-btn">上传图片</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">幻灯链接地址：</label>
                                <div class="nopadding col-sm-12">
                                    <input type="text" name="url" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="block">幻灯显示：</label>
                                <label class="inline bui-radios-label bui-radios-anim">
                                    <input type="radio" name="IsUsed" value="1" checked=""/><i class="bui-radios"></i> 显示
                                </label>
                                <label class="inline bui-radios-label bui-radios-anim">
                                    <input type="radio" name="IsUsed" value="0"/><i class="bui-radios"></i> 不显示
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="block">幻灯排序：</label>
                                <div class="nopadding col-sm-12">
                                    <input type="text" name="order" class="form-control" value="99">
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                        	<input name="editid" type="hidden" class="xf-button" value=""/>
                            <button type="submit" class="btn btn-primary">提交保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php foreach ($array as $key => $reg) { ?>
	            <div class="col-lg-6">
	                <form role="form" class="popover-main" action="save.php?type=flash" method="post" name="flash">
                        <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
	                    <div class="panel panel-default">
	                        <div class="panel-heading">
	                            幻灯片管理
	                        </div>
	                        <div class="panel-body">
	                            <div class="form-group">
	                                <label class="block">幻灯标题：</label>
	                                <div class="nopadding col-sm-12">
	                                    <input type="text" name="title" class="form-control" value="<?php echo $reg->Title; ?>" />
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="block">幻灯图片地址：</label>
	                                <div class="nopadding col-sm-9">
	                                    <input type="text" name="img" class="form-control upload-url" value="<?php echo $reg->Img; ?>">
	                                </div>
	                                <div class="col-sm-3">
	                                    <span class="btn btn-primary upload-btn">上传图片</span>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="block">幻灯链接地址：</label>
	                                <div class="nopadding col-sm-12">
	                                    <input type="text" name="url" class="form-control" value="<?php echo $reg->Url; ?>">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label class="block">幻灯显示：</label>
	                                <label class="inline bui-radios-label bui-radios-anim">
	                                    <input type="radio" name="IsUsed" value="1" <?php if($reg->IsUsed == 1) { echo 'checked=""'; } ?>/><i class="bui-radios"></i> 显示
	                                </label>
	                                <label class="inline bui-radios-label bui-radios-anim">
	                                    <input type="radio" name="IsUsed" value="0" <?php if($reg->IsUsed == 0) { echo 'checked=""'; } ?>/><i class="bui-radios"></i> 不显示
	                                </label>
	                            </div>
	                            <div class="form-group">
	                                <label class="block">幻灯排序：</label>
	                                <div class="nopadding col-sm-12">
	                                    <input type="text" name="order" class="form-control" value="<?php echo $reg->Order; ?>">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="panel-footer">
	                        	<input name="editid" type="hidden" class="xf-button" value="<?php echo $reg->ID; ?>"/>
	                            <button type="submit" class="btn btn-primary">保存修改</button>
	                            <span type="submit" class="btn btn-danger" onclick="if(confirm('您确定要进行删除操作吗？')){location.href='save.php?type=flashdel&id=<?php echo $reg->ID; ?>&csrfToken=<?php echo $zbp->GetCSRFToken(); ?>'}">删除</span>
	                        </div>
	                    </div>
	                </form>
	            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript">
    function uploadAssembly(){
        var container = document.createElement('script');
        $(container).attr('type', 'text/plain').attr('id', 'upload_assembly');
        $('body').append(container);
        _editor = UE.getEditor('upload_assembly');
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
    $(document).ready(function(){
        if (!window.UE) {
            $('#form').html('<div class="panel panel-default"><div class="panel-body">本页面配置项需要UEditor编辑器相关组件，请先下载<a href="<?php echo $zbp->host; ?>zb_users/plugin/AppCentre/main.php?id=228" style="font-weight:700; color:red;">UEditor编辑器</a>，启用与否都可以。</div></div>');
        } else {
            uploadAssembly();
        }
    });
</script>

<?php
require 'config_footer.php';     						 
?>