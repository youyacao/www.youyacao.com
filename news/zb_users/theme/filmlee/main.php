<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('filmlee')) {$zbp->ShowError(48);die();}
$blogtitle='主题配置';

$act = "";
if ($_GET['act']){
$act = $_GET['act'] == "" ? 'config' : $_GET['act'];
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

if(isset($_POST['Keywords'])){
	$zbp->Config('filmlee')->Keywords = $_POST['Keywords'];
	$zbp->Config('filmlee')->Description = $_POST['Description'];
	$zbp->Config('filmlee')->cmtongji = $_POST['cmtongji'];
	$zbp->Config('filmlee')->weiboadd = $_POST['weiboadd'];
	$zbp->SaveConfig('filmlee');
	$zbp->ShowHint('good');
}

if(isset($_POST['gonggao'])){
	$zbp->Config('filmlee')->gonggao = $_POST['gonggao'];
	$zbp->Config('filmlee')->aosen = $_POST['aosen'];
	$zbp->Config('filmlee')->claosen = $_POST['claosen'];
	$zbp->Config('filmlee')->denglu = $_POST['denglu'];
	$zbp->Config('filmlee')->footer = $_POST['footer'];
	$zbp->Config('filmlee')->bdfx = $_POST['bdfx'];
	$zbp->SaveConfig('filmlee');
	$zbp->ShowHint('good');
}

if(isset($_POST['Ad1'])){
	$zbp->Config('filmlee')->Ad1 = $_POST['Ad1'];
	$zbp->Config('filmlee')->DisplayAd1 = $_POST['DisplayAd1'];
	$zbp->Config('filmlee')->Ad2 = $_POST['Ad2'];
	$zbp->Config('filmlee')->DisplayAd2 = $_POST['DisplayAd2'];
	$zbp->Config('filmlee')->Ad3 = $_POST['Ad3'];
	$zbp->Config('filmlee')->DisplayAd3 = $_POST['DisplayAd3'];
$zbp->SaveConfig('filmlee');
	$zbp->ShowHint('good');
}

if(isset($_POST['pjax'])){
	$zbp->Config('filmlee')->pjax = $_POST['pjax'];
  $zbp->Config('filmlee')->lunbooff = $_POST['lunbooff'];
	$zbp->Config('filmlee')->web_bg = $_POST['web_bg'];
	$zbp->Config('filmlee')->header_bg = $_POST['header_bg'];
$zbp->SaveConfig('filmlee');
	$zbp->ShowHint('good');
}

?>
<style>
.zwsrk{width: 100%;font-size: 15px;height: 150px;min-height: 40px;margin: 0;margin-top: 10px;padding: 8px 8px;color: #333;background-color: #fff;border: 1px solid #d7d7d7;box-sizing: border-box;vertical-align: middle;}
.uploadimg strong {color: #ffffff;height: 29px;line-height: 30px;font-size: 12px;padding: 2px 5px;margin-left: 1em;background: #3a6ea5;border: 1px solid #3399CC;cursor: pointer;}
.uploadimg strong:hover{background: #3399cc;}
p.more, hr {display: block;margin: 1em 0;padding: 0;height: 1px;border: 0;border-top: 1px solid #666;}
.widget_id_side_con, .widget_id_side_hot, .widget_id_side_rand {display: none;}
</style>
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
	<?php filmlee_SubMenu($act);?>
     <a href="https://www.talklee.com/" target="_blank"><span class="m-right">技术支持</span></a>
    </div>
<div id="divMain2">
<?php if ($act == 'config') { ?>
<table id="form1" name="form1" width="100%" style="padding:0;margin:0;" cellspacing="0" cellpadding="0" class="tableBorder">
<tr>
    <th width="30%"><p align="center">图片名称</p></th>
    <th width="20%"><p align="center">当前图片</p></th>
	<th width="50%"><p align="center">上传文件</p></th>
  </tr>
  <form enctype="multipart/form-data" method="post" action="save.php?type=logo">
	<tr>
    <td><p align="center">LOGO（208X63）</p></td>
	<td>
	<p align="center"><a href="style/images/logo.png" target="_blank"><img src="<?php if(file_exists("style/images/logo.png")){echo "style/images/logo.png";}else{echo "style/images/logo_example.png";}?>" height="40px"></a></p>
	</td>
	<td><p align="center"><input name="logo.png" type="file"/><input name="" type="Submit" class="button" value="保存"/></p></td>
	</tr>
	</form> 
  <form enctype="multipart/form-data" method="post" action="save.php?type=wutu">
	<tr>
    <td><p align="center">LOGO（300X240）</p></td>
	<td>
	<p align="center"><a href="include/wutu.png" target="_blank"><img src="include/wutu.png" height="40px"></a></p>
	</td>
	<td><p align="center"><input name="wutu.png" type="file"/><input name="" type="Submit" class="button" value="保存"/></p></td>
	</tr>
	</form>
</table>
<form id="form2" name="form2" method="post">	
    <table width="100%" style="padding:0;margin:0;" cellspacing="0" cellpadding="0" class="tableBorder">
		<tr>
			<th width="15%"><p align="center">项目名称</p></th>
			<th width="50%"><p align="center">文本/代码</p></th>
			<th width="25%"><p align="center">说明</p></th>
		</tr>
		<tr>
			<td><label for="Keywords"><p align="center">站点关键词</p></label></td>
			<td><p align="left"><textarea name="Keywords" type="text" id="Keywords" style="width:98%;"><?php echo $zbp->Config('filmlee')->Keywords;?></textarea></p></td>
			<td><p align="left">填写站点关键词</p></td>
		</tr>
		<tr>
			 <td><label for="Description"><p align="center">站点描述</p></label></td>
			<td><p align="left"><textarea name="Description" type="text" id="Description" style="width:98%;"><?php echo $zbp->Config('filmlee')->Description;?></textarea></p></td>
			<td><p align="left">填写站点描述</p></td>
		</tr>
		<tr>
			 <td><label for="cmtongji"><p align="center">站点统计</p></label></td>
			<td><p align="left"><textarea name="cmtongji" type="text" id="cmtongji" style="width:98%;"><?php echo $zbp->Config('filmlee')->cmtongji;?></textarea></p></td>
			<td><p align="left">填写站点统计代码</p></td>
		</tr>
		<tr>
			 <td><label for="weiboadd"><p align="center">微博地址</p></label></td>
			<td><p align="left"><textarea name="weiboadd" type="text" id="weiboadd" style="width:98%;"><?php echo $zbp->Config('filmlee')->weiboadd;?></textarea></p></td>
			<td><p align="left">填写新浪微博地址</p></td>
		</tr>
	</table>
	<br />
	<input name="" type="Submit" class="button" style="margin-top:10px;padding:0 auto;" value="保存"/>
</form>

<?php } if ($act == 'gn'){
	?>
<form id="form4" name="form4" method="post">	
<table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
<th width="25%"><p align="center">是否启用全站pjax<br><input type="text" id="pjax" name="pjax" class="checkbox" value="<?php echo $zbp->Config('filmlee')->pjax;?>"/></p></th>
<th width="25%"><p align="center">是否开启首页轮播<br><input type="text" id="lunbooff" name="lunbooff" class="checkbox" value="<?php echo $zbp->Config('filmlee')->lunbooff;?>"/></p></th>
<th width="25%"><p align="center">是否启用网站背景<br><input type="text" id="web_bg" name="web_bg" class="checkbox" value="<?php echo $zbp->Config('filmlee')->web_bg;?>"/></p></th>
<th width="25%"><p align="center">是否启用头部背景<br><input type="text" id="header_bg" name="header_bg" class="checkbox" value="<?php echo $zbp->Config('filmlee')->header_bg;?>"/></p></th>
<th width="50%"></th>
</table>
<br />
	<input name="" type="Submit" class="button" value="保存"/>
		</form>

<?php } if ($act == 'ztsm'){
	?>
<form id="form5" name="form5" method="post">	
<table name="form1" width="100%" style="padding:0;margin:0;" cellspacing="0" cellpadding="0" class="tableBorder">
	<tr><td>
		<p>1、免费主题请勿删除底部作者版权，否则没有技术支持，有问题请到 <a href="https://www.talklee.com/guestbook/" target="_blank">主题页面</a> 留言，尽快解答</p>
		<p>2、李洋个人博客提供Z-blogPHP仿站、定制主题、程序主题插件安装调试服务，有需要可联系，有优惠！！！</p>
	</td></tr>	
</table>
</form>

<?php } if ($act == 'wzjbys') { ?>
<form id="form2" name="form2" method="post">	
<table width="100%" style="padding:0;margin:0;" cellspacing="0" cellpadding="0" class="tableBorder">
		<tr>
			<th width="15%"><p align="center">项目名称</p></th>
			<th width="50%"><p align="center">文本/代码</p></th>
			<th width="25%"><p align="center">说明</p></th>
		</tr>
	    <tr>
			<td><label for="gonggao"><p align="center">网站滚动公告</p></label></td>
			<td><p align="left"><textarea name="gonggao" type="text" id="gonggao" style="width:98%;"><?php echo $zbp->Config('filmlee')->gonggao;?></textarea></p></td>
			<td><p align="left">设置网站欢迎语或者公告</p></td>
		</tr>
		<tr>
			<td><label for="aosen"><p align="center">导航右侧图标</p></label></td>
			<td><p align="left"><textarea name="aosen" type="text" id="aosen" style="width:98%;"><?php echo $zbp->Config('filmlee')->aosen;?></textarea></p></td>
			<td><p align="left" style="width:58%;float: left;">奥森图标代码</p>
			<p align="right" style="width:35%;float: left;"><input type="text" id="claosen" name="claosen" class="checkbox" value="<?php echo $zbp->Config('filmlee')->claosen;?>"/></p></td>
		</tr>
		<tr>
			<td><label for="denglu"><p align="center">导航下方登录</p></label></td>
			<td><p align="left"><textarea name="denglu" type="text" id="denglu" style="width:98%;"><?php echo $zbp->Config('filmlee')->denglu;?></textarea></p></td>
			<td><p align="left">用来添加导航下方登录</p></td>
		</tr>
		<tr>
			<td><label for="footer"><p align="center">网站底部文字</p></label></td>
			<td><p align="left"><textarea name="footer" type="text" id="footer" style="width:98%;"><?php echo $zbp->Config('filmlee')->footer;?></textarea></p></td>
			<td><p align="left">网站底部文字</p></td>
		</tr>
		<tr>
			<td><label for="bdfx"><p align="center">网站分享代码</p></label></td>
			<td><p align="left"><textarea name="bdfx" type="text" id="bdfx" style="width:98%;"><?php echo $zbp->Config('filmlee')->bdfx;?></textarea></p></td>
			<td><p align="left">添加自定义分享代码</p></td>
		</tr>
	</table>
	<br />
	<input name="" type="Submit" class="button" style="margin-top:10px;padding:0 auto;" value="保存"/>
</form>

<?php } if ($act == 'ad'){
	?>
	<form id="form3" name="form3" method="post">	
	<table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
	<tr>
		<th width="15%"><p align="center">AD编号</p></th>
		<th width="40%"><p align="center">广告代码</p></th>
		<th width="10%"><p align="center">是否开启</p></th>
		<th width="25%"><p align="center">备注</p></th>
	</tr>
	<tr>
		<td><label for="Ad1"><p align="center">热门文章广告位</p></label></td>
		<td><p align="left"><textarea name="Ad1" type="text" id="Ad1" style="width:98%;"><?php echo $zbp->Config('filmlee')->Ad1;?></textarea></p></td>
		<td><p align="center"><input type="text" id="DisplayAd1" name="DisplayAd1" class="checkbox" value="<?php echo $zbp->Config('filmlee')->DisplayAd1;?>" /></p></td>
		<td><p align="left">位置：热门文章广告位，800×60</p></td>
	</tr>
	<tr>
		<td><label for="Ad2"><p align="center">全局广告位</p></label></td>
		<td><p align="left"><textarea name="Ad2" type="text" id="Ad2" style="width:98%;"><?php echo $zbp->Config('filmlee')->Ad2;?></textarea></p></td>
		<td><p align="center"><input type="text" id="DisplayAd2" name="DisplayAd2" class="checkbox" value="<?php echo $zbp->Config('filmlee')->DisplayAd2;?>" /></p></td>
		<td><p align="left">位置：全局顶部广告，1000×60</p></td>
	</tr>
	<tr>
		<td><label for="Ad3"><p align="center">文章页评论广告</p></label></td>
		<td><p align="left"><textarea name="Ad3" type="text" id="Ad3" style="width:98%;"><?php echo $zbp->Config('filmlee')->Ad3;?></textarea></p></td>
		<td><p align="center"><input type="text" id="DisplayAd3" name="DisplayAd3" class="checkbox" value="<?php echo $zbp->Config('filmlee')->DisplayAd3;?>" /></p></td>
		<td><p align="left">位置：文章页评论广告，800×30</p></td>
	</tr>	
</table>
	<br />
	<input name="" type="Submit" class="button" value="保存"/>
		</form>
<?php } if ($act == 'slide') { $str = '<form action="save.php?type=flash" method="post">
                <table width="100%" border="1" class="tdCenter">
                <tr>
                    <th scope="col" width="5%" height="32" nowrap="nowrap">序号</th>
                    <th scope="col" width="25%">图片标题</th>
                    <th scope="col" width="25%">图片地址</th>
                    <th scope="col" width="25%">超链接</th>
                    <th scope="col" width="5%">排序</th>
                    <th scope="col" width="5%">显示</th>
                    <th scope="col" width="10%">操作</th>
                </tr>';
        $str .= '<tr>';
        $str .= '<td align="center">0</td>';
        $str .= '<td><input type="text" class="sedit" name="title" value=""></td>';          	 		          		        	 	   		    	 	  	  
        $str .= '<td><div class="uploadimg"><input type="text" class="sedit uplod_img" name="img" value=""><strong>上传图片</strong></div></td>';
        //$str .= '<td><input type="text" class="sedit" name="img" value=""></td>';
        $str .= '<td><input type="text" class="sedit" name="url" value=""></td>';
        $str .= '<td><input type="text" name="order" value="99" style="width:40px"></td>';
        $str .= '<td><input type="text" class="checkbox" name="IsUsed" value="1" /></td>';
        $str .= '<td><input type="hidden" name="editid" value="">
                        <input name="add" type="submit" class="button" value="增加"/></td>';
        $str .= '</tr>';
        $str .= '</form>';
        $where = array(array('=','sean_Type','0'));
        $order = array('sean_IsUsed'=>'DESC','sean_Order'=>'ASC');
        $sql= $zbp->db->sql->Select($filmlee_Table,'*',$where,$order,null,null);
        $array=$zbp->GetListCustom($filmlee_Table,$filmlee_DataInfo,$sql);
        $i =1;
        foreach ($array as $key => $reg) {
            $str .= '<form action="save.php?type=flash" method="post" name="flash">';
            $str .= '<tr>';
            $str .= '<td align="center">'.$i.'</td>';
            $str .= '<td><input type="text" class="sedit" name="title" value="'.$reg->Title.'" ></td>';
            $str .= '<td><div class="uploadimg"><input type="text" class="sedit uplod_img" name="img" value="'.$reg->Img.'" ><strong>上传图片</strong></div></td>';
            //$str .= '<td><input type="text" class="sedit" name="img" value="'.$reg->Img.'" ></td>';
            $str .= '<td><input type="text" class="sedit" name="url" value="'.$reg->Url.'" ></td>';
            $str .= '<td><input type="text" class="sedit" name="order" value="'.$reg->Order.'" style="width:40px"></td>';
            $str .= '<td><input type="text" class="checkbox" name="IsUsed" value="'.$reg->IsUsed.'" /></td>';
            $str .= '<td nowrap="nowrap">
                        <input type="hidden" name="editid" value="'.$reg->ID.'">
                        <input name="edit" type="submit" class="button" value="修改"/>
                        <input name="del" type="button" class="button" value="删除" onclick="if(confirm(\'您确定要进行删除操作吗？\')){location.href=\'save.php?type=flashdel&id='.$reg->ID.'\'}"/>
                    </td>';
            $str .= '</tr>';
            $str .= '</form>';
            $i++;
        }
        $str .='</table>';
        echo $str;
    };
	
?>
 
</div>
</div>
<script type="text/javascript">
ActiveTopMenu("topmenu_filmlee");
</script> 
<?php
if ($zbp->CheckPlugin('UEditor')) {
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
	echo "<script type=\"text/javascript\" src=\"include/lib.upload.js\"></script>";
}
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
