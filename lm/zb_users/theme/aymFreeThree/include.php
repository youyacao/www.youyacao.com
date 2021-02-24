<?php
//注册插件
RegisterPlugin('aymFreeThree', 'ActivePlugin_aymFreeThree');
function ActivePlugin_aymFreeThree()
{
	global $zbp;	
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','aymFreeThree_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_Search_Begin','aymFreeThree_SearchPlus_Main');
}
//后台按钮
function aymFreeThree_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/aymFreeThree/settings/main.php","","topmenu_show"));
}
function aymFreeThree_SubMenu($id){
	$aryCSubMenu = array(
		0 => array('基础设置', 'main.php', 'left', false),
		5 => array('官方网站', 'http://www.aiyuanma.org/', 'right', false)
	);
	foreach($aryCSubMenu as $k => $v){
		echo '<a href="'.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

//初始安装
function InstallPlugin_aymFreeThree(){
	global $zbp;
	if(!$zbp->Config('aymFreeThree')->HasKey('Version')){
		$zbp->Config('aymFreeThree')->Version = '1.0';
		/*基础设置*/
		$zbp->Config('aymFreeThree')->logo=$zbp->host . 'zb_users/theme/aymFreeThree/style/images/logo.png';
		$zbp->Config('aymFreeThree')->banner='';
		$zbp->SaveConfig('aymFreeThree');
	}
	$zbp->Config('aymFreeThree')->Version = '1.1';
	$zbp->SaveConfig('aymFreeThree');
}
//卸载主题
function UninstallPlugin_aymFreeThree(){
	global $zbp;
	
}
function aymFreeThree_thumbnail($related) {
    global $zbp;	
	$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
	$content = $related->Content; 
	preg_match_all($pattern,$content,$matchContent);
	if(isset($matchContent[1][0])){				
		$src = $thumb=$matchContent[1][0];
	}else{	
		$src = $zbp->host.'zb_users/theme/'.$zbp->theme.'/style/images/no-image.jpg';
	}
    return $src;
}
function aymFreeThree_intro($as,$type,$long,$other){
	global $zbp;
    $str = '';
    if ($type=='0') {
    $str .= preg_replace('//', '', trim(SubStrUTF8(TransferHTML($as->Intro,'[nohtml]'),$long)).$other);
    } else {
    $str .= preg_replace('//', '', trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other);
    }
    return $str;
}
function aymFreeThree_breadcrumb($id){
	global $zbp, $html;
	$cate = $zbp->categorys;	
	$html =' &gt; <a href="' .$cate[$id]->Url.'" title="查看' .$cate[$id]->Name. '中的全部文章">' .$cate[$id]->Name. '</a> '.$html;
	if(($cate[$id]->ParentID)>0){
		aymFreeThree_breadcrumb($cate[$id]->ParentID);
	}
	return $html;
}
?>