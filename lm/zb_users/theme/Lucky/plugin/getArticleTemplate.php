<?php /* EL PSY CONGROO */        			 
include $zbp->usersdir . 'cache/compiled/'.$zbp->theme.'/header.php';    			 		  
if($type=='article'){      		    
	function Lucky_Exclude_Post_Next(&$post){     	 		  	
		global $zbp;      	 	  	
		$prev=$post;    	       
		$where = array();     	 		  	
		$where[] = array('=', 'log_Type', 0);    	 						
		$where[] = array('=', 'log_Status', 0);    	  	  		
		$where[] = array('>', 'log_PostTime', $prev->PostTime);    	 	   		
		if($prev->CateID == $zbp->Config('Lucky')->twitter){         	 	
			$where[] = array('=','log_CateID',$zbp->Config('Lucky')->twitter);      		 	  
		} else {     		 		 	
			$where[] = array('<>','log_CateID',$zbp->Config('Lucky')->twitter);    	 					 
		}     	   		 
		$ec_arrays = explode(',',$zbp->Config('Lucky')->exclude_category);       	 	  
		if (in_array($zbp->Config('Lucky')->twitter, $ec_arrays)) {     		    	
			$ec_array = array_splice($ec_arrays,0,0);    	  	  	 
			foreach ($ec_array as $key => $Catenew){    		 	  	 
				$where[] = array('<>','log_CateID',$Catenew);     	 	 	  
			}    	 		    
		} else {    	 		    
			foreach ($ec_arrays as $key => $Catenew){    				  		
				$where[] = array('<>','log_CateID',$Catenew);     		 				
			}    				 		 
		}    	 	 	 		
		$articles = $zbp->GetPostList(    		 	 		 
			array('*'),      			   
			array($where),      	  			
			array('log_PostTime' => 'ASC'),    					  	
			array(1),      	 	 		
			null     	  			 
		);    		 	 	  
		if (count($articles) == 1) {       		   
			return $articles[0];     	 	  	 
		} else {    	  	   	
			return null;    				 	  
		}    		 	    
	}     		    	
	function Lucky_Exclude_Post_Prev(&$post){    			  		 
		global $zbp;    	 	 			 
		$prev=$post;     	 	  		
		$where = array();    	 				 	
		$where[] = array('=', 'log_Type', 0);     	 		 		
		$where[] = array('=', 'log_Status', 0);    				 		 
		$where[] = array('<', 'log_PostTime', $prev->PostTime);    	 						
		if($prev->CateID == $zbp->Config('Lucky')->twitter){    		 	 			
			$where[] = array('=','log_CateID',$zbp->Config('Lucky')->twitter);    	 		 	 	
		} else {       	  	 
			$where[] = array('<>','log_CateID',$zbp->Config('Lucky')->twitter);    			 		 	
		}     	  	 	 
		$ec_arrays = explode(',',$zbp->Config('Lucky')->exclude_category);      	     
		if (in_array($zbp->Config('Lucky')->twitter, $ec_arrays)) {        	 		
			$ec_array = array_splice($ec_arrays,0,0);        	  	
			foreach ($ec_array as $key => $Catenew){     			  	 
				$where[] = array('<>','log_CateID',$Catenew);    			   	 
			}     	 				 
		} else {    				   	
			foreach ($ec_arrays as $key => $Catenew){    	 	 			 
				$where[] = array('<>','log_CateID',$Catenew);      	   	 
			}     		  			
		}    			 				
		$articles = $zbp->GetPostList(     					  
			array('*'),      	  			
			array($where),    					   
			array('log_PostTime' => 'DESC'),    	     		
			array(1),          	 
			null    						 	
		);    	    	  
		if (count($articles) == 1) {    	   	 	 
			return $articles[0];         	  
		} else {     	 			  
			return null;     	   		 
		}    	  	   	
	}     	  	   
	Lucky_Exclude_Post_Next($article);    	  	 			
	Lucky_Exclude_Post_Prev($article);     	  		 	
}     		   		
?>