$(function(){
	$(".hnysweb-box .post-btn").click(function() {
		checkPost();
	});
	function checkPost(){
		$.post(bloghost+'zb_users/theme/hnysweb/functions/postdata.php', {
			"Title":$("input[name='Title']").val(),
			"Content":editor.getContent(),
			"token":$("input[name='token']").val(),
			"Cate":$("select[name='Cate']").val(),
			"pic":$("input[name='pic']").val(),
			"Setjs":$("input[name='Setjs']").val(),
			"Setwailian":$("input[name='Setwailian']").val(),
			"Setlxfs":$("input[name='Setlxfs']").val(),
			"verifycode":$("input[name='verifycode']").val(),
			}, function(data){
				var s =data;
				if((s.search("faultCode")>0)&&(s.search("faultString")>0)){
					alert(s.match("<string>.+?</string>")[0].replace("<string>","").replace("</string>",""));
					$("#reg_verfiycode").attr("src",bloghost+"zb_system/script/c_validcode.php?id=hnysweb&amp;tm="+Math.random());
				}else{
					var s =data;
					alert(s);
					window.location=hnyswebJump;
				}
			}
		);
	}
});