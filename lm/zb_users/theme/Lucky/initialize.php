<?php /* EL PSY CONGROO */      	 	   
require '../../../zb_system/function/c_system_base.php';     				 		
require_once 'function.php';       		  	
$zbp->Load();       	  	 
$zbp->StartSession();     	  	   
$action = GetVars('act', 'GET');    		  			 
if($action == 'geetest'){     	 	 	  
    $GtSdk = new GeetestLib($zbp->Config('Lucky')->captcha_id, $zbp->Config('Lucky')->private_key);    	   	 	 
    $status = $GtSdk->pre_process();    		 	 		 
    $_SESSION['gtserver'] = $status;       		  	
    echo $GtSdk->get_response_str();    		 	    
}    				  	 
?>