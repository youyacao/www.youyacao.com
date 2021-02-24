<?php /* EL PSY CONGROO */  			      	  	  	 
require '../../../../zb_system/function/c_system_base.php';    		 		 		    				  		
$zbp->Load();    					 	     	 	 		 	
Add_Filter_Plugin('Filter_Plugin_Zbp_ShowError','RespondError',PLUGIN_EXITSIGNAL_RETURN);     			   	    		 	 	 	
if (!$zbp->CheckPlugin('hnysweb')) {$zbp->ShowError(48);die();}    		 	   	    				  		
if(!$zbp->ValidToken(GetVars('token','POST'))){$zbp->ShowError(5,__FILE__,__LINE__);die();}    		 	  	     	   	  	
if(empty($_POST['Title'])){     		   		    	 		   	
    $zbp->ShowError('标题不能为空，别一开始就走神了！');die();        			       		   	
}    					 	      		   	 
if(empty($_POST['Content'])){      	 	  	     							
    $zbp->ShowError('详细介绍不能为空，你让我看啥？看啥？');die();    			 	  	     	   		 
}    	 	     
if(empty($_POST['pic'])){      	 	  	      			 		
    $zbp->ShowError('图标或二维码不能为空！');die();    			 	  	      	   		
}    	 	  	  
if(empty($_POST['Setjs'])){      	 	  	     	  			 
    $zbp->ShowError('一句话介绍不能为空！');die();    			 	  	    						  
}    				 	  
	       	 			  
if(!$zbp->CheckValidCode(GetVars('verifycode','POST'),'hnysweb') && $zbp->Config('hnysweb')->scode){     	 	  		      		  		
    $zbp->ShowError('验证码错误，请重新输入');die();    				 			    	   	   
}    	 	 	  	  	     	 	    	
    $a = new Post();    	   		      			 	   
	$a->CateID = $_POST['Cate'];     	    			    	 		  	 
	$a->Metas->pic = $_POST['pic'];      	 		  
    $a->Metas->Setjs = $_POST['Setjs'];    		   		 
	$a->Metas->Setwailian = $_POST['Setwailian'];    		 		  	
	$a->Metas->Setlxfs = $_POST['Setlxfs'];     	 		  	
	$a->Metas->cover = $_POST['cover'];    	 	  		   	 	 	     			 		 
    $a->AuthorID = $zbp->user->ID;    		  	 	         			 
    $a->Tag = '';     		   			    	 				  
    if($zbp->user->Level <= $zbp->Config('hnysweb')->pass){    	   	           		 	
        $a->Status = 0;    			    	     			  	 
    }else{       		 	     	    			
        $a->Status = 2;    	 			  	      	   		
    }      	   	       			   
    $a->Type = ZC_POST_TYPE_ARTICLE;    			 	 	      			  		
    $a->Alias = '';       			 	     	 	    
    $a->IsTop = false;    	 		 			     				   
    $a->IsLock = false;    		          		 	 			
    $a->Title = $_POST['Title'];    					 	     		 	 		 
    $a->Content = $_POST['Content'];    	 	 		       				 	 
    $a->IP = GetGuestIP();       		 	       					 
    $a->PostTime = time();    	 				 	    						 	
    $a->CommNums = 0;    	 					        	  	 
    $a->ViewNums = 0;    					  	      	 	   
    $a->Template = '';     	  				    	 	 	 	 
    $a->Save();    		 	 	 	    	 			 		
    echo '恭喜，提交成功！';die();    		   		     		  	  	
?>