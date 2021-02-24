<?php 
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('aymFreeThree')) {$zbp->ShowError(48);die();}
$blogtitle=$zbp->theme.'主题配置->基础设置';
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
if(isset($_POST['Forum'])){	
if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();
	foreach($_POST['Forum'] as $key=>$val){
	   $zbp->Config('aymFreeThree')->$key = $val;
	}
	$zbp->SaveConfig('aymFreeThree');
	$zbp->ShowHint('good');
}

?>
<link rel="stylesheet" href="<?php echo $zbp->host;?>zb_users/theme/aymFreeThree/settings/settings.css" type="text/css" media="screen"/>
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu"><?php aymFreeThree_SubMenu(0);?></div>  
	<div id="divMain2">
		<table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
			<tr height="32">
				<td>
					<p><strong style="color:#F00">温馨提示：</strong>请在插件管理中安装启用<strong style="color:#F00">UEditor编辑器</strong>插件，否则不能使用图片上传，只能输入图片URL地址</p>
				
				</td>
			</tr>
		
		</table>
		<form id="form1" name="form1" method="post">
			<table width="100%" style='padding:0px;margin:0px;' cellspacing='0' cellpadding='0' class="tableBorder">
			<tr>
				<th width='20%'><p align="center">设置项</p></th>
				<th width='50%'><p align="center">内容</p></th>
				<th width='30%'><p align="center">描述</p></th>
			</tr>			
			<tr class="tr">
				<td><b><label for="logo"><p align="center">LOGO上传</p></label></b></td>
				<td class="show">
					<?php if($zbp->Config('aymFreeThree')->logo){?>
					<img src="<?php echo $zbp->Config('aymFreeThree')->logo;?>"/>
					<?php }?>
					<div class="uploadimg">
						<input name="Forum[logo]" id="logo" type="text" class="sedit uplod_img" value="<?php echo $zbp->Config('aymFreeThree')->logo;?>" />
						<strong>上传图片</strong>
					</div>
				</td>
				<td><p>上传网站LOGO图片，演示站LOGO尺寸190px × 60px</p></td>
			</tr>
			<tr class="tr">
				<td><b><label for="banner"><p align="center">Banner上传</p></label></b></td>
				<td class="show">
					<?php if($zbp->Config('aymFreeThree')->banner){?>
					<img src="<?php echo $zbp->Config('aymFreeThree')->banner;?>"/>
					<?php }?>
					<div class="uploadimg">
						<input name="Forum[banner]" id="banner" type="text" class="sedit uplod_img" value="<?php echo $zbp->Config('aymFreeThree')->banner;?>" />
						<strong>上传图片</strong>
					</div>
				</td>
				<td><p>上传网站banner图片，尺寸1920px × 350px</p></td>
			</tr>
			</table><br/>
			<?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
			<input name="" type="Submit" class="button" value="保存"/>
		</form>
	</div>
</div>
<?php
if ($zbp->CheckPlugin('UEditor')) {	
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
	echo '<script type="text/javascript" src="lib.upload.js"></script>';
}
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>