<?php /* EL PSY CONGROO */				  	     		     
require '../../../../zb_system/function/c_system_base.php';    			 	 	     			     
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';    		   	 	    	 	 	   
?>

<div class="SubMenu">
  <?php hnysweb_SubMenu(6);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a><a target="_blank" href="https://www.hnysnet.com/hnysweb/"><span class="m-right">升级纪录</span></a>
  </div>
  <div class="lianxi">
    <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
  </div>
<div id="divMain2">
  <?php
	if(count($_POST)>0){       	  	     		  		  
    if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();    		   	      		 	  		
	    $zbp->Config('hnysweb')->pageid = $_POST['pageid'];     	  		  	
        $zbp->Config('hnysweb')->tips = $_POST['tips'];    	 	 		  
        $zbp->Config('hnysweb')->diycate = $_POST['diycate'];     		   		
        $zbp->Config('hnysweb')->jump = $_POST['jump'];       	  			
        $zbp->Config('hnysweb')->pass = $_POST['pass'];     	 			   
        $zbp->Config('hnysweb')->scode = $_POST['scode']; 			       			  		
        $zbp->SaveConfig( 'hnysweb' );     		  		        	    
	    $zbp->ShowHint( 'good' );     		 				    	  	  	 
	}        		          	  	
?>
  <form id="form3" name="form3" method="post">
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
      <tr>
        <td width="20%" ><b>提交收录页面ID</b></td>
        <td><input type="text" value="<?php echo $zbp->Config('hnysweb')->pageid;?>" name="pageid" size="8">
          <span>在页面管理新建页面“提交收录”，并在这里填写页面id。</span></td>
      </tr>
      <tr>
        <td><b>提交收录入口网址</b></td>
        <td><?php $hnysweburl=GetPost((int)$zbp->Config('hnysweb')->pageid); ?>
          <?php if($hnysweburl->ID): ?>
          <a href="<?php echo $hnysweburl->Url; ?>" target="_blank"><?php echo $hnysweburl->Url; ?></a>
          <?php else: ?>
          <span class="red">当前ID页面不存在！</span><a href="../../../zb_system/admin/edit.php?act=PageEdt" target="_blank">新建页面</a>
          <?php endif; ?>
          基础设置——自定义链接并开启</span></td>
      </tr>
      <tr>
        <td><b>提交收录提示内容</b></td>
        <td><textarea id="myEditor" name="tips" cols="68" rows="6" style="width:99%;vertical-align:middle"><?php echo $zbp->Config('hnysweb')->tips; ?></textarea>
          <span>以上内容将显示于提交收录表单下方，提交收录表单上方还可显示所在页面正文内容</span></td>
      </tr>
     <tr>
        <td><b>自定义用户可以提交收录的网站分类</b></td>
        <td><p><textarea name="diycate" rows="6" style="width:99%;vertical-align:middle"><?php echo $zbp->Config('hnysweb')->diycate; ?></textarea></p>
           1、如果想要更改分类的排序，或者有些分类不想让用户提交网址，可以自定义设置这里。<br>
            2、设置这里之前，确保已经设置了提交收录页面，并且可以正常访问。<br>
             3、在提交收录页面右键查看源代码，复制分类列表代码粘贴到这里。<br>
           4、你可以手动更改分类列表排序，也可以直接删除不想让用户提交收录的分类。</p>
          </td>
      </tr>
      <tr>
        <td><b>跳转网址</b></td>
        <td><input type="text" value="<?php echo $zbp->Config('hnysweb')->jump;?>" name="jump" size="48">
          <span>提交成功后跳转，留空则停在提交收录页面</span></td>
      </tr>
      <tr>
        <td><b>关于上传图片</b></td>
        <td><p>zblog程序默认作者以上用户才能使用编辑器发布图片，该主题还需要配合<a href="../../../plugin/AppCentre/main.php?id=235" target="_blank">角色分配器</a>使用，给游客添加<font style="color:#f00;">UploadPst(上传附件)权限</font>，用户才能通过编辑器上传图片。</p></td>
      </tr>
      <tr>
        <td><b>免审核设置</b></td>
        <td><select name="pass">
            <option value="1" <?php if($zbp->Config('hnysweb')->pass=="1") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][1];?>--</option>
            <option value="2" <?php if($zbp->Config('hnysweb')->pass=="2") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][2];?>--</option>
            <option value="3" <?php if($zbp->Config('hnysweb')->pass=="3") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][3];?>--</option>
            <option value="4" <?php if($zbp->Config('hnysweb')->pass=="4") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][4];?>--</option>
            <option value="5" <?php if($zbp->Config('hnysweb')->pass=="5") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][5];?>--</option>
            <option value="6" <?php if($zbp->Config('hnysweb')->pass=="6") echo "selected"; ?>>--<?php echo $zbp->lang['user_level_name'][6];?>--</option>
          </select>
          <span>级别以上用户提交收录免审核，提交成功即为公开状态（请慎重选择）</span></td>
      </tr>
      <tr>
        <td><b>开启验证码</b></td>
        <td><input name="scode" type="text" value="<?php echo $zbp->Config('hnysweb')->scode;?>" class="checkbox">
          <span>开启此项可防止恶意灌水</span></td>
      </tr>
    </table>
    <br/>
    <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
    <input name="" type="Submit" class="button" value="保存"/>
  </form>
</div>
</div>
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/plugin/UEditor/ueditor.config.php"></script> 
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/plugin/UEditor/ueditor.all.min.js"></script> 
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/theme/hnysweb/admin/js/lib.upload.js"></script> 
<script type="text/javascript">
    var editor = new baidu.editor.ui.Editor({ toolbars:[['Paragraph','FontFamily','FontSize','Bold','Italic','ForeColor', "backcolor", "link",'justifyleft','justifycenter','justifyright','source']],initialFrameHeight:150 });
    editor.render("myEditor");
</script> 
<script type="text/javascript">
	ActiveTopMenu( "topmenu_hnysweb" );
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';     	    	     	      	
RunTime();     	   	       				 		
?>
