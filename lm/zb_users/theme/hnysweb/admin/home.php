<?php /* EL PSY CONGROO */     	 	    
require '../../../../zb_system/function/c_system_base.php';      	 			 
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';     	 	   	
?>
  <div class="SubMenu">
    <?php hnysweb_SubMenu(2);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a><a target="_blank" href="https://www.hnysnet.com/hnysweb/"><span class="m-right">升级纪录</span></a>
  </div>
  <div class="lianxi">
    <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
  </div>
  <div id="divMain2">
    <?php   if(count($_POST)>0){
    if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();     		   	 
          $zbp->Config('hnysweb')->slidebox = $_POST['slidebox'];     	 					 
		  $zbp->Config('hnysweb')->slidebox_diy = $_POST['slidebox_diy'];      						 
          $zbp->Config('hnysweb')->Setindexhot = $_POST['Setindexhot'];      			  	 
          $zbp->Config('hnysweb')->Sihotnum = $_POST['Sihotnum'];     				  	 
          $zbp->Config('hnysweb')->Sihotpx = $_POST['Sihotpx'];      	 	 	  
          $zbp->Config('hnysweb')->SetindexID = $_POST['SetindexID'];         		 	
          $zbp->Config('hnysweb')->Setindex = $_POST['Setindex'];      		 	 	 
          $zbp->Config('hnysweb')->Setindex2 = $_POST['Setindex2'];     	  	 	  
          $zbp->Config('hnysweb')->Setindex3 = $_POST['Setindex3'];     	   	 		
          $zbp->Config('hnysweb')->wzdetails = $_POST['wzdetails'];    					   
          $zbp->Config('hnysweb')->paixu = $_POST['paixu'];     	      
          $zbp->Config('hnysweb')->flink = $_POST['flink'];    	 		  		
          $zbp->SaveConfig( 'hnysweb' );    	 			   
		  $zbp->ShowHint( 'good' );    		 		 	 
	}    						  
?>
   <form id="form3" name="form3" method="post">
      <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
          
          <tr>
        <td width="20%"><p><b>自定义海报轮播图代码</b></p>
          <p></p></td>
        <td><p><textarea name="slidebox_diy" type="text" id="slidebox_diy" style="width:100%;height:80px;"><?php echo $zbp->Config('hnysweb')->slidebox_diy;?></textarea></p>
            <p><input type="text" id="slidebox" name="slidebox" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->slidebox;?>"/>&nbsp;&nbsp;是否显示？
          </p></td>
      </tr>
      <tr> <td width="20%">
            <p><b>站长推荐</b></p>
           </td>
          <td><P><input type="text" id="Setindexhot" name="Setindexhot" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->Setindexhot;?>"/>
              是否在首页显示？ <input type="text" name="Sihotnum" id="Sihotnum"  value="<?php echo $zbp->Config('hnysweb')->Sihotnum;?>" style="width:100px;margin:0 10px 0 30px;"/>数量（留空为不限制数量）</p>
            <p align="left" style="color:#ff0000;">发布文章→在文章编辑中选中站长推荐（内容显示为网址分类列表样式）。</p><P><input type="text" id="Sihotpx" name="Sihotpx" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->Sihotpx;?>"/>&nbsp;&nbsp;按发布时间（倒序）</p></td>
        </tr>
        <tr>
          <td >
            <p><b>分类版块</b></p>
            <p>选择在首页显示的分类</p>
           </td>
          <td>
          <div class="xzfl">
		     <p><?php echo OutputOptionItemsOfCategories('');?></p>
             <p> <input type="text" name="SetindexID" id="more_cate"  value="<?php echo $zbp->Config('hnysweb')->SetindexID;?>" style="width:300px;" placeholder="点击分类名称选择"/>
                 &nbsp;<a href="javascript:;" id="resetcms">点此清空</a></p><p><b>网站分类版块内容数量</b><input type="text" name="Setindex" value="<?php echo $zbp->Config('hnysweb')->Setindex;?>" style="width:100px;margin:0 10px 0 30px;"/>网址和二维码导航<input type="text" name="Setindex2" value="<?php echo $zbp->Config('hnysweb')->Setindex2;?>" style="width:100px;margin:0 10px 0 30px;"/>文章列表<input type="text" name="Setindex3" value="<?php echo $zbp->Config('hnysweb')->Setindex3;?>" style="width:100px;margin:0 10px 0 30px;"/>网址导航（ico图标+网站标题）</p>
             </div>
            <P>
              <input type="text" id="wzdetails" name="wzdetails" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->wzdetails;?>"/>
                <b style="font-size:16px;">网站详情页开关</b>&nbsp;&nbsp;如果你想设置纯单页导航网站，可以关闭详情页，点击链接直接跳转网站地址</p>
            <p align="left" style="font-size:16px; font-weight:bold; ">排序功能<span style="font-size:14px; font-weight:normal;color:#ff0000; ">（该功能仅对网站导航分类或二维码分类排序有效，不支持文章列表自定义排序）</span></p>
            <P><input type="radio" name="paixu" value="1" <?php if($zbp->Config('hnysweb')->paixu == '1') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">按发布时间（正序）</span>
              <input type="radio" name="paixu" value="2" <?php if($zbp->Config('hnysweb')->paixu == '2') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">按发布时间（倒序）</span>
                <input type="radio" name="paixu" value="3" <?php if($zbp->Config('hnysweb')->paixu == '3') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">按访问量</span>
                <input type="radio" name="paixu" value="4" <?php if($zbp->Config('hnysweb')->paixu == '4') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">按评论数</span></p></td>
        </tr>
        <tr>
           <td ><p><b>友情链接</b></p></td>
          <td><P> <a target="_blank" href="<?php echo $zbp->host; ?>zb_system/admin/module_edit.php?act=ModuleEdt&filename=link">→ → 点击修改友情链接 ← ←</a> </p>
            <P>
              <input type="text" id="flink" name="flink" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->flink;?>"/>
            </p>
            </td>
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