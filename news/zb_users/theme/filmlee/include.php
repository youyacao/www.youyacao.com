<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'slide.php';
RegisterPlugin("filmlee","ActivePlugin_filmlee");
function ActivePlugin_filmlee(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','filmlee_AddMenu');
}
function filmlee_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/filmlee/main.php?act=config","","topmenu_filmlee"));
}

function filmlee_SubMenu($id){
	$arySubMenu = array(
		0 => array('基本设置', 'config', 'left', false),
		1 => array('外观设置', 'wzjbys', 'left', false),
		5 => array('幻灯片设置', 'slide', 'left', false),
		2 => array('广告设置', 'ad', 'left', false),
		3 => array('功能设置', 'gn', 'left', false),
		4 => array('主题说明', 'ztsm', 'left', false),
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}
//友好时间
function filmlee_TimeAgo( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return '刚刚';
    $interval = array (
        12 * 30 * 24 * 60 * 60  =>  '年前 ('.date('Y-m-d', $ptime).')',
        30 * 24 * 60 * 60       =>  '个月前 ('.date('m-d', $ptime).')',
        7 * 24 * 60 * 60        =>  '周前 ('.date('m-d', $ptime).')',
        24 * 60 * 60            =>  '天前',
        60 * 60                 =>  '小时前',
        60                      =>  '分钟前',
        1                       =>  '秒前'
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}
//选择替换
define( 'filmlee_THIS','filmlee');
define( 'filmlee_ROOT_DIR',plugin_dir_path(filmlee_THIS));
define( 'filmlee_ROOT_URL',plugin_dir_url(filmlee_THIS));
function filmlee_Get_Logo($name='logo',$type='png'){
  $path = filmlee_ROOT_DIR.'filmlee/style/images/'.$name.'.'.$type;
  if (file_exists($path)){
        echo filmlee_ROOT_URL.'filmlee/style/images/'.$name.'.'.$type;
    }else{
        echo filmlee_ROOT_URL.'filmlee/style/images/'.$name.'_example.'.$type;
    }
}
/*访问最多文章*/
function filmlee_ViewNums(){
  global $zbp;
  $str = '';
  $order = array('log_ViewNums'=>'DESC');
  $where = array(array('=','log_Status','0'));
  $array = $zbp->GetArticleList(array('*'),$where,$order,array(6),'');
	foreach ($array as $p=>$hotlist){
    $k = $p+1;
	  $str .= '<li><p><span class="count"><i class="fa fa-leaf"></i>'.$hotlist->ViewNums.'</span>℃</span></p><span class="label label-'.$k.'">'.$k.'</span><a href="'.$hotlist->Url.'" title="'.$hotlist->Title.'">'.$hotlist->Title.'</a></li>';
	}
	return $str;
}
//留言头像插件开始
function filmleecomments() {
	global $zbp;
  //$zbp->RegBuildModule('comments','filmleecomments');
	$i = $zbp->modulesbyfilename['comments']->MaxLi;
	if ($i == 0) $i = 5;
	$comments = $zbp->GetCommentList('*', array(array('=', 'comm_IsChecking', 0),array('<>', 'comm_AuthorID','1')), array('comm_PostTime' => 'DESC'), $i, null);
	$s = '';
	foreach ($comments as $comment){
	$randimg=rand(1,16);
	$randimg=$zbp->host."zb_users/theme/filmlee/include/avator/".$randimg.".jpg";
	$s .= '<dl>';
	if (($zbp->CheckPlugin('Gravatar')) || ($zbp->CheckPlugin('GravatarCache'))){
		if ($comment->Author->Email){
		$s .= '<dt class="comm-img"><img src="'.$comment->Author->Avatar.'" alt="'.$comment->Author->StaticName.'"></dt>';
		}else {$s .= '<dt><img src="'.$randimg.'" alt="'.$comment->Author->StaticName.'"></dt>';}
	}
	else{$s .= '<dt class="comm-img"><img src="'.$randimg.'" alt="'.$comment->Author->StaticName.'"></dt>';}

	$commentname = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($comment->Author->Name,'[nohtml]'),10)));
	$s .= '<dd class="comm-info"><a href="'.$comment->Post->Url.'#cmt'.$comment->ID.'" title="'.$comment->Author->Name.'在《'.$comment->Post->Title.'》发表评论">
	<p>'.$commentname.'：<span class="comm-time">'.$comment->Time('Y-m-d').'</span></p><p><i>'.$comment->Content.'</i></p></a></dd>';
	$s .= '</dl>';
	}
	return $s;
}
function InstallPlugin_filmlee(){
	global $zbp;
	filmlee_CreateTable();
    if(!$zbp->Config('filmlee')->HasKey('Version')){
		$zbp->Config('filmlee')->Version = '1.0';
		$zbp->Config('filmlee')->Keywords = '填写站点关键词';
        $zbp->Config('filmlee')->Description = '填写站点描述';
		$zbp->Config('filmlee')->cmtongji = '站点统计';
		$zbp->Config('filmlee')->weiboadd = 'http://weibo.com/';
		$zbp->Config('filmlee')->gonggao = '<li style="margin-top: 2px;">如果您觉得本站非常有看点，那么赶紧使用Ctrl+D 收藏吧</li><li style="margin-top: 2px;">网站所有资源均来自网络，如有侵权请联系站长删除！</li>';
		$zbp->Config('filmlee')->denglu = '<span class="cp-hello">您好，欢迎访问本站博客!</span><span class="cp-login1"><a href="/zb_system/cmd.php?act=login">登录后台</a></span><span class="cp-vrs"><a href="/zb_system/cmd.php?act=misc&type=vrs">查看权限</a></span>';
		$zbp->Config('filmlee')->aosen = '<i class="fa fa-weibo"></i>';
		$zbp->Config('filmlee')->footer = '<a href="/" title="关于我们">关于我们</a> | <a rel="nofollow" target="_blank" href="/links.html">友情链接</a> | <a href="/sitemap.html" target="_blank" title="站点地图（HTML版）">网站地图</a>';
		$zbp->Config('filmlee')->bdfx = '网站分享代码';
 		$zbp->Config('filmlee')->pjax = '0';
		$zbp->Config('filmlee')->claosen = '1';
		$zbp->Config('filmlee')->web_bg = '1';
		$zbp->Config('filmlee')->header_bg = '1';
		$zbp->SaveConfig('filmlee');
}
		$zbp->SaveConfig('filmlee');
}
function filmlee_CreateTable(){
    global $zbp;
    $s=$zbp->db->sql->CreateTable($GLOBALS['filmlee_Table'],$GLOBALS['filmlee_DataInfo']);
    $zbp->db->QueryMulit($s);
}
?>