<?php /* EL PSY CONGROO */     			   	
require '../../../../zb_system/function/c_system_base.php';    	   	 		
require '../../../../zb_system/function/c_system_admin.php';      		    
    	    			
$zbp->Load();     	 		   
$action='root';            
    					 		
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}    		 		  	
if (!$zbp->CheckPlugin('Lucky')) {$zbp->ShowError(48);die();}     	   	  
    				  		
global $zbp;     	     	
     			   	
if($_GET['type'] == 'flash' ){      	 		  
	CheckIsRefererValid();    				 		 
	      	    	
	if(!$_POST["title"] or !$_POST["img"] or !$_POST["url"]){    	 	 			 
		Redirect('./operate.php?signal=danger&operate=true');      		   	
	}    		     	
	    	 			  	
	$DataArr = array(    		 			  
		'sean_Title'=>$_POST["title"],     	 	 		 
		'sean_Img'=>$_POST["img"],      		 			
		'sean_Url'=>$_POST["url"],    	 		 	 	
		'sean_Order'=>$_POST["order"],    	 	  	  
		'sean_IsUsed'=>$_POST["IsUsed"]    	 	 	 		
	);    	  		 		
      	 			 
	if($_POST["editid"]){     	  	  	
		$where = array(array('=','sean_ID',$_POST["editid"]));     		   		
		$sql= $zbp->db->sql->Update($Lucky_Table,$DataArr,$where);    	  				 
		$zbp->db->Update($sql);      		 	  
	} else {    	   	   
		$sql= $zbp->db->sql->Insert($Lucky_Table,$DataArr);      	    	
		$zbp->db->Insert($sql);    		 	  	 
	}     		   	 
             			
	Lucky_Get_Flash($Lucky_Table,$Lucky_DataInfo);       			  
	Redirect('./operate.php?signal=success&operate=true');    	 	 	 	 
}     				 		
      	 			 
if($_GET['type'] == 'customers' ){     	  			 
	CheckIsRefererValid();       	 	  
    	    			
	if(!$_POST["CustomerTitle"] or !$_POST["CustomerImg"] or !$_POST["CustomerUrl"]){    	     		
		Redirect('./operate.php?signal=danger&operate=true');    	 	 	 		
	}     	  		 	
	     			  		
	$DataArr = array(    		 		 	 
		'sean_CustomerTitle'=>$_POST["CustomerTitle"],    				 	 	
		'sean_CustomerImg'=>$_POST["CustomerImg"],       			  
		'sean_CustomerUrl'=>$_POST["CustomerUrl"]     		     
	);     	  	 	 
      	 				
	if($_POST["editid"]){    		  	   
		$where = array(array('=','sean_ID',$_POST["editid"]));    	 			  	
		$sql= $zbp->db->sql->Update($Lucky_Table,$DataArr,$where);    	  	   	
		$zbp->db->Update($sql);     			 			
	} else {      	  	 	
		$sql= $zbp->db->sql->Insert($Lucky_Table,$DataArr);    	 			   
		$zbp->db->Insert($sql);       	  		
	}     	    	 
        			  	  
	Lucky_Get_Flash_Customer($Lucky_Table,$Lucky_DataInfo);    				    
	Redirect('./operate.php?signal=success&operate=true');    	 	 			 
}    	 			 	 
    		    	 
if($_GET['type'] == 'flashdel' ){     	 	 	 	
	CheckIsRefererValid();            
    				 		 
	$where = array(array('=','sean_ID',$_GET['id']));    	 		 	 	
	$sql= $zbp->db->sql->Delete($Lucky_Table,$where);       			  
	$zbp->db->Delete($sql);    	   			 
	Lucky_Get_Flash($Lucky_Table,$Lucky_DataInfo);      	 	   
	Redirect('./operate.php?signal=success&operate=true');     	  	 		
}    	     	 
?>