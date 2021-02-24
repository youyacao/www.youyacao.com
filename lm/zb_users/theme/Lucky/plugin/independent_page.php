<?php /* EL PSY CONGROO */       		 	 
function Lucky_page_archive_list(){    	 	 				
	global $zbp;      		  		
	$str=file_get_contents($zbp->usersdir . 'cache/Lucky_archive.txt');     				 	 
	return $str;    		  		  
}    	   	 	 
function Lucky_page_readers(){    	 		 	 	
	global $zbp;    	  	  	 
	$str=file_get_contents($zbp->usersdir . 'cache/Lucky_readers.txt');    					 		
	return $str;         		 
}      		  	 
function Lucky_page_tags(){     	 				 
	global $zbp;      	    	
	$str=file_get_contents($zbp->usersdir . 'cache/Lucky_tags.txt');       		 		
	return $str;    			 		  
}    			 	 		
function Lucky_page_tags_cache() {        		  
	global $zbp;      	 	 		
	$s = '';    	    	  
	$i = 100;    			   	 
	$array = $zbp->GetTagList('','',array('tag_Count'=>'DESC'),array($i),'');     	 		  	
	foreach ($array as $tag) {    				  		
		$s .= '<a class="tagname" href="'.$tag->Url.'" title="标签 '.$tag->Name.' 共有 '.$tag->Count.' 篇文章">'.$tag->Name.' <em>x '.$tag->Count.'</em></a>';    				    
	}     	 		   
	$s .= '<!--您所查看的是标签云缓存，缓存时间'.date('Y-m-d h:i:sa',time()).'-->';     	      
	file_put_contents($zbp->usersdir . 'cache/Lucky_tags.txt', $s);      					 
}    		 	  		
function Lucky_page_archive_cache() {    				   	
	global $zbp;     		 			 
	$i = $zbp->modulesbyfilename['archives']->MaxLi;        			 
	if($i<0)return '';     	   	  
     	  	 		
	$sql = $zbp->db->sql->Select($zbp->table['Post'], array('log_PostTime'), null, array('log_PostTime' => 'DESC'), array(1), null);    	  			  
	$array = $zbp->db->Query($sql);       					
	if (count($array) == 0)    			    	
		return '';    		 		 		
	$ldate = array(date('Y', $array[0]['log_PostTime']), date('m', $array[0]['log_PostTime']));    			  	 	
	$sql = $zbp->db->sql->Select($zbp->table['Post'], array('log_PostTime'), null, array('log_PostTime' => 'ASC'), array(1), null);        		 	
	$array = $zbp->db->Query($sql);    				 	 	
	if (count($array) == 0)     	  		 	
		return '';    				 			
	$fdate = array(date('Y', $array[0]['log_PostTime']), date('m', $array[0]['log_PostTime']));       		  	
	$arraydate = array();    	 		 			
	for ($i = $fdate[0]; $i < $ldate[0] + 1; $i++) {      					 
		for ($j = 1; $j < 13; $j++) {     	 	 	  
			$arraydate[] = strtotime($i . '-' . $j);    			 	 	 
		}    		 	 		 
	}    	   	  	
	foreach ($arraydate as $key => $value) {    	 		  	 
		if ($value - strtotime($ldate[0] . '-' . $ldate[1]) > 0)    	 	 	   
			unset($arraydate[$key]);    			     
		if ($value - strtotime($fdate[0] . '-' . $fdate[1]) < 0)    			 		  
			unset($arraydate[$key]);      	 	 	 
	}      	 		  
	$arraydate = array_reverse($arraydate);        	   
	$s = '';    		    		
	foreach ($arraydate as $key => $value) {    	 	 	 		
		$ff=$key+1;    						 	
		$fdate = $value;     		 			 
		$ldate = (strtotime(date('Y-m-t', $value)) + 60 * 60 * 24);    		 				 
		$sql = $zbp->db->sql->Count($zbp->table['Post'], array(array('COUNT', '*', 'num')), array(array('=', 'log_Type', '0'), array('=', 'log_Status', '0'), array('BETWEEN', 'log_PostTime', $fdate, $ldate)));          	 
		$n = GetValueInArrayByCurrent($zbp->db->Query($sql), 'num');    	   	 		
		if ($n > 0) {     		 	   
			$s.='<ul class="al_mon_list" style="padding-left: 0px;">';    			 		  
			$s.='<li><span class="al_mon">'.date('Y', $fdate).'年'.Lucky_number(date('n', $fdate)).'月<em> ( ' . $n . '篇文章 )</em></span>';     		 		  
			if ($ff == 1 || $ff == 2){    			 	 		
				$s.='<ul class="al_post_list" style="display: block;">';     	 	 		 
			} else {    			     
				$s.='<ul class="al_post_list" style="display: none;">';    	     		
			}     		  	  
			$order = array('log_PostTime'=>'DESC');    	 	 	  	
			$where = array(    		 		 		
				array('=','log_Status','0'),     			 	  
				array('=','log_Type','0'),     	  	 		
				array('BETWEEN', 'log_PostTime', $fdate, $ldate)    		  	 	 
			);     	 	 			
			$arraylist = $zbp->GetArticleList(array('*'),$where,$order,'','');     	     		
			foreach ($arraylist as $key=>$article){    				 			
				$s .= ' <li><time>'.$article->Time('d').'日: </time><a href="'.$article->Url.'" title="'.$article->Title.'">'.$article->Title.'</a><span class="muted"><em> ('.$article->CommNums.')</em></span></li>';     	   		 
			}     		 				
			$s.='</ul></li></ul>';    	  	 	 	
		}      		 	 	
	}     			 	 	
	$s .= '<!--您所查看的是文章归档缓存，缓存时间'.date('Y-m-d h:i:sa',time()).'-->';    	    			
	file_put_contents($zbp->usersdir . 'cache/Lucky_archive.txt', $s);    		 					
}      		   	
function Lucky_number($month){    		 	  		
	$array = array('01','02','03','04','05','06','07','08','09','10','11','12');      		 			
	return $array[$month-1];    	 	 		  
}     		  	 	
$table['comment']='%pre%comment';    	 		 	 	
function Lucky_page_readers_cache(){     	     	
	global $zbp;     	  		 	
	$date = $zbp->Config('Lucky')->readers_day;         	  
	$dzgs = $zbp->Config('Lucky')->readers_num;    						 	
	$b =strtotime("-".$date."day");    	    		 
	$e = mktime(0,0,0,date('m'),date('d')+1,date('Y'));       		 	 
	$x = $zbp->Config('Lucky')->readers_emali;    				  	 
	$sql = $zbp->db->sql->Select(          	 
		$zbp->table['Comment'],    	 			  	
		array('COUNT(comm_ID) AS cnt, comm_Name, comm_HomePage , comm_Email'),    		   	  
		array(    				  	 
			array('<>', 'comm_Email', $x),      		    
			array('<>', 'comm_Name', '访客'),      	     
			array('<>', 'comm_Name', 'admin'),    			    	
			array('BETWEEN', 'comm_PostTime', $b, $e),     	    	 
			array('CUSTOM', '1=1 GROUP BY comm_HomePage')    			 	   
		),    		 	 	  
		array('cnt' => 'DESC'),     	    	 
		$dzgs,    			    	
		null      	 		 	
	);    	    	  
	$array=$zbp->db->Query($sql);     	 		 		
	$s = "";    			  	  
	foreach ($array as $key=>$comment) {      			 	 
		$i=$key+1;     			  		
		$avatarload = '<img src="'.$zbp->host.'zb_users/theme/Lucky/style/image/grey.gif" data-original="https://cn.gravatar.com/avatar/' .md5(strtolower($comment['comm_Email'])).'" class="avatar avatar-50" height="50" width="50" />';     				 	 
		$avatarurl = 'href="'.$comment['comm_HomePage'] . '" rel="external nofollow" title="' . $comment['comm_Name'] . '(评论' . $comment['cnt'] . '次)" class="item-other" target="_blank"';     		 			 
		if($i == 1){    	 				 	
			$s .= '<a class="item-top item-'.$i.'" '.$avatarurl.'><h4>【金牌读者】</h4>'.$avatarload.'<strong>' . $comment['comm_Name'] . '</strong><small>评论 ' . $comment['cnt'] . ' 次</small></a>';     		  			
		}    	   				
	 	elseif($i == 2){    		 	 	 	
			$s .= '<a class="item-top item-'.$i.'" '.$avatarurl.'><h4>【银牌读者】</h4>'.$avatarload.'<strong>' . $comment['comm_Name'] . '</strong><small>评论 ' . $comment['cnt'] . ' 次</small></a>';    	 	 			 
		}       		 			 
	 	elseif($i == 3){      	  	 	
			$s .= '<a class="item-top item-'.$i.'" '.$avatarurl.'><h4>【铜牌读者】</h4>'.$avatarload.'<strong>' . $comment['comm_Name'] . '</strong><small>评论 ' . $comment['cnt'] . ' 次</small></a>';    			  			
		}            	   	
		else{    	 	  			
			$s .= '<a '.$avatarurl.'>'.$avatarload.'<h4>' . $comment['comm_Name'] . '</h4><p>评论 ' . $comment['cnt'] . ' 次</p></a>';    	  		 	 
		}    				 			
	}        	   
	$s .= '<!--您所查看的是读者墙缓存，缓存时间'.date('Y-m-d h:i:sa',time()).'-->';    	 	 	 		
	file_put_contents($zbp->usersdir . 'cache/Lucky_readers.txt', $s);       	 	 	
}    					  	
?>