<?php /* EL PSY CONGROO */      			 		
require '../../../../zb_system/function/c_system_base.php';       		 		
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';    	 		 	 	
?>
  <div class="SubMenu">
    <?php hnysweb_SubMenu(4);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a><a target="_blank" href="https://www.hnysnet.com/hnysweb/"><span class="m-right">升级纪录</span></a>
  </div>
  <div class="lianxi">
    <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
  </div>
  <div id="divMain2">
    <?php   if(count($_POST)>0){
       if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();    	 		 			
	   $zbp->Config('hnysweb')->picture = $_POST['picture']; //广告设置     	  	   
       $zbp->Config('hnysweb')->pictureon = $_POST['pictureon']; //广告设置    		   	 	
       $zbp->Config('hnysweb')->picturepc = $_POST['picturepc']; //广告设置    	      	
	   $zbp->Config('hnysweb')->picture2 = $_POST['picture2']; //广告设置    		 	 		 
       $zbp->Config('hnysweb')->picture2on = $_POST['picture2on']; //广告设置    								
       $zbp->Config('hnysweb')->picture2pc = $_POST['picture2pc']; //广告设置       	 	 	
       $zbp->SaveConfig( 'hnysweb' );     		 				
	   $zbp->ShowHint( 'good' );    							 
	}     			    
?>
   <form id="form3" name="form3" method="post">
       <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
        <tr>
          <td  width="20%"><p><b>顶部广告位</b></p></td>
          <td><p>
           <textarea name="picture" type="text" id="picture" style="width:98%;height:80px;"><?php echo $zbp->Config('hnysweb')->picture;?></textarea>
            </p>
            <p> <span style="color:#ff0000">图片尺寸478×60</span>，把图片上传到附件管理，获取图片地址，填写到这里！替换<span style="color:#ff0000">#链接</span>为你的<span style="color:#ff0000">广告链接</span>（注意加http://）。 </p>
            <p>
              <input type="text" id="pictureon" name="pictureon" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->pictureon;?>"/>
              是否显示?&nbsp;&nbsp;&nbsp;<input type="text" id="picturepc" name="picturepc" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->picturepc;?>"/>
              只在PC版显示？</p></td>
        </tr>
         <tr>
          <td  width="20%"><p><b>底部广告位</b></p></td>
          <td><p>
           <textarea name="picture2" type="text" id="picture2" style="width:98%;height:80px;"><?php echo $zbp->Config('hnysweb')->picture2;?></textarea>
            </p>
            <p> <span style="color:#ff0000">图片尺寸478×60</span>，把图片上传到附件管理，获取图片地址，填写到这里！替换<span style="color:#ff0000">#链接</span>为你的<span style="color:#ff0000">广告链接</span>（注意加http://）。 </p>
            <p>
              <input type="text" id="picture2on" name="picture2on" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->picture2on;?>"/>
              是否显示?&nbsp;&nbsp;&nbsp;<input type="text" id="picture2pc" name="picture2pc" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->picture2pc;?>"/>
              只在PC版显示？</p></td>
        </tr>
      </table>
      <br/>
    <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
    <input name="" type="Submit" class="button" value="保存"/>
    </form>
  </div>
</div>
<script type="text/javascript">
	ActiveTopMenu( "topmenu_hnysweb" );
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';    					  	
RunTime();     	 	   	
?>