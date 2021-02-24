<?php /* EL PSY CONGROO */     		 		 	
require '../../../../zb_system/function/c_system_base.php';      	  		 
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';    			     
?>
  <div class="SubMenu">
    <?php hnysweb_SubMenu(1);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a>
  </div>
  <div class="lianxi">
    <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
  </div>
 <div class="wiki">
      <p style= "color:red;">作者qq：914466480，如果你是通过其他途径获取的主题，不提供免费更新和技术服务。</p>
      <p>作者官网:<a href="https://www.hnysnet.com"  target="_blank">www.hnysnet.com</a></p>
      <p>安装主题后请到主题配置中设置网站显示的主要内容！</p>
      <h3>颜色方案</h3>
    
      <p>该主题目前给大家预设了四种颜色方案,请在主题管理，css样式中选择！</p>

         <div style="background-color:#333333;width:300px;color:#fff;line-height:40px;height:40px;text-align:center;margin-bottom:10px;">黑色（主题默认）——index.css</div>
       <div style="background-color:#30333c;width:300px;color:#fff;line-height:40px;height:40px;text-align:center;margin-bottom:10px;">灰蓝色——index2.css</div>
         <div style="background-color:#2a2222;width:300px;color:#fff;line-height:40px;height:40px;text-align:center;margin-bottom:10px;">灰咖啡色——index3.css</div>
        <div style="background-color:#990000;width:300px;color:#fff;line-height:40px;height:40px;text-align:center;margin-bottom:10px;">红色——index4.css</div>
    </div>
</div>
<script type="text/javascript">
	ActiveTopMenu( "topmenu_hnysweb" );
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';    		   			
RunTime();    		      
?>