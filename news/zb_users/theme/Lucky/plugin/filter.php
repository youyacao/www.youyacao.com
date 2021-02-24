<?php /* EL PSY CONGROO */     				 		
function Lucky_tab(){     							
	global $zbp;     	   	 	
    		 		   
	$ec_where = [];       				 
	if ($excludeCate = $zbp->Config('Lucky')->exclude_category){    			 				
		$ec_array = explode(',', $excludeCate);     	  	  	
		foreach ($ec_array as $key => $value){    		  	   
			$ec_where[] = array('<>','log_CateID',$value);     		  			
		}     				   
	}    	  		  	
    			  		 
	$s = '';    		 		   
	$s .= '<div class="widget three_to_one" id="tab">';    	   	 	 
	$s .= '<div class="tab-nav j-tab-nav"><a href="javascript:void(0);" class="current"><i class="fa fa-paper-plane"></i> 最近更新</a><a href="javascript:void(0);"><i class="fa fa-fire"></i> 热门文章</a><a href="javascript:void(0);"><i class="fa fa-flag"></i> 站长推荐</a></div>';    			   	 
	$s .= '<div class="tab-con"><div class="j-tab-con">';      	     
	$s .= '<div class="tab-con-item function" style="display:block;">';     	  	 		
     		   		
	$w1 = array();    		 		 	 
	$w1[] = array('=', 'log_Type', 0);         		 
	$w1[] = array('=', 'log_Status', 0);      		 		 
	if ($ec_where) {     		   		
		$w1 = array_merge($w1, $ec_where);    					  	
	}    				 	 	
	$articles = $zbp->GetArticleList('*', $w1 , array('log_PostTime' => 'DESC'), $zbp->Config('Lucky')->tab_sl, null,false);    	    			
	foreach ($articles as $key => $relateds) {    	 				 	
		$s .= '<li><em class="li-icon li-icon-'.($key+1).'">'.($key+1).'</em><a href="' . $relateds->Url . '">' . $relateds->Title . '</a></li>';    			 		 	
	}    	 			  	
     			    
	$s .= '</div>';     	 		   
	$s .= '<div class="tab-con-item function">';    			 		  
    	 			 		
	$stime = time();    			  		 
	$ytime = $zbp->Config('Lucky')->tab_day*24*60*60;       	    
	$ztime = $stime-$ytime;      	   	 
	$order = array('log_ViewNums'=>'DESC');     							
	$w2 = array();      		 			
	$w2[] = array('=', 'log_Status', 0);      				  
	$w2[] = array('>', 'log_PostTime', $ztime);      	    	
	if ($ec_where) {     	 	  	 
		$w2 = array_merge($w2, $ec_where);      	  			
	}    		 		 	 
	$array = $zbp->GetArticleList(array('*'),$w2,$order,array($zbp->Config('Lucky')->tab_sl),'');    	   			 
	foreach ($array as $key => $cmslist) {      			 		
		$s .= '<li><em class="li-icon li-icon-'.($key+1).'">'.($key+1).'</em><a href="' . $cmslist->Url . '">' . $cmslist->Title . '</a></li>';          		
	}    	 	 			 
      	 			 
	$s .= '</div>';    			 		  
	$s .= '<div class="tab-con-item function">';    		 	 		 
    			 	   
	$postID = explode(',',$zbp->Config('Lucky')->tab_post);       	  	 
	if (array_filter($postID)) {    	  			 	
		$Lucky_tj = $zbp->GetPostByArray($postID);    	   	   
		foreach($Lucky_tj as $key => $post){     		  			
			$s .= '<li><em class="li-icon li-icon-'.($key+1).'">'.($key+1).'</em><a href="' . $post->Url . '">' . $post->Title . '</a></li>';      		  		
		}    		  		  
	}          	 
     	    		
	$s .= '</div>';    	 	   	 
	$s .= '</div></div></div>';     	    		
	    		  				
	$filePath = $zbp->usersdir.'theme/Lucky/include';     	 	  	 
	if (!file_exists($filePath)) {    				 	  
		mkdir($filePath, 0777);       		 	 
	}     	 	 		 
	@file_put_contents($filePath . '/Tab.php', $s);        		 	
}    	      	
?>