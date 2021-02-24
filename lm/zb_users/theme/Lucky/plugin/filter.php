<?php /* EL PSY CONGROO */    	  		 	 
function Lucky_tab(){      		 		 
	global $zbp;     	 					
	$s = '';     	 		 		
	$s .= '<div class="widget three_to_one" id="tab">';    	  	  	 
	$s .= '<div class="tab-nav j-tab-nav"><a href="javascript:void(0);" class="current"><i class="fa fa-paper-plane"></i> 最近更新</a><a href="javascript:void(0);"><i class="fa fa-fire"></i> 热门文章</a><a href="javascript:void(0);"><i class="fa fa-flag"></i> 站长推荐</a></div>';     		  	  
	$s .= '<div class="tab-con"><div class="j-tab-con">';     	     	
	$s .= '<div class="tab-con-item function" style="display:block;">';      	   		
	$w1 = array();    	   	 		
	$w1[] = array('=', 'log_Type', 0);      			 	 
	$w1[] = array('=', 'log_Status', 0);    		  				
	if ($zbp->Config('Lucky')->exclude_category){    	     		
		$ec_array = explode(',',$zbp->Config('Lucky')->exclude_category);    	 	 		 	
		foreach ($ec_array as $key => $Catenew){       			  
			$w1[]=array('<>','log_CateID',$Catenew);     	 				 
		}     	 					
	}     			  		
	$articles = $zbp->GetArticleList('*', $w1 , array('log_PostTime' => 'DESC'), $zbp->Config('Lucky')->tab_sl, null,false);      	 	 	 
	foreach ($articles as $key => $relateds) {    		  		 	
		$g=$key+1;      	 		  
		if($g == 1){    	  	  	 
			$s .= '<li><em class="li-icon li-icon-'.$g.'">'.$g.'</em><a href="' . $relateds->Url . '">' . $relateds->Title . '</a></li>';    			  	  
		}      	 		 	
		else if($g == 2){     			  	 
			$s .= '<li><em class="li-icon li-icon-'.$g.'">'.$g.'</em><a href="' . $relateds->Url . '">' . $relateds->Title . '</a></li>';     	 		 	 
		}    			  	  
		else if($g == 3){    		  	 	 
			$s .= '<li><em class="li-icon li-icon-'.$g.'">'.$g.'</em><a href="' . $relateds->Url . '">' . $relateds->Title . '</a></li>';       	 		 
		}    	 		 		 
		else{     	   	  
			$s .= '<li><em class="li-icon li-icon-'.$g.'">'.$g.'</em><a href="' . $relateds->Url . '">' . $relateds->Title . '</a></li>';     	 		 	 
		}    			 	 		
	}          		
	$s .= '</div>';     	  		  
	$s .= '<div class="tab-con-item function">';         		 
	$stime = time();    		 	  	 
	$ytime = $zbp->Config('Lucky')->tab_day*24*60*60;    	   		  
	$ztime = $stime-$ytime;    	 		    
	$order = array('log_ViewNums'=>'DESC');     		 	  	
	$where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));    	 	 	 	 
	$array = $zbp->GetArticleList(array('*'),$where,$order,array($zbp->Config('Lucky')->tab_sl),'');       					
	foreach ($array as $key => $cmslist) {         			
		$i=$key+1;    	  		 	 
		if($i == 1){      	  	  
			$s .= '<li><em class="li-icon li-icon-'.$i.'">'.$i.'</em><a href="' . $cmslist->Url . '">' . $cmslist->Title . '</a></li>';       		   
		}     	   		 
		else if($i == 2){            
			$s .= '<li><em class="li-icon li-icon-'.$i.'">'.$i.'</em><a href="' . $cmslist->Url . '">' . $cmslist->Title . '</a></li>';    		 	 			
		}    		 			  
		else if($i == 3){    		  		 	
			$s .= '<li><em class="li-icon li-icon-'.$i.'">'.$i.'</em><a href="' . $cmslist->Url . '">' . $cmslist->Title . '</a></li>';    	  		 	 
		}    				    
		else{    							 
			$s .= '<li><em class="li-icon li-icon-'.$i.'">'.$i.'</em><a href="' . $cmslist->Url . '">' . $cmslist->Title . '</a></li>';      	     
		}    	 	   	 
	}    			  	 	
	$s .= '</div>';    			 	 	 
	$s .= '<div class="tab-con-item function">';    								
	$Lucky_tj = explode(',',$zbp->Config('Lucky')->tab_post);     				  	
	foreach($Lucky_tj as $key => $id){    	 				  
		if ($id) {       		   
			$post=GetPost((int)$id);    		 			  
			$h=$key+1;      	 		  
			if($h == 1){    	 		 			
				$s .= '<li><em class="li-icon li-icon-'.$h.'">'.$h.'</em><a href="' . $post->Url . '">' . $post->Title . '</a></li>';       					
			}    		   			
			else if($h == 2){    	  	  		
				$s .= '<li><em class="li-icon li-icon-'.$h.'">'.$h.'</em><a href="' . $post->Url . '">' . $post->Title . '</a></li>';    			 		  
			}      			   
			else if($h == 3){    					 		
				$s .= '<li><em class="li-icon li-icon-'.$h.'">'.$h.'</em><a href="' . $post->Url . '">' . $post->Title . '</a></li>';     	  	  	
			}     				 	 
			else{     		   		
				$s .= '<li><em class="li-icon li-icon-'.$h.'">'.$h.'</em><a href="' . $post->Url . '">' . $post->Title . '</a></li>';    		 	  	 
			}      	  		 
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