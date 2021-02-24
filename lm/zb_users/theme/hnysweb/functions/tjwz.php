<?php /* EL PSY CONGROO */      			  	 
function hnysweb_box(&$template) {    		   	 	    	 		 	 	
	global $zbp;    	   	 		    						 	
	$article = $template->GetTags('article');    				        		    	 
	if($article->ID == $zbp->Config('hnysweb')->pageid){      			    
    	if($zbp->Config('hnysweb')->jump!=""){    			  	 	         		 
    		$hnyswebjump='<script>var hnyswebJump="'.$zbp->Config('hnysweb')->jump.'";</script>';    				 	 	     	 		  	
    	}else{    				    
    		$hnyswebjump='<script>var hnyswebJump="'.$article->Url.'";</script>';     				       	  	 		 
    	}
		$zbp->header .= ''."\r\n".$hnyswebjump.'<script src="'.$zbp->host.'zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="'.$zbp->host.'zb_system/script/zblogphp.js" type="text/javascript"></script>
        <script src="'.$zbp->host.'zb_system/script/c_html_js_add.php" type="text/javascript"></script>
        <script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>
        <script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>
        <script src="'.$zbp->host.'zb_users/theme/hnysweb/admin/js/check.js" type="text/javascript"></script>'."\r\n";  		 	  
    	$hnyswebetool='[["source","|", "paragraph", "bold", "italic", "link", "insertimage", "pasteplain", "removeformat","Undo","Redo"]]';    		   	            	 	 	 	
	    $hnyswebvcode ='<img id="reg_verfiycode" class="ccode" title="点击刷新" style="border:none;vertical-align:middle;width:'.$zbp->option['ZC_VERIFYCODE_WIDTH']. 'px;height:' . $zbp->option['ZC_VERIFYCODE_HEIGHT'] . 'px;cursor:pointer;" src="' .$zbp->validcodeurl . '?id=hnysweb" alt="" title="" onclick="javascript:this.src=\'' . $zbp->validcodeurl . '?id=hnysweb&amp;tm=\'+Math.random();"/>';      	  	 	     		 		 	
	    $hnyswebUEditor ='<textarea name="Content" id="editor_Content" datatype="*"></textarea><script type="text/javascript">var editor = new baidu.editor.ui.Editor({toolbars: '.$hnyswebetool.',initialFrameHeight: 350,});editor.render("editor_Content");editor.sync("Content"); </script>';     		  	 	    		 	    
	    if($zbp->user->Alias!=""){     	 	 		      		 		 	
	    	$visitor = '.$zbp->user->Alias.('.$zbp->user->Name.')&nbsp;';          		    				 	 	
	    }else{    				 	      		  	   
		    $visitor = ''.$zbp->user->Name.'';    	 	  	 	     				 	 
		}  		 				     	 	 			
		$article->Content .='<input type="hidden" name="token" id="token" value="'.$zbp->GetToken().'" />';    			 	 		       		 		
   		$article->Content .='<div class="hnysweb-box">'.$spostdom.'<p><span class="title">标题</span><br><input required="required" class="z_title" size="40" name="Title" type="text" maxlength="90"></p>';       						 
        $article->Content .='<p class="uploadimg"><span class="title">图标或二维码</span><br><input name="pic" type="text" placeholder="最佳尺寸：120px × 120px" class="uplod_img" value=""/><strong>浏览文件</strong></p><script type="text/javascript" src="'.$zbp->host.'zb_users/theme/hnysweb/admin/js/lib.upload.js"></script>';     	      	
		$article->Content .='<p><span class="title">一句话介绍</span><br><input required="required" name="Setjs" class="z_meta" size="40" type="text"  placeholder="一句话介绍，建议不超过35个字"></p>';     		 				 
		$article->Content .='<p><span class="title">网站地址</span><br><input  required="required" name="Setwailian" class="z_meta" size="40" type="text" placeholder="网址前面必须带有http://或https://"></p>';     		   	 	
		$article->Content .='<p><span class="title">联系方式</span><br><input  required="required" name="Setlxfs" class="z_meta" size="40" type="text" placeholder="【选填项】该项不公开显示，仅仅为了方便在必要时我们与你联系！请在联系方式前注明：手机号、qq、微信号或者邮箱。"></p>';     		   	 	
	    $article->Content .='<p><span class="title">详细介绍</span><br>'.$hnyswebUEditor;     	  		   
        if($zbp->Config('hnysweb')->diycate){     	  	    
		$article->Content .='<p><span class="title">选择分类</span><br><select name="Cate" class="z_cate"><option value="0">--请选择分类--</option>'.$zbp->Config('hnysweb')->diycate.'</select></p>'; }    		    	 
        else{    	   	 	 
        $article->Content .='<p><span class="title">选择分类</span><br>'.hnysweb_cate().'</p>';       			  	 	
        }    	 		   	
	    if($zbp->Config('hnysweb')->scode){    	  	   	    		  		  
		$article->Content .='<p><span class="title">验证码</span><br><input required="required" name="verifycode" class="z_vcode" size="40" type="text">'.$hnyswebvcode.'</p>';     		  		       	  		 
		}      		         	 	  		
	    $article->Content .='<p><button class="post-btn" onclick="imgPreview();">确定提交</button></p></div>';     			 	 	    		 		   
	    $article->Content .=''.$zbp->Config('hnysweb')->tips.'';   	 	 	 		     	 				 
		$s=	'';     	  				    		  	 		
		$article->Content .=$s;    			 	         		 		 
	}          		    	 	 	   
}     					  	
?>