<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}    			 		  
if (!$zbp->CheckPlugin('umFashion')) {$zbp->ShowError(48);die();} 
$blogtitle='主题配置';
if ($_POST && isset($_POST)) {    	 	 				
	if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();     	   		 
	if ($_GET && isset($_GET['type'])) {     			 			
		if ($_GET['type'] == 'add') {     	  		  
			if($zbp->Config('umFashion')->HasKey('umSliderArray')){$umSliderArray = json_decode($zbp->Config('umFashion')->umSliderArray,true);}      			  	
			$umSliderArray[] = $_POST;         			
			foreach ($umSliderArray as $key => $row) {     	 			  
			    $order[$key] = $row['order'];     				 		
			    $title[$key]  = $row['title'];    			 		 	
			}    	    			
			array_multisort($order, SORT_ASC, $title, SORT_DESC, $umSliderArray);    	 		 	  
			$zbp->Config('umFashion')->umSliderArray = json_encode($umSliderArray);     	 	    
			$zbp->SaveConfig('umFashion');      			 		
		} elseif ($_GET['type'] == 'edit') {     			   	
			$umSliderArray = json_decode($zbp->Config('umFashion')->umSliderArray,true);     	 	 	  
			$editid = $_POST['editid'];       	 		 
			unset($_POST['editid']);       	 	 	
			$umSliderArray[$editid] =$_POST;      					 
			foreach ($umSliderArray as $key => $row) {       	   	
			    $order[$key] = $row['order'];      						
			    $title[$key]  = $row['title'];     	    	 
			}           	
			array_multisort($order, SORT_ASC, $title, SORT_DESC, $umSliderArray);    		 	 	  
			$zbp->Config('umFashion')->umSliderArray = json_encode($umSliderArray);    	 	  		 
			$zbp->SaveConfig('umFashion');    		   	 	
		}      			   
	}    								
} elseif ($_GET && isset($_GET)) {    	   		  
	if ($_GET['type'] == 'del') {    	 		 			
		$umSliderArray = json_decode($zbp->Config('umFashion')->umSliderArray,true);     	 	  	 
		$editid = $_GET['id'];    			     
		unset($umSliderArray[$editid]);     	 	  		
		$zbp->Config('umFashion')->umSliderArray = json_encode($umSliderArray);    					   
		$zbp->SaveConfig('umFashion');       		 	 
	}    			 				
}      			 		
if($zbp->Config('umFashion')->HasKey('umSliderArray')){    				   	
	$umSliderArray = json_decode($zbp->Config('umFashion')->umSliderArray,true);      	 	 	 
}else{     	    	 
	$umSliderArray = array();     			  		
}      	
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>
<style>
.p{ margin-bottom: 120px; margin-top: 5px;}
.table{ width: 100%}
.table span.msg{padding: 10px; line-height: 22px; display: block}
.table em{color: #999; margin-left: 10px; font-style: normal}
.table .input{width: 100%; height: 30px; line-height: 30px;}
.table .uplod_img.input{ width: 240px;}
.table .inputbox,.table .inputimg{ padding: 5px 6px;}
.table .inputimg{ text-align: center}
.table textarea{ line-height: 22px;padding: 0.25em 0.25em 0.25em 0.25em; width: 100%;}
.table .inputimg img{ width: 50px; height:30px;object-fit:cover}
input.button{height: 30px;padding: 2px 28px 3px 28px; width: 30%; margin: 5px auto}
input.button.btn{width: auto;}
</style>
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
        <?php umFashion_SubMenu(1);?>
    </div>
	<div id="divMain2">
<form action="?type=add" method="post">
<?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
<table width="100%" border="1" class="table_striped table_hover table">
<tr>
  <th scope="col" width="5%" height="32" nowrap="nowrap"><p>排序</p></th>
  <th scope="col" width="15%" style="min-width: 150px"><p>标题</p></th>
  <th scope="col" width="5%" style="min-width: 60px"><p>预览</p></th>
  <th scope="col" width="30%" style="min-width: 360px"><p>图片</p></th>
  <th scope="col" width="20%" style="min-width: 150px"><p>描述</p></th>
  <th scope="col" width="15%" style="min-width: 100px"><p>链接</p></th>
  <th scope="col" width="5%" style="min-width: 60px"><p>操作</p></th>
</tr>
<tr>
  <td align="center"><input style="width:40px; text-align: center" name="order" value="" type="text" class="input"></td>
  <td><div class="inputbox"><input type="text" class="input" name="title" value=""></div></td>
  <td><div class="inputimg"></div></td>
  <td><div class="uploadimg"><div class="inputbox"><input type="text" class="uplod_img input" name="img" value=""><input type="button" class="upload_button" value="上传"></div></div></td>
  <td><div class="inputbox"><input type="text" class="input" name="info" value=""></div></td>
  <td><div class="inputbox"><input type="text" class="input" name="url" value=""></div></td>
  <td><input type="submit" class="button btn" value="增加"/></td>
</tr>
</form>
<?php
foreach ($umSliderArray as $key => $value) {
echo <<<eof
<form action="?type=edit" method="post">
<input type="hidden" name="csrfToken" value="{$zbp->GetCSRFToken()}">
<tr>
<td align="center"><input class="input" style="width:40px; text-align: center" name="order" value="{$value['order']}" type="text"><input type="hidden" name="editid" value="{$key}"></td>
<td><div class="inputbox"><input type="text" class="input" name="title" value="{$value['title']}" ></div></td>
<td><div class="inputimg"><a href="{$value['img']}" target="_blank"><img src="{$value['img']}"/></a></div></td>
<td><div class="uploadimg"><div class="inputbox"><input type="text" class="uplod_img input" name="img" value="{$value['img']}" ><input type="button" class="upload_button" value="上传"></div></div></td>
<td><div class="inputbox"><input type="text" class="input" name="info" value="{$value['info']}" ></div></td>
<td><div class="inputbox"><input type="text" class="input" name="url" value="{$value['url']}" ></div></td>
<td nowrap="nowrap">
<input type="submit" class="button btn" value="修改"/>
<input type="button" class="button btn" value="删除" onclick="if(confirm('您确定要进行删除操作吗？')){location.href='?type=del&id={$key}'}"/></td></tr>
</form>
eof;
}
?>
</table>
</div>
</div>
<script type="text/javascript">ActiveTopMenu("topmenu_umFashion");</script>
<?php
if ( $zbp->CheckPlugin( 'UEditor' ) ) {
echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.config.php"></script>';
echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
echo "<script type=\"text/javascript\" src=\"script/lib.upload.js\"></script>";
}
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>