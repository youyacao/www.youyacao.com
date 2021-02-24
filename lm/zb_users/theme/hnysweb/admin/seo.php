<?php /* EL PSY CONGROO */    		 		  	
require '../../../../zb_system/function/c_system_base.php';     	 		 	 
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';    		     	
?>
  <div class="SubMenu">
    <?php hnysweb_SubMenu(3);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a><a target="_blank" href="https://www.hnysnet.com/hnysweb/"><span class="m-right">升级纪录</span></a>
  </div>
  <div class="lianxi">
    <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
  </div>
  <div id="divMain2">
    <?php   if(count($_POST)>0){
    if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();    	  	   	
	      $zbp->Config('hnysweb')->seo = $_POST['seo'];       	     
	      $zbp->Config('hnysweb')->seo_title = $_POST['seo_title'];      		    	
          $zbp->Config('hnysweb')->seo_keywords = $_POST['seo_keywords'];      	 	    
          $zbp->Config('hnysweb')->seo_Description = $_POST['seo_Description'];      			  		
          $zbp->SaveConfig( 'hnysweb' );      	  			
		  $zbp->ShowHint( 'good' );    	 			  	
	}     	 		  	
?>
   <form id="form3" name="form3" method="post">
      <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
       <tr>
          <td width="20%"><p><b>模板自带SEO(非插件)</b></p></td>
          <td><p>
              <input type="text" id="seo" name="seo" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->seo;?>"/><span style="margin:0 0 0 5px;">使用了SEO插件，并且开启了标题优化，需关闭这里的模块自带SEO！</span></p></td>
        </tr>
      <tr>
          <td  width="20%" >
            <p><b>首页SEO标题</b></p>
            </td>
          <td><p>
              <textarea name="seo_title" type="text" id="seo_title" style="width:98%;"><?php echo $zbp->Config('hnysweb')->seo_title;?></textarea>
            </p></td>
        </tr>
        <tr>
           <td>
            <p><b>首页SEO关键词</b></p>
            </td>
          <td><p>
              <textarea name="seo_keywords" type="text" id="seo_keywords" style="width:98%;"><?php echo $zbp->Config('hnysweb')->seo_keywords;?></textarea>
            </p></td>
        </tr>
        <tr>
          <td>
            <p><b>首页SEO描述</b></p>
            </td>
          <td><p>
              <textarea name="seo_Description" type="text" id="seo_Description" style="width:98%;"><?php echo $zbp->Config('hnysweb')->seo_Description;?></textarea>
            </p></td>
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