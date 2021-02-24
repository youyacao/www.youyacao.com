<?php /* EL PSY CONGROO */     					 	
function Lucky_SearchMain() {     	   			
	global $zbp;    	 			   
	foreach ($GLOBALS['Filter_Plugin_ViewSearch_Begin'] as $fpname => &$fpsignal) {        		 	
		$fpreturn = $fpname();    	 		 		 
		if ($fpsignal == PLUGIN_EXITSIGNAL_RETURN) {    		    		
			$fpsignal = PLUGIN_EXITSIGNAL_NONE;       	  	 
			return $fpreturn;        	  	
		}    		  				
	}    		 	    
	if (!$zbp->CheckRights($GLOBALS['action'])) {       			 	
		Redirect('./');     		   		
	}     	  		 	
	$keywords = trim(htmlspecialchars(GetVars('q', 'GET')));     	 		 	 
	$articles = array();     		  	 	
	$zbp->title = '有关【' . $keywords . '】的内容：';        	 		
	$template = $zbp->option['ZC_INDEX_DEFAULT_TEMPLATE'];     	   		 
	if ($zbp->template->hasTemplate('search')) {      		 	 	
		$template = 'search';     	 			  
	}    	  				 
	$where = array();    	 	    	
	$where[] = array('=', 'log_Type', '0');        			 
	if ($zbp->Config('Lucky')->exclude_category) {      	 			 
		$ec_array = explode(',', $zbp->Config('Lucky')->exclude_category);    				 	 	
		foreach ($ec_array as $key => $Catenew) {     	 	  		
			$where[]=array('<>', 'log_CateID', $Catenew);     	      
		}      						
	}     	  	 	 
	if ($keywords) {      		   	
		$keywordArr = explode(' ', $keywords);    	  	 	 	
		$searchField = array('log_Content', 'log_Intro', 'log_Title');     				  	
		$wCount = count($where);     	 		 	 
		$where[$wCount] = ['like array'];    	 	 	   
		foreach ($searchField as $sf) {       		 		
			foreach ($keywordArr as $value) {      	   		
				$where[$wCount][1][] = array($sf, "%{$value}%");     		    	
			}       		 		
		}      		 	  
	} else {    					 	 
		Redirect('./');    	 	  	 	
	}    		 					
	if (!($zbp->CheckRights('ArticleAll') && $zbp->CheckRights('PageAll'))) {      		 	  
		$where[] = array('=', 'log_Status', 0);     					  
	}    	   	   
	$pagebar = new Pagebar('{%host%}search.php?{q='.$keywords.'}&{page=%page%}', false);    		 		   
	$pagebar->PageCount = $zbp->displaycount;      	 	 	  
	$pagebar->PageNow = (int) GetVars('page', 'GET') == 0 ? 1 : (int) GetVars('page', 'GET');    				   	
	$pagebar->PageBarCount=$zbp->pagebarcount;     	  	   
	$articles = $zbp->GetArticleList(     		 	   
		'*',      				  	
		$where,       			  
		array('log_PostTime' => 'DESC'), array(($pagebar->PageNow - 1) * $pagebar->PageCount, $pagebar->PageCount),     	  		  
		array('pagebar' => $pagebar),    			 	 		
		null    	  			  
	);     				 		
	if ($articles) {      						
		foreach($articles as $article) {    	  		  	
			foreach ($keywordArr as $value) {      	 		 	
				$article->Title = str_ireplace($value, '<b style=\'color:red\'>' . $value . '</b>', $article->Title);     	  			 
			}    	 					 
		}    	 	 	 	 
		$zbp->template->SetTags('LuckySearchSubtitle', '');    							 
	} else {    	 	  	 	
	   	$zbp->title = '没有找到有关【' . $keywords . '】的内容';     				   
		$zbp->template->SetTags('LuckySearchSubtitle', '<p class="Search_no_post_one">请更改关键词后再次搜索</p>');      	  			
	    $pagebar = '';      	  	  
	}     			 	 	
	$zbp->header .= '<meta name="robots" content="noindex,follow" />' . "\r\n";    		 	 		 
	$zbp->template->SetTags('title', $zbp->title);        		 	
	$zbp->template->SetTags('articles', $articles);     		 		  
	$zbp->template->SetTags('page', 1);    	 			  	
	$zbp->template->SetTags('pagebar', $pagebar);    	   		  
	if ($zbp->template->hasTemplate('search')) {    	 	  	 	
		$zbp->template->SetTemplate($template);      				  
	} else {    								
		$zbp->template->SetTemplate('index');    	 	  			
	}    	 	  			
	foreach ($GLOBALS['Filter_Plugin_ViewList_Template'] as $fpname => &$fpsignal) {    			 		  
		$fpreturn = $fpname($zbp->template);    	 	 	 	 
	}    		 			  
	$zbp->template->Display();       		 	 
	RunTime();        	 		
	die();    				 	  
}    		  			 