<?php /* EL PSY CONGROO */    	  				 
require '../../../../zb_system/function/c_system_base.php';     	 		 	 
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';     	 	  		
?>
<div class="SubMenu">
  <?php hnysweb_SubMenu(1);?><a target="_blank" href="https://www.hnysnet.com/"><span class="m-right">作者官网</span></a><a href="<?php echo $bloghost?>zb_users/plugin/AppCentre/main.php?auth=098236fa-3e93-4127-8a50-6c39ffb8d6a4"><span class="m-right">作者作品</span></a><a target="_blank" href="https://www.hnysnet.com/hnysweb/"><span class="m-right">升级纪录</span></a>
</div>
<div class="lianxi">
  <p> 请阅读主题说明,有问题或bug联系作者<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=914466480&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:914466480:41" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></p>
</div>
<div id="divMain2">
  <?php
	if(count($_POST)>0){     		 	  	
    if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();    	 					 
      $zbp->Config('hnysweb')->stylecolor = $_POST['stylecolor'];    		   	 	
      $zbp->Config( 'hnysweb' )->favicon = $_POST[ 'favicon' ];     		 	  	
      $zbp->Config( 'hnysweb' )->headdiyon = $_POST[ 'headdiyon' ];        		  
      $zbp->Config( 'hnysweb' )->headdiy = $_POST[ 'headdiy' ];    	  	 	  
	  $zbp->Config('hnysweb')->logo = $_POST['logo'];    						 	
	  $zbp->Config('hnysweb')->logoon = $_POST['logoon'];    	 					 
	  $zbp->Config('hnysweb')->daohang = $_POST['daohang'];    	  	 		 
      $zbp->Config('hnysweb')->dhcate = $_POST['dhcate'];          		
      $zbp->Config('hnysweb')->dhnum = $_POST['dhnum'];    	    		 
	  $zbp->Config('hnysweb')->sousuo = $_POST['sousuo'];       		   
      $zbp->Config('hnysweb')->loginon = $_POST['loginon'];    		      
      $zbp->Config('hnysweb')->login = $_POST['login'];     	 	   	
      $zbp->Config('hnysweb')->register = $_POST['register'];      		 	 	
      $zbp->Config('hnysweb')->member = $_POST['member'];    		   	 	
      $zbp->Config('hnysweb')->liuyan = $_POST['liuyan'];      		  		 
	  $zbp->Config('hnysweb')->liuyanon = $_POST['liuyanon'];      	  		 	
      $zbp->Config('hnysweb')->nofollow = $_POST['nofollow'];     		 			  
      $zbp->Config('hnysweb')->spm_xz = $_POST['spm_xz'];     			 	 		
      $zbp->Config('hnysweb')->spmtwo = $_POST['spmtwo'];      	   	 	
	  $zbp->Config('hnysweb')->caini = $_POST['caini'];    						  
	  $zbp->Config('hnysweb')->caini_xz = $_POST['caini_xz'];    	 	     
	  $zbp->Config('hnysweb')->caini_num = $_POST['caini_num'];      			  	
      $zbp->Config( 'hnysweb' )->icoapi = $_POST[ 'icoapi' ];     		   		
      $zbp->Config( 'hnysweb' )->icoapioff = $_POST[ 'icoapioff' ];    			  			
      $zbp->Config('hnysweb')->footfloat = $_POST['footfloat'];     			 		 
      $zbp->Config('hnysweb')->clearSetting = $_POST['clearSetting'];          	 
      $zbp->SaveConfig( 'hnysweb' );        	   
	  $zbp->ShowHint( 'good' );    			 				
	}     	      
?>
  <form id="form3" name="form3" method="post">
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
         <tr>
       <td width="20%"><b>主题样式</b></td>
     <td><p>主题自带五种经典的主题样式</p>
          <p>
            <input type="radio" name="stylecolor" value="1" <?php if($zbp->Config('hnysweb')->stylecolor == '1') echo 'checked'?> />
            <span style="margin:0 30px 0 0;">黑色（默认样式）</span>
            <input type="radio" name="stylecolor" value="2" <?php if($zbp->Config('hnysweb')->stylecolor == '2') echo 'checked'?> />
            <span style="margin:0 30px 0 0;">深蓝色</span>
               <input type="radio" name="stylecolor" value="3" <?php if($zbp->Config('hnysweb')->stylecolor == '3') echo 'checked'?> />
            <span style="margin:0 30px 0 0;">咖啡色</span>
               <input type="radio" name="stylecolor" value="4" <?php if($zbp->Config('hnysweb')->stylecolor == '4') echo 'checked'?> />
            <span style="margin:0 30px 0 0;">红色</span>
               <input type="radio" name="stylecolor" value="5" <?php if($zbp->Config('hnysweb')->stylecolor == '5') echo 'checked'?> />
            <span style="margin:0 30px 0 0;">简约白</span>
            </p></td>
      </tr>
         <tr>
                <td width="20%"><b>favicon.ico</b>
                </td>
                <td><p style="color:#999;"><img src="<?php echo $zbp->Config('hnysweb')->favicon;?>" alt="favicon.ico" style="height:30px;"/>&nbsp;&nbsp;网站在游览器显示的小图标，上传ico格式的图片</p>
                    <p class="uploadimg">
                        <input name="favicon" id="favicon" type="text" class="uplod_img" style="width: 50%;" value="<?php echo $zbp->Config('hnysweb')->favicon;?>"/>
                        <strong>浏览文件</strong>
                    </p>
                </td>
            </tr>
           <tr>
                <td><b>&lt;head&gt;自定义代码</b>
                </td>
                <td><p><input type="text" id="headdiyon" name="headdiyon" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->headdiyon;?>"/>&nbsp;&nbsp;开启后可以直接在网站头部&lt;head&gt;——&lt;/head&gt;之间添加代码，例如mate、link、script……</p>
            <p><textarea name="headdiy" type="text" id="headdiy" style="width:100%;height:80px;" placeholder="在这里填写代码！"><?php echo $zbp->Config('hnysweb')->headdiy;?></textarea>
          </p>
                </td>
            </tr>
      <tr>
        <td><p><b>网站LOGO</b></p><p>图片大小不限，背景透明</p></td>
        <td colspan="2"><p><img src="<?php echo $zbp->Config('hnysweb')->logo;?>" style = "height:80px;"/></p>
          <p align="left" class="uploadimg">
            <input name="logo" id="logo" type="text" class="uplod_img" style="width: 50%;" value="<?php echo $zbp->Config('hnysweb')->logo;?>" />
            <strong>浏览文件</strong> </p>
          <p>
            <input type="text" id="logoon"  name="logoon" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->logoon;?>"/><span style="margin:0 0 0 5px;">关闭LOGO显示网站名称</span>
          </p>
        </td>
      </tr>
      <tr>
        <td><p><b><span style="color:#f00;">*</span>网站左侧导航栏（网站分类）</b></p></td>
        <td><p>
            <input type="text" id="dhcate" name="dhcate" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->dhcate;?>"/>
          &nbsp;&nbsp;分类列表页开关</p><p>1、关闭后点击分类名称，在首页跳转到对应的首页版块（<span style="color:#ff0000;">适合纯单页导航，配合关闭文章详情页</span>）。</p>
          <p>
            <input type="text" id="dhnum" name="dhnum" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->dhnum;?>"/> &nbsp;&nbsp;当前分类文章数量</p>
            <p>1、如果网站设置了二级分类，不会再显示当前分类的文章数量（因为一级分类统计的文章数量不含二级分类，实在鸡肋）！</p>
          <p>
            <input type="text" id="daohang" name="daohang" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->daohang;?>"/> &nbsp;&nbsp;二级分类菜单</p>
            <p>1、开启这里以后还需要进入模块管理——网站分类——设置为url嵌套型。<br>2、网站设置了二级分类，不会再显示文章数量！（因为系统主分类不会统计二级分类的文章数量,且不能实时更新）<br>3、开启这里的同时，关闭或开启分类列表页，都需要再进入模块管理——网站分类，清空里面的内容并保存，即显示生效内容。</p>
          </td>
      </tr>
      
      <tr>
        <td><p><b>搜索框（<span style="color:#f00;">*</span>）</b></p></td>
        <td><p>
            <input type="text" id="sousuo" name="sousuo" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->sousuo;?>"/><span style="margin:0 0 0 5px;">在网站显示搜索
          </p>
         </td>
      </tr>
  <tr>
        <td><p><b>登陆/注册按钮</b></p></td>
        <td><p><input type="text" id="loginon" name="loginon" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->loginon;?>"/>&nbsp;注意：只有你启用了用户中心插件才可以使用这个功能</p>
            <p>登陆地址&nbsp;<input type="text" name="login" id="login"  value="<?php echo $zbp->Config('hnysweb')->login;?>" style="width:300px;" placeholder="在插件中获取登陆地址"/>
            &nbsp;&nbsp;注册地址&nbsp;<input type="text" name="register" id="register"  value="<?php echo $zbp->Config('hnysweb')->register;?>" style="width:300px;" placeholder="在插件中获取注册地址"/>
            &nbsp;&nbsp;个人中心地址&nbsp;<input type="text" name="member" id="member"  value="<?php echo $zbp->Config('hnysweb')->member;?>" style="width:300px;" placeholder="在插件中获取个人中心地址"/></p>
         </td>
      </tr>
      <tr>
        <td><p><b>全站网址链接开启nofollow标签</b></p></td>
        <td><p>
            <input type="text" id="nofollow" name="nofollow" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->nofollow;?>"/><span style="margin:0 0 0 5px;"><a target="blank" href="https://www.hnysnet.com/wangzhan/4131.html">什么是启nofollow标签？</a></span></p></td>
      </tr>
         <tr>
        <td><p><b>网址和二维码最大网页宽度（1600px以上）显示列数</b></p></td>
        <td><p>
            
              <input type="radio" name="spm_xz" value="1" <?php if($zbp->Config('hnysweb')->spm_xz == '1') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">每行显示4个</span>
              <input type="radio" name="spm_xz" value="2" <?php if($zbp->Config('hnysweb')->spm_xz == '2') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">每行显示6个</span>
           </p></td>
      </tr> 
         <tr>
        <td><p><b>网址导航在手机版显示为两列</b></p></td>
        <td><p>
            <input type="text" id="spmtwo" name="spmtwo" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->spmtwo;?>"/><span style="margin:0 0 0 5px;">开启后在手机版网址导航列表显示为两列</span></p></td>
      </tr> 
      <tr>
        <td><p><b>自定义连接（替代提交收录按钮）</b></p>
          <p></p></td>
        <td><p><textarea name="liuyan" type="text" id="liuyan" style="width:98%;"><?php echo $zbp->Config('hnysweb')->liuyan;?></textarea></p>
            <p><input type="text" id="liuyanon" name="liuyanon" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->liuyanon;?>"/>&nbsp;&nbsp;如果不需要网站左下角显示“提交收录”，开启此处，并且在这里设置一个自定义链接<br>在页面管理创建页面，并在这里填写链接。如果你想给给链接加上小图标，<a target="blank" href="<?php echo $zbp->host; ?>zb_users/theme/hnysweb/style/css/demo_index.html">请访问图标库</a><br>自定义链接写法：
         <pre class="prism-highlight prism-language-markup">&lt;a href=&quot;#页面链接&quot;&gt;&lt;i class=&quot;iconfont&quot;&gt;&amp;#xe640;&lt;/i&gt;名称&lt;/a&gt;</pre>
          </p></td>
      </tr>
      <tr>
        <td ><p><b>猜你喜欢</b></p></td>
        <td> <p><input type="text" id="caini" name="caini" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->caini;?>"/>
             在详情页显示猜你喜欢</p>
            <p>
              <input type="radio" name="caini_xz" value="1" <?php if($zbp->Config('hnysweb')->caini_xz == '1') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">同分类</span>
              <input type="radio" name="caini_xz" value="2" <?php if($zbp->Config('hnysweb')->caini_xz == '2') echo 'checked'?> />
              <span style="margin:0 30px 0 0;">同标签</span>
              <input name="caini_num" type="text" id="caini_num" value="<?php echo $zbp->Config('hnysweb')->caini_num;?>" style="width:85px;" />
              <span style="margin:0 30px 0 5px;">列表文章数量</span></p>
          </td>
      </tr>
     <tr>
		<td>
			<p>
				<b>ICO图标API(自定义)</b>
			</p>
		</td>
		<td>
			<p>
				<input type="text" name="icoapi" id="icoapi" value="<?php echo $zbp->Config('hnysweb')->icoapi;?>" style="width:99%;"/></p>
            <p><input type="text" id="icoapioff" name="icoapioff" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->icoapioff;?>"/>
             开启后关闭网址前的ICO图标。API地址不能完全保证获取所有网址的ICO图标，如果你不需要也可以关闭。</p>
				<p>1、自动获取网站导航网址ICO图标的api地址；2、网站分类使用网站导航列表（精简：ico+标题）样式时会用到；3、主题默认使用的API地址由主题作者免费提供<span style="color:red;">https://ico.hnysnet.com/get.php?url=</span>，设置以后将替换改地址 
			</p>
		</td>
	</tr>
     <tr>
        <td><p><b>网站底部版权信息浮动</b></p></td>
        <td><p>
            <input type="text" id="footfloat" name="footfloat" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->footfloat;?>"/><span style="margin:0 0 0 5px;">网站底部版权信息随网页底部浮动。</span>
          </p>
         </td>
      </tr>
      <tr>
        <td><p><b>清除主题配置</b></p></td>
        <td colspan="2"><p>
            <input type="text" id="clearSetting" name="clearSetting" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->clearSetting;?>"/><span style="margin:0 0 0 5px;">开启以后，当在主题管理中更换主题后，该主题的所有设置都将被清空，请谨慎操作！</span>
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
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/plugin/UEditor/ueditor.config.php"></script> 
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/plugin/UEditor/ueditor.all.min.js"></script> 
<script type="text/javascript" src="<?php echo $bloghost?>zb_users/theme/hnysweb/style/js/lib.upload.js"></script> 
<script type="text/javascript">
	ActiveTopMenu( "topmenu_hnysweb" );
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';      	 		  
RunTime();     	   		 
?>
