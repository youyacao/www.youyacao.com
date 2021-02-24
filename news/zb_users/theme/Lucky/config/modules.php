<?php /* EL PSY CONGROO */    	 	   	 
require 'config_header.php';    		 	  		
if(count($_POST) > 0){    			   	 
    CheckIsRefererValid();      		    
    $zbp->Config('Lucky')->tab_sl = $_POST['tab_sl'];    				  	 
    $zbp->Config('Lucky')->tab_day = $_POST['tab_day'];    	 	 	  	
    $zbp->Config('Lucky')->tab_post = $_POST['tab_post'];    		   	  
    $zbp->Config('Lucky')->readers_emali = $_POST['readers_emali'];     					  
    $zbp->Config('Lucky')->readers_day = $_POST['readers_day'];    	 		   	
    $zbp->Config('Lucky')->readers_num = $_POST['readers_num'];     	  	 	 
    $zbp->Config('Lucky')->comm_admin = $_POST['comm_admin'];    			     
    $zbp->Config('Lucky')->mobilenav = $_POST['mobilenav'];     	 			 	
    $zbp->Config('Lucky')->footer_left = $_POST['footer_left'];           	
    $zbp->Config('Lucky')->footer_right = $_POST['footer_right'];     	 	  	 
    $zbp->Config('Lucky')->article_copyright = $_POST['article_copyright'];    			  	 	
    $zbp->Config('Lucky')->pjax_callback = $_POST['pjax_callback'];    		 	 	  
    $zbp->Config('Lucky')->extra_css = $_POST['extra_css'];     		 	 		
	$zbp->SaveConfig('Lucky');         	  
    Lucky_Tips('success');     				 	 
}     		 			 
?>
<form role="form" class="popover-main" method="post">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken(); ?>">
    <div class="panel panel-default">
        <div class="panel-heading">
            模块设置
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            Tab数量：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="文章显示数量，默认是6篇文章。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="number" class="form-control" name="tab_sl" value="<?php echo $zbp->Config('Lucky')->tab_sl;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            Tab热门文章：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="多少天内热门文章，默认是90。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="number" class="form-control" name="tab_day" value="<?php echo $zbp->Config('Lucky')->tab_day;?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="block">
                    Tab站长推荐：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="站长推荐 = 显示指定的某些文章，填写文章ID即可。注意和上面Tab数量保持一致。多篇文章ID用英文逗号（,）隔开。例如：1,2,3">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <div class="nopadding col-sm-12">
                    <input type="text" class="form-control" name="tab_post" value="<?php echo $zbp->Config('Lucky')->tab_post;?>">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            读者墙过滤邮箱：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="在读者墙页面过滤指定邮箱的留言。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="text" class="form-control" name="readers_emali" value="<?php echo $zbp->Config('Lucky')->readers_emali;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            读者墙N天排名：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="读者墙显示N天内排名，只能是数字。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="number" class="form-control" name="readers_day" value="<?php echo $zbp->Config('Lucky')->readers_day;?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="block">
                            读者墙显示个数：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="读者墙读者显示个数，只能是数字。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <input type="number" class="form-control" name="readers_num" value="<?php echo $zbp->Config('Lucky')->readers_num;?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="block">
                            是否过滤管理员留言：
                            <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="模块管理-最新留言，这个模块中可选是否过滤管理员留言。">
                                <i class="fa fa-question-circle"></i>
                            </a>
                        </label>
                        <div class="nopadding col-sm-12">
                            <select class="form-control" name="comm_admin">
                                <option value="a" <?php if($zbp->Config('Lucky')->comm_admin == 'a') echo 'selected'?>>打开</option>
                                <option value="b" <?php if($zbp->Config('Lucky')->comm_admin == 'b') echo 'selected'?>>关闭</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="form-group textarea">
                <label class="block">
                    手机导航：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="手机下的导航，HTML格式化/压缩网站：<a href='http://tool.chinaz.com/Tools/JsFormat.aspx' target='_blank' title='JavaScript/HTML格式化工具'>站长工具</a>，方便操作上面那堆HTML。">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="mobilenav" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->mobilenav;?></textarea>
            </div>
            <div class="form-group textarea">
                <label class="block">
                    底部修改-左边：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尊重作者，建议留下版权！">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="footer_left" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->footer_left;?></textarea>
            </div>
            <div class="form-group textarea">
                <label class="block">
                    底部修改-右边：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="尊重作者，建议留下版权！">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="footer_right" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->footer_right;?></textarea>
            </div>
            <div class="form-group textarea">
                <label class="block">
                    文章版权说明：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="文章版权说明，换行请用p标签，留空则不显示。">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="article_copyright" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->article_copyright;?></textarea>
            </div>
            <div class="form-group textarea">
                <label class="block">
                    PJAX回调：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="部分js需要pjax回调才能正常使用,不懂别乱填,否则可能导致页面出错.">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="pjax_callback" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->pjax_callback;?></textarea>
            </div>
            <div class="form-group textarea">
                <label class="block">
                    额外CSS：
                    <a href="javascript:;" tabindex="0" role="button" data-toggle="popover" data-content="可自由填写全局CSS样式,不懂别乱填,否则可能导致页面出错.">
                        <i class="fa fa-question-circle"></i>
                    </a>
                </label>
                <textarea name="extra_css" class="form-control textarea-auto-height" rows="2"><?php echo $zbp->Config('Lucky')->extra_css;?></textarea>
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

<script>
    //jQuery实现textarea高度根据内容自适应
    $.fn.extend({
        txtaAutoHeight: function () {
            return this.each(function () {
                var $this = $(this);
                if (!$this.attr('initAttrH')) {
                    $this.attr('initAttrH', $this.outerHeight());
                }
                setAutoHeight(this).on('input', function () {
                    setAutoHeight(this);
                });
            });
            function setAutoHeight(elem) {
                var $obj = $(elem);
                return $obj.css({ height: $obj.attr('initAttrH'), 'overflow-y': 'hidden' }).height(elem.scrollHeight);
            }
        }
     });
    $(function () {
        $('.textarea-auto-height').txtaAutoHeight();
    });
</script>