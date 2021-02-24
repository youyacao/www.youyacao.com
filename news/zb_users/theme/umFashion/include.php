<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . '/modular.php';
RegisterPlugin("umFashion","ActivePlugin_umFashion");
function ActivePlugin_umFashion(){
Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','umFashion_AddMenu');
Add_Filter_Plugin('Filter_Plugin_ViewList_Template','umFashion_tags_set');     
Add_Filter_Plugin('Filter_Plugin_Zbp_Load','umFashion_rebuild_Main');
global $zbp;
$zbp->LoadLanguage('theme', 'umFashion');
}

function umFashion_AddMenu(&$m){
global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/umFashion/main.php","","topmenu_umFashion"));
}

function umFashion_SubMenu($id){
	$aryCSubMenu = array(	
		0 => array('基础配置', 'main.php', 'left', false),		
		1 => array('幻灯片', 'umlist.php', 'left', false),		
		2 => array('优美官网', 'http://www.umhtml.com/', 'left', true)
	);
	foreach($aryCSubMenu as $k => $v){
		echo '<a href="'.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

function umFashion_tags_set(&$template){    	  		  	
	global $zbp,$blogversion;     	 	    
	if($blogversion>=151740){      		  	 
		$array = $zbp->configs['umFashion']->GetData();    			 	 		
	}else{     		  	 	
		$array = $zbp->configs['umFashion']->Data;    	  	  		
	}         		 
	foreach ($array as $key=>$val){      						
		$template->SetTags($key,$val);     				 	 
	}    		  	  	
}  

function umFashion_copy($copyright) {     			 			
    global $zbp;     	 	  	 
    $copy = '';     	  			 
    if ($copyright)$copy = $copyright;    	 	 		  
    echo 'Theme By <a href="http://www.umhtml.com" title="优美尚品" target="_blank">优美模版</a>';	  
}  
function InstallPlugin_umFashion(){
	global $zbp;
	if(!$zbp->Config('umFashion')->HasKey('Version')){
		$zbp->Config('umFashion')->Version = '1.0';
		$zbp->Config('umFashion')->umSlider = '0';
		$zbp->Config('umFashion')->ms = '网站描述';
		$zbp->Config('umFashion')->gjc = '网站关键词';
		$zbp->Config('umFashion')->zs = 'F5330C';
		$zbp->SaveConfig('umFashion');
	}
}
//卸载主题
function UninstallPlugin_umFashion(){
	global $zbp;
}
?>