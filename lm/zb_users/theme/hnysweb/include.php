<?php /* EL PSY CONGROO */         	 	
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/RegBuildModule.php';     				 		
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/common.php';       			 	
require dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'functions/tjwz.php';      	 	   
RegisterPlugin("hnysweb","ActivePlugin_hnysweb");     		   		
function ActivePlugin_hnysweb() {    	    	 	
	global $zbp;    		 	 	 	
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','hnysweb_AddMenu');    	  					
    Add_Filter_Plugin('Filter_Plugin_Zbp_BuildModule','hnysweb_rebuild_Main');     		  	  
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5','hnysweb_article_Thumbnail');      	 		 	
    Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','hnysweb_box');         		   		
	if ($zbp->Config('hnysweb')->seo=="1"){    				  		
	Add_Filter_Plugin('Filter_Plugin_Edit_Response5','hnysweb_article_seo');      	 	 	 
	Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response','hnysweb_cate_seo');      		   	
	Add_Filter_Plugin('Filter_Plugin_Tag_Edit_Response','hnysweb_tag_seo');    				 	  
	}    	  		   
    Add_Filter_Plugin('Filter_Plugin_Tag_Edit_Response','hnysweb_tag_seo');      					 
	Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response','hnysweb_cate_AO');    	 			  	
	Add_Filter_Plugin('Filter_Plugin_ViewList_Core','hnysweb_Filter_Plugin_ViewList_Core');    	 						
}     	  	 		
function hnysweb_AddMenu(&$m){    	 	   	 
	global $zbp;       				 
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/$zbp->theme/admin/config.php","","topmenu_hnysweb"));    			  	 	
}      		 	  
function hnysweb_SubMenu($id){          	 
	$arySubMenu = array(    	  	   	
	1 => array('基本配置', 'config', 'left', false),       	 	  
	2 => array('首页设置', 'home', 'left', false),    	 	  	 	
	3 => array('SEO设置', 'seo', 'left', false),    			 	   
	4 => array('广告设置', 'ad', 'left', false),    	   				
    6 => array('提交收录', 'submit', 'left', false),      	 	  		
	);     		 	 		
	foreach($arySubMenu as $k => $v){            
		echo '<a href="'.$v[1].'.php" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';     	 	 		 
	}    	 		  		
}      	   		
function InstallPlugin_hnysweb(){          		
	global $zbp;     	 	  	 
	if(!$zbp->Config('hnysweb')->HasKey('Version')){    		  	 		
		$zbp->Config('hnysweb')->Version = '2.0';    	 	 	   
        $zbp->Config('hnysweb')->stylecolor = '1';      		    
        $zbp->Config( 'hnysweb' )->favicon = $zbp->host . 'zb_users/theme/hnysweb/style/favicon.ico';    	  	    
        $zbp->Config( 'hnysweb' )->headdiyon = '0';     		 	  	
        $zbp->Config( 'hnysweb' )->headdiy = '';    		 	 		 
		$zbp->Config('hnysweb')->logo = $zbp->host . 'zb_users/theme/hnysweb/style/logo.png';      	     	
        $zbp->Config('hnysweb')->logoon = '0';    	 		  	 
        $zbp->Config('hnysweb')->liuyan = '';     	    	 
        $zbp->Config('hnysweb')->liuyanon = '0';    	  		   
		$zbp->Config('hnysweb')->daohang = '1';    				 		 
		$zbp->Config('hnysweb')->dhcate = '1';    	  		  	
        $zbp->Config('hnysweb')->dhnum = '1';    			 		  
        $zbp->Config('hnysweb')->sousuo = '1';     	  	  	
        $zbp->Config('hnysweb')->loginon = '0';     	  	 		
        $zbp->Config('hnysweb')->login = '';    				 	  
        $zbp->Config('hnysweb')->register = '';    	  	  		
        $zbp->Config('hnysweb')->member = '';    	   		  
        $zbp->Config('hnysweb')->nofollow = '0';     		 		 	
        $zbp->Config('hnysweb')->spm_xz = '1';     			 	 		
        $zbp->Config('hnysweb')->spmtwo = '0';     	 						
		$zbp->Config('hnysweb')->caini = '1';     	      
		$zbp->Config('hnysweb')->caini_xz = '1';     			   	
	    $zbp->Config('hnysweb')->caini_num = '10';     	  		  
        $zbp->Config( 'hnysweb' )->icoapi = '';    				 		 
        $zbp->Config( 'hnysweb' )->icoapioff = '0';      	 		 	
        $zbp->Config('hnysweb')->footfloat = '1';     			   	
		$zbp->Config('hnysweb')->clearSetting ='0';    	 		 	 	
		$zbp->Config('hnysweb')->seo ='1';     	  			 
		$zbp->Config('hnysweb')->seo_title = '网站标题，网站大标题+后缀关键词为宜（一般不超过80个字符）';    	   	   
        $zbp->Config('hnysweb')->seo_keywords = '网站关键字,用英文的逗号隔开！（一般不超过100个字符）';    	  	  		
        $zbp->Config('hnysweb')->seo_Description = '用一段话描述你的网站！（一般不超过200个字符）';    			    	
        $zbp->Config('hnysweb')->slidebox = '0'; 
		$zbp->Config('hnysweb')->slidebox_diy = '<div class="silder-main-img"><a target="_blank" href="https://app.zblogcn.com/?id=1537"><img src="https://www.hnysnet.com/zb_users/theme/hnysnet/style/images/banner1.jpg"></a></div>
<div class="silder-main-img"><a target="_blank" href="https://app.zblogcn.com/?id=2101"><img src="https://www.hnysnet.com/zb_users/theme/hnysnet/style/images/banner2.jpg"></a></div>
<div class="silder-main-img"><a target="_blank" href="https://app.zblogcn.com/?id=2260"><img src="https://www.hnysnet.com/zb_users/theme/hnysnet/style/images/banner3.jpg"></a></div>'; 
        $zbp->Config('hnysweb')->Setindexhot = '1';    	    		 
        $zbp->Config('hnysweb')->Sihotnum = '';     		   	 
        $zbp->Config('hnysweb')->Sihotpx = '0';     		  		  
        $zbp->Config('hnysweb')->SetindexID = '1';     		   		
        $zbp->Config('hnysweb')->Setindex = '8';    	  	 	 	
        $zbp->Config('hnysweb')->Setindex2 = '10';     	  			 	
        $zbp->Config('hnysweb')->Setindex3 = '30';     			 	 		
        $zbp->Config('hnysweb')->wzdetails = '1';    			 				
        $zbp->Config('hnysweb')->paixu = '1';     			 	  
		$zbp->Config('hnysweb')->flink = '1';
		$zbp->Config('hnysweb')->picture = '<a href="https://www.qiyeh5.com/" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/1.jpg"></a>
<a href="https://www.hnysnet.com/jianzhan/4274.html" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/2.jpg"></a>
<a href="https://app.zblogcn.com/?id=1537" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/3.jpg"></a>';
        $zbp->Config('hnysweb')->pictureon = '1';       		 		
        $zbp->Config('hnysweb')->picturepc = '1';
		$zbp->Config('hnysweb')->picture2 = '<a href="https://www.qiyeh5.com/" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/1.jpg"></a>
<a href="https://www.hnysnet.com/jianzhan/4274.html" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/2.jpg"></a>
<a href="https://app.zblogcn.com/?id=1537" target="_blank"><img src="' .$zbp->host . 'zb_users/theme/hnysweb/style/images/3.jpg"></a>';
        $zbp->Config('hnysweb')->picture2on = '0';     	 					
        $zbp->Config('hnysweb')->picture2pc = '0';    						 	
        $zbp->Config('hnysweb')->pageid = '1';      	  		  
        $zbp->Config('hnysweb')->tips = '以上各项内容均为必填项！<br>提交的内容需要审核后才可以显示。';     	      	
        $zbp->Config('hnysweb')->diycate = '';     	     	
        $zbp->Config('hnysweb')->jump = '';       				   
        $zbp->Config('hnysweb')->pass = '2';     	 	 		  
        $zbp->Config('hnysweb')->scode = '1';     		 	 	  
        $zbp->SaveConfig('hnysweb');     				  	 
	}    	   		  
}      						
function UninstallPlugin_hnysweb(){    	   				
	global $zbp;    	 			 	 
	if ($zbp->Config('hnysweb')->clearSetting){       		  	
		$zbp->DelConfig('hnysweb');		     	   			
	}      	 	 		
}     		  			
?>