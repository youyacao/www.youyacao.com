<?php /* EL PSY CONGROO */        		 	
// SEO信息和微语     	    	 
function Lucky_Edit(){      			  	
	global $zbp,$article;    	 		   	
	if (!$zbp->CheckPlugin('UEditor')) {    			 			 
		echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';     	  		  
		echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';       		  	
	}    			 	  	
?>
<style>
.Lucky {
	position:relative;
}
.lucky-box {
	margin:0 0 10px 0;
}
.lucky-box div.lucky-main {
	display: none;
	border: 1px solid #ccc;
    width: 99%;
    border-top: 0;
    padding: 10px;
}
.lucky-box .editmod-top {
	padding: 5px 0;
}
.lucky-box .editmod-top label {
    padding: 0 2px 0 3px;
    line-height: 1em;
    font-size: 1.1em;
    width: 220px;
    text-align: right;
    font-weight: bold;
    display: inline-block;
}
.lucky-box .editmod-top input {
    padding: 3px;
    line-height: 1.8em;
    height: 1.8em;
    font-size: 1.2em;
    width: 74%;
    color: #333;
    outline: none;
}
.lucky-box h4 {
	background-color:#f5f5f5;
	width:99%;
	text-align:center;
	padding:10px 5px;
	margin: 0;
	color:#333;
	font-weight: bold;
	cursor:pointer;
	display: inline-block;
	border: 1px solid #ccc;
}
.lucky-box div.lucky-main p{
	padding:0;
	line-height:normal;
	margin-bottom: 10px;
}
.lucky-box.Lucky_twitter div.lucky-main input{
	outline:none;
	width:86%;
	line-height: 30px;
    height: 30px;
	padding:5px 10px;
	font-size:14px;
	color:#333;
	border:1px solid #ccc;
}
.lucky-box.Lucky_twitter div.lucky-main .includeli input {
	width: 74%;
	border: 1px solid #ccc;
}
.lucky-box.Lucky_twitter div.lucky-main .includeli .button {
	color: #ffffff;
	font-size: 1.1em;
	padding: 6px 18px 6px 18px;
	margin: 0 0.5em;
	border: none;
	cursor: pointer;
}
.lucky-box.Lucky_twitter div.lucky-main .includeli strong.upload-button {
	background: #3a6ea5;
}
.lucky-box.Lucky_twitter div.lucky-main .includeli span.del-button {
	background: red;
}
.lucky-box.Lucky_twitter div.lucky-main .includeli span.add-button {
	background: green;
}
.uploadimg input {
	margin: 5px 0 0 0;
	padding: 3px;
	line-height: 1.8em;
	height: 1.8em;
	font-size: 1.2em;
	width: 80%;
	color: #333;
}
.uploadimg strong {
	color: #ffffff;
	font-size: 1.1em;
	padding: 6px 18px 6px 18px;
	margin: 0 0.5em;
	border: none;
	cursor: pointer;
	background: #3a6ea5;
}
.edui-editor div[title=自定义文本框] {
	width: 98px
}
.edui-editor div[title=自定义文本框] .edui-button-body {
	width: 80px !important
}
.lucky-main h3 {
	margin: 0;
    font-size: 14px;
}
</style>

<?php if (GetVars('act', 'GET') == 'ArticleEdt'){ ?>
<script>
	function uploadAssembly(){
		var container = document.createElement('script');
		$(container).attr('type','text/plain').attr('id','upload_assembly');
		$("body").append(container);
		_editor = UE.getEditor('upload_assembly');
		_editor.ready(function () {
			_editor.hide();
			$(".uploadimg strong").click(function(){        
				object = $(this).parent().find('.uplod_img');
				_editor.getDialog("insertimage").open();
				_editor.addListener('beforeInsertImage', function (t, arg) {
					object.attr("value", arg[0].src);
				});
			});
		});
	}
	function adddiv(){
		var num = $(".includeli").children().length;
		var html = '<li id="savedimage'+num+'" class="includeli"><p class="uploadimg"><input name="meta_imgs[]" type="text" class="uplod_img"/><strong class="button upload-button">浏览文件</strong><span class="button del-button" onclick="deldiv('+num+')">移除图片</span></p></li>';
		$("#photos").append(html);
		uploadAssembly();
	}
	function deldiv(num){
		if (confirm('确定要删除该微语图片吗？')) {
			$("#savedimage"+num).remove();
		}
		return false;
	}
	$(document).ready(function(){
		$(".lucky-box h4").click(function(){
			$(this).next('div').slideToggle('slow');
		});
		if (!window.UE) {
            alert('本页面配置项需要UEditor编辑器相关组件，请先下载 UEditor编辑器，启用与否都可以。');
        } else {
            uploadAssembly();
        }
	});
</script>
<?php } ?>

<div class="Lucky">

	<?php if ($zbp->Config('Lucky')->seo=='a'){ ?>
	<div class="lucky-box Lucky_tdk">
		<h4>++++++ Lucky主题文章SEO ++++++</h4>
		<div class="lucky-main">
		<ul class="main">
			<li>
				<div class="editmod-top">
                    <label for="meta_XF_Keywords">关键词：</label>
                    <input type="text" name="meta_XF_Keywords" value="<?php echo htmlspecialchars($article->Metas->XF_Keywords); ?>">
                </div>
                <div class="editmod-top">
                    <label for="meta_XF_Description">描述：</label>
                    <input type="text" name="meta_XF_Description" value="<?php echo htmlspecialchars($article->Metas->XF_Description); ?>">
                </div>
                <div class="editmod-top">
                    <label for="meta_XF_Addtitle">附加标题(留空即为不显示)：</label>
                    <input type="text" name="meta_XF_Addtitle" value="<?php echo htmlspecialchars($article->Metas->XF_Addtitle); ?>">
                </div>
			</li>
		</ul>
		</div>
	</div>
	<?php } ?>

	<?php if (GetVars('act', 'GET') == 'ArticleEdt'){ ?>
	<div class="lucky-box Lucky_twitter">
		<h4>++++++ Lucky主题额外配置 ++++++</h4>
		<div class="lucky-main">
			<ul id="photos">
				<h3>微语图片</h3>
				<?php
					$imgs = $article->Metas->imgs;    	    	  
					if(!empty($imgs)){    			 		 	
						foreach ($imgs as $key => $value) {           	
							echo '<li id="savedimage'.$key.'" class="includeli"><p class="uploadimg"><input name="meta_imgs[]" type="text" class="uplod_img" value="'.$value.'" /><strong class="button upload-button">浏览文件</strong>';    					  	
							if($key == 0){    				 		 
								echo '<span class="button add-button" onclick="adddiv()">添加图片</span>';      	   		
							}else{     	 				 
								echo '<span  class="button del-button" onclick="deldiv('.$key.')">移除图片</span>';         			
							}       		 	 
							echo '</p></li>';    		  	 		
						}         	  
					} else {     	 	    
						echo '<li id="savedimage" class="includeli"><p class="uploadimg"><input name="meta_imgs[]" type="text" class="uplod_img" /><strong class="button upload-button">浏览文件</strong><span class="button add-button" onclick="adddiv()">添加图片</span></p></li>';    		 	 	  
					}     	 			  
					echo '<script>uploadAssembly();</script>';     				   
				?>
			</ul>
			<div id="thumbnail" class="editmod">
				<h3>文章缩略图[200*150或此等比]</h3>
		        <div class="uploadimg">
		            <input type="text" id="thumbnail" name="meta_XF_Thumbnail" class="uplod_img" value="<?php echo htmlspecialchars($article->Metas->XF_Thumbnail); ?>">
		            <strong class="button upload-button">浏览文件</strong>
		        </div>
		    </div>
		</div>
	</div>
	<?php } ?>
	
</div>
<?php
}    	   			 