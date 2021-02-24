<?php /* EL PSY CONGROO */    	       
    	   	 		
     		 	  	
    				    
function hnysweb_article_Thumbnail(){    		 				 
global $zbp,$article;    					 	 
	if($article->Type=="0"){    				    
		echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/hnysweb/style/js/lib.upload.js\"></script>";
        echo '<div class="editmod"><label for="meta_Setwailian" class="editinputname">图标或二维码<span class="star">(*)</span></label>
              <div class="uploadimg"><input name="meta_pic" id="edtTitle" type="text" class="uplod_img" style="width:60%;margin-bottom:15px;" value="'.$article->Metas->pic.'" placeholder="最佳尺寸：120px × 120px"/>
              <strong style="color: #ffffff; font-size: 14px;padding: 6px 18px 6px 18px; background: #3a6ea5;border: 1px solid #3399cc; cursor: pointer;">浏览文件</strong>
              </div>
              <label for="meta_Setjs" class="editinputname">一句话介绍<span class="star">(*)</span></label>
              <input type="text" name="meta_Setjs" id="edtTitle" style="width:99%;margin-bottom:15px;" value="'.htmlspecialchars($article->Metas->Setjs).'" placeholder="一句话介绍，建议不超过35个字">
			  <label for="meta_Setwailian" class="editinputname">网站地址<span class="star">(*)</span></label>
              <input type="text" name="meta_Setwailian" id="edtTitle" style="width:99%;margin-bottom:15px;" value="'.htmlspecialchars($article->Metas->Setwailian).'" placeholder="网址前面必须带有http://或https://">
			  <label for="meta_Setjs" class="editinputname">联系方式</label>
              <input type="text" name="meta_Setlxfs" id="edtTitle" style="width:99%;margin-bottom:15px;" value="'.htmlspecialchars($article->Metas->Setlxfs).'" placeholder="该项不公开显示，仅仅作为用户提交网址或微信时的登记，方便本站站长与之联系！">';
        echo '<label for="meta_Setwailian" class="editinputname" >推荐属性</label>';      						    	  	 	  
	    $cnziduan='hots';        	  	     	  	 		
	    $ar=explode('|',$cnziduan);    	  	 	      		  	 		
	    foreach ($ar as $r) {
		echo '<input type="hidden"  name="meta_'.$r.'" value=""/><label>
		<input type="checkbox"name="meta_'.$r.'" value="'.htmlspecialchars($r).'" ';
		if ($article->Metas->$r == $r){echo 'checked="checked"';}    	     	        	    
		echo ' class="'.$r.'" />首页站长推荐（仅限网址）</label>&nbsp;&nbsp;';     		  			       		  	
	}     	 	 		 	
	echo'</div>';       	 	 	
    	 					 
	}     	  		 	
}    			 	 		
function hnysweb_article_seo(){      		 			
    global $zbp,$article;      		  		
	if($article->Type=="0"){    	  		  	
	       		 		
	echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/hnysweb/admin/css/common.js\"></script>";
	echo '
       <label class="editinputname">SEO设置</span><span style="margin:0 0 0 15px ;color:#1d4c7d" id="seob" class="title">点击展开</span></label>
       <div id="seoshow" style="display:none;">
	   <input type="text" id="edtTitle" style="width:99%;margin-bottom:5px;" name="meta_hyarticletitle" value="'.htmlspecialchars($article->Metas->hyarticletitle).'" placeholder="SEO标题"/>
       <input type="text" id="edtTitle" style="width:99%;margin-bottom:5px;" name="meta_hyarticlekeywords" value="'.htmlspecialchars($article->Metas->hyarticlekeywords).'" placeholder="SEO关键词，注意：1、关键词之间用英文逗号分开；2、这里的关键词不能替代文章标签；3、设置了文章标签可以不用设置这里的关键词。"/>
       <input type="text" id="edtTitle" style="width:99%;margin-bottom:15px;" name="meta_hyarticledescription" value="'.htmlspecialchars($article->Metas->hyarticledescription).'" placeholder="SEO描述"/>
	   </div>
      ';
}    	  	 	  
}         	  
function hnysweb_cate_AO(){           	
    global $zbp,$cate;
	echo '<div id="alias" class="editmod">
       <span class="title" style="margin-right:5px;">分类小图标</span>
       <input type="text" style="width:300px;" name="meta_hnysweb_icon" value="'.htmlspecialchars($cate->Metas->hnysweb_icon).'"/>
	   <p><span style=" color:#FF0000;">在分类名称前显示！这里使用的是填写图标标签调用的方法。</span>&nbsp;<a target="_blank" href="/zb_users/theme/hnysweb/style/css/demo_index.html">→点击访问图标库，选择图标。</a></p>';
        echo '<p><span class="title" style="margin:0 5px 0 0;">选择分类列表样式</span>';    	 	 		 	
         echo '<label>&nbsp;&nbsp;<input type="radio" name="meta_liststyle" value="1" ';      	 	  	
         if ($cate->Metas->liststyle == '1' ){echo 'checked="checked"';}    				 			
         echo '/>网站导航列表（默认）</label>';     		 	 	 
         echo '<label>&nbsp;&nbsp;<input type="radio" name="meta_liststyle" value="2" ';     			 		 
         if ($cate->Metas->liststyle == '2' ){echo 'checked="checked"';}    				 		 
         echo '/>网站导航列表（精简：ico+标题）</label>';       		 	 
     echo '<label>&nbsp;&nbsp;<input type="radio" name="meta_liststyle" value="3" ';     	  				
         if ($cate->Metas->liststyle == '3' ){echo 'checked="checked"';}     		 		  
         echo '/>二维码列表</label>';     	  	 	 
         echo '<label>&nbsp;&nbsp;<input type="radio" name="meta_liststyle" value="4" ';    	  	    
         if ($cate->Metas->liststyle == '4' ){echo 'checked="checked"';}      		 	 	
         echo '/>文章列表</label>';
         echo '<p><span class="title" style="margin-right:5px;">列表页显示的文章数量</span><input type="text" style="width:200px;" name="meta_hnysweb_page" id="keyword" value="'.htmlspecialchars($cate->Metas->hnysweb_page).'" placeholder="不设置则按照系统默认"/><span title="应用户特别要求，指定分类的详情页可以单独关闭了！" class="title" style="margin-right:5px;margin-left:15px;">关闭当前分类(仅限网址导航分类)的详情页</span><input type="text" id="offdetails" name="meta_offdetails" class="checkbox" value="'.htmlspecialchars($cate->Metas->offdetails).'"/>
		 </p></div>';
}    	    	 	
function hnysweb_cate_seo(){    	      	
    global $zbp,$cate;     		   	 
	     		    	
	echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/hnysweb/admin/css/common.js\"></script>";
	echo '
       <p><span style="margin:0 15px 0 0;" class="title">SEO设置</span><span style="margin:0 0 0 15px ;color:#1d4c7d" id="seob" class="title">点击展开</span><font color="#FF0000">（* 该功能为主题自带，不填写则按主题默认显示）</font></p>
       <div id="seoshow" style="display:none;"><p><input type="text" style="width:200px;margin:0 30px 0 0;" name="meta_hycatetitle" value="'.htmlspecialchars($cate->Metas->hycatetitle).'" placeholder="SEO标题"/>
       <input type="text" style="width:300px;margin:0 30px 0 0;" name="meta_hycatekeywords" value="'.htmlspecialchars($cate->Metas->hycatekeywords).'" placeholder="SEO关键词"/>
       <input type="text" style="width:500px;" name="meta_hycatedescription" value="'.htmlspecialchars($cate->Metas->hycatedescription).'" placeholder="SEO描述"/>
	   </p></div>
      ';
}     		    	
function hnysweb_tag_seo(){     	 	 	  
    global $zbp,$tag;     		 		 	
	    	  		  	
	echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/hnysweb/admin/css/common.js\"></script>";
	echo '
       <p><span style="margin:0 15px 0 0;" class="title">SEO设置</span><span style="margin:0 15px 0 0;color:#1d4c7d" id="seob" class="title">点击展开</span><font color="#FF0000">（* 该功能为主题自带，不填写则按主题默认显示）</font></p>
       <div id="seoshow" style="display:none;"><p><input type="text" style="width:200px;margin:0 30px 0 0;" name="meta_hytagtitle" value="'.htmlspecialchars($tag->Metas->hytagtitle).'" placeholder="SEO标题"/>
       <input type="text" style="width:300px;margin:0 30px 0 0;" name="meta_hytagkeywords" value="'.htmlspecialchars($tag->Metas->hytagkeywords).'" placeholder="SEO关键词"/>
       <input type="text" style="width:500px;" name="meta_hytagdescription" value="'.htmlspecialchars($tag->Metas->hytagdescription).'" placeholder="SEO描述"/></p></div>
	   <p><span style="margin:0 15px 0 0;" class="title">标签的列表页显示文章的数量</span>
       <input type="text" style="width:200px;" name="meta_hnysweb_page" id="keyword" value="'.htmlspecialchars($tag->Metas->hnysweb_page).'" placeholder="不设置则按照系统默认"/>
     </p> </div>';
}     		  	 	
function hnysweb_Filter_Plugin_ViewList_Core(&$type, &$page, &$category, &$author, &$datetime, &$tag, &$w,&$pagebar){    	  		  	
global $zbp;    			 	  	
if($type=="category"){         		 
	if($category->Metas->hnysweb_page && $category->Metas->hnysweb_page!=''){     		 			 
	 $pagebar->PageCount = $category->Metas->hnysweb_page;       		 	 
	}else{    				 		 
    $pagebar->PageCount = $zbp->displaycount;    	 		  	 
	}         	 	
}elseif($type=="tag"){    	  			  
	if($tag->Metas->hnysweb_page && $tag->Metas->hnysweb_page!=''){    			 	 		
	$pagebar->PageCount = $tag->Metas->hnysweb_page;     		 	   
	}else{      		  		
	$pagebar->PageCount = $zbp->displaycount;    		 	    
	}      	 	   
}elseif($type=="author"){    			     
	if($author->Metas->hnysweb_page &&  $author->Metas->hnysweb_page!=''){    				    
	$pagebar->PageCount = $author->Metas->hnysweb_page;    	 	  			
	}else{    	   				
	$pagebar->PageCount = $zbp->displaycount;       	 			
	}      	  		 
}    	  					
}    	 						
function hnysweb_Filter_Plugin_Member_Edit_Response(){    		 		 		
global $member;
echo '<p><span style="margin:0 15px 0 0;" class="title">作者的列表页显示文章的数量</span>
<input type="text" style="width:200px;" name="meta_hnysweb_page" id="keyword" value="'.htmlspecialchars($member->Metas->hnysweb_page).'" placeholder="不设置则按照系统默认"/></p>';
}     	  	 	 
?>