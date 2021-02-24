<?php /* EL PSY CONGROO */    	 		 	  
function hnysweb_rebuild_Main() {     	   	 	
	global $zbp;    		   			
    if ($zbp->Config('hnysweb')->dhcate=="1"){    		      
    $zbp->RegBuildModule('catalog','hnysweb_catalog');}     			 	 	
	else{    	 	 	 	 
    $zbp->RegBuildModule('catalog','hnysweb_catalog2');    					  	
}}     			 		 
function hnysweb_catalog() {     				  	
	global $zbp;    		 	 		 
	$s = '';      	    	
	if ($zbp->option['ZC_MODULE_CATALOG_STYLE'] == '2') {     	  	  	
		foreach ($zbp->categorysbyorder as $key => $value) {    	   		 	
			if ($value->Level == 0) {    	 	  			
				$s .= '<li><a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li>';     	 					
			}     	 	 			
		}    	     		
		foreach ($zbp->categorysbyorder as $key => $value) {        		 	
			if ($value->Level == 1) {        	  	
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);    	    	 	
			}    		 					
		}     	  		 	
		foreach ($zbp->categorysbyorder as $key => $value){    	    			
			if($value->Level == 2) {    	 		    
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);        		 	
			}    	     	 
		}foreach($zbp->categorysbyorder as $key => $value){     				   
			if ($value->Level == 3) {     		 		 	
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);      	     
			}    	    		 
		}foreach($zbp->categorysbyorder as $key => $value){    			 			 
			$s = str_replace('<!--' . $value->ID . 'begin--><!--' . $value->ID . 'end-->', '', $s);     		 	   
		}foreach($zbp->categorysbyorder as $key => $value){    	   		  
			$s = str_replace('<!--' . $value->ID . 'begin-->', '<span onClick="showHide(this,\'items'.$value->ID.'\');" class="iconfont">&#xe6a2;</span><ul id="items'.$value->ID.'">', $s);     	  	 	 
			$s = str_replace('<!--' . $value->ID . 'end-->', '</ul>', $s);          	 
		}    	 						
	}elseif($zbp->option['ZC_MODULE_CATALOG_STYLE'] == '1'){      						
		foreach ($zbp->categorysbyorder as $key => $value){    		 		 	 
			$s .= '<li>' . $value->Symbol . '<a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a></li>';       	 	 	
		}     	   	 	
	}else{    			 	 		
		foreach ($zbp->categorysbyorder as $key => $value){         			
			$s .= '<li><a href="' . $value->Url . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a></li>';    	  	 		 
		}     		   		
	}    	   				
	return $s;      	  	 	
}       		 	 
function hnysweb_catalog2() {       		 	 
	global $zbp;     	      
	$s = '';     		 	 	 
	if ($zbp->option['ZC_MODULE_CATALOG_STYLE'] == '2') {     	 			 	
		foreach ($zbp->categorysbyorder as $key => $value) {        	 		
			if ($value->Level == 0) {    	 	 	 		
				$s .= '<li><a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li>';     	 			 	
			}      	 	  	
		}    	 	  	 	
		foreach ($zbp->categorysbyorder as $key => $value) {      		 		 
			if ($value->Level == 1) {    	    			
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);    		 	 			
			}     					  
		}        				
		foreach ($zbp->categorysbyorder as $key => $value){    	 		    
			if($value->Level == 2) {    	  				 
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);     	 		  	
			}    		  	 		
		}foreach($zbp->categorysbyorder as $key => $value){    		 	 	 	
			if ($value->Level == 3) {     				 		
				$s = str_replace('<!--' . $value->ParentID . 'end-->', '<li><a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a><!--' . $value->ID . 'begin--><!--' . $value->ID . 'end--></li><!--' . $value->ParentID . 'end-->', $s);    		   		 
			}     		    	
		}foreach($zbp->categorysbyorder as $key => $value){    							 
			$s = str_replace('<!--' . $value->ID . 'begin--><!--' . $value->ID . 'end-->', '', $s);    	 	   	 
		}foreach($zbp->categorysbyorder as $key => $value){    			     
			$s = str_replace('<!--' . $value->ID . 'begin-->', '<span onClick="showHide(this,\'items'.$value->ID.'\');" class="iconfont">&#xe6a2;</span><ul id="items'.$value->ID.'">', $s);      		 		 
			$s = str_replace('<!--' . $value->ID . 'end-->', '</ul>', $s);       	   	
		}    	  	 			
	}elseif($zbp->option['ZC_MODULE_CATALOG_STYLE'] == '1'){        		 	
		foreach ($zbp->categorysbyorder as $key => $value){    		    	 
			$s .= '<li>' . $value->Symbol . '<a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a></li>';     			  	 
		}       			  
	}else{    		   	  
		foreach ($zbp->categorysbyorder as $key => $value){      				 	
			$s .= '<li><a href="'. $zbp->host .'#a' . $value->ID . '"><i class="iconfont">' . $value->Metas->hnysweb_icon . '</i>' . $value->Name . '</a></li>';    	 	     
		}         	  
	}           	
	return $s;    		 	    
}        		  
function hnysweb_postasc($Rows,$CategoryID,$hassubcate){    	 	  			
        global $zbp;      	 			 
    $ids = strpos($CategoryID,',') !== false ? explode(',',$CategoryID) : array($CategoryID);       	    
    $wherearray=array();     	 				  
    foreach ($ids as $cateid){    	 					 
      if (!$hassubcate) {    	  		 	 
        $wherearray[]=array('log_CateID',$cateid);      					 	
      }else{      	 	   
                $wherearray[] = array('log_CateID', $cateid);     		    	
                foreach ($zbp->categorys[$cateid]->SubCategorys as $subcate) {      	  		 
                    $wherearray[] = array('log_CateID', $subcate->ID);        		  
                }    		   	 	
      }     	  				
    }    				  		
    $where=array(     							 
                    array('array',$wherearray),       		   	
                    array('=','log_Status','0'),       			  	
                    );     	 		  	 
         	  	
    $order = array( 'log_PostTime' => 'ASC' );    	   	 	 
    $articles=    $zbp->GetArticleList(array('*'),$where,$order,array($Rows),'');          						 
      			 	 	
        return $articles;    	 				  
}    		 				 
function hnysweb_GetArticleCategorys($Rows,$CategoryID,$hassubcate){     		 		 	
        global $zbp;    		   	  
    $ids = strpos($CategoryID,',') !== false ? explode(',',$CategoryID) : array($CategoryID);         		 
    $wherearray=array();      						 
    foreach ($ids as $cateid){    	 	  	 	
      if (!$hassubcate) {         			
        $wherearray[]=array('log_CateID',$cateid);      	 	  	 
      }else{    	  	    
                $wherearray[] = array('log_CateID', $cateid);       	  	 
                foreach ($zbp->categorys[$cateid]->SubCategorys as $subcate) {      	  		 
                    $wherearray[] = array('log_CateID', $subcate->ID);       	  		
                }     	  				
      }     			 	 	
    }     	 	 		 
    $where=array(      	 					
                    array('array',$wherearray),      			 			
                    array('=','log_Status','0'),     	  					
                    );       		  	 
       		 	 	
    $order = array('log_ViewNums'=>'DESC');     					   
    $articles=    $zbp->GetArticleList(array('*'),$where,$order,array($Rows),'');          	   			
      		   		
        return $articles;    	 				 	
}    		  	 		
function hnysweb_commnums($Rows,$CategoryID,$hassubcate){      	  	 	
        global $zbp;     		 		 	
    $ids = strpos($CategoryID,',') !== false ? explode(',',$CategoryID) : array($CategoryID);    	  		 	 
    $wherearray=array();     		 	  		
    foreach ($ids as $cateid){    	       
      if (!$hassubcate) {     	  	  	
        $wherearray[]=array('log_CateID',$cateid);       						
      }else{    			   	 
                $wherearray[] = array('log_CateID', $cateid);    	   	  	
                foreach ($zbp->categorys[$cateid]->SubCategorys as $subcate) {    	 	     
                    $wherearray[] = array('log_CateID', $subcate->ID);    	 	    	
                }    		 	  		
      }     		 	   
    }      	 		 	
    $where=array(       	 	 	 
                    array('array',$wherearray),     	  			 	
                    array('=','log_Status','0'),     				  		
                    );     	  	 	  
     	     	 
    $order = array('log_CommNums'=>'DESC');       	 				
    $articles=    $zbp->GetArticleList(array('*'),$where,$order,array($Rows),'');          		 			 
       				 	
        return $articles;       			  
}    				 	  
function hnysweb_TimeAgo( $ptime ) {    			 	  	
    $ptime = strtotime($ptime);    	 						
    $etime = time() - $ptime;        	   
    if($etime < 1) return '刚刚';     		   	 
    $interval = array (     	 	 		 
          	 		 	 	
		12 * 30 * 24 * 60 * 60  =>  '年前',     				  	
        30 * 24 * 60 * 60       =>  '个月前',     		  	 	
        7 * 24 * 60 * 60        =>  '周前',    		 	    
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
function hnysweb_subCate($CateID){     		 			 
	global $zbp;	    		 	 		 
	if($CateID) {     							
		foreach ($zbp->categorys[$CateID]->SubCategorys as $cate) {	     				 		
			echo '<li><a href="'.$cate->Url.'" title="'.$cate->Name.'"><i class="iconfont">' . $cate->Metas->hnysweb_icon . '</i>'.$cate->Name.'</a></li>';			    	 	 		 	
		}    		    		
	}    	 		    
}     			 	 	
function hnysweb_cate(){    	  		 	     	 	 	 		
    global $zbp;       			 	      		 			
    $array=$zbp->GetCategoryList();     					      			 	 		
	$str = '<select name="Cate" class="z_cate">';       	 			    	  	 	 	
	$str .= '<option value="0">--请选择分类--</option>';     		  			      		  	 
	foreach ($array as $cate){      							 
        if ($cate->Level == 0) {    	    		 
		$str .= '<option value="'.$cate->ID.'">'.$cate->Name.'</option>'; }           	
       else{     					  
         $str .= '<option value="'.$cate->ID.'">&nbsp;&nbsp;'.$cate->Name.'</option>';      	   			
       }        	 	 
       }     	   			 
     	  		  
	$str .= '</select>';     		   	        		  	
	return $str;    		 	   	    		 	    
}       		  	
      	 	   
?>