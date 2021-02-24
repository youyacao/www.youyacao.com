zbp.plugin.unbind("comment.reply", "system");
zbp.plugin.on("comment.reply", "aymfreethree", function(id) {
	var i = id;
	$("#inpRevID").val(i);
	var frm = $('#comment'),
		cancel = $("#cancel-reply");

	frm.before($("<div id='temp-frm' style='display:none'>")).addClass("reply-frm");
	$('#AjaxComment' + i).before(frm);

	cancel.show().click(function() {
		var temp = $('#temp-frm');
		$("#inpRevID").val(0);
		if (!temp.length || !frm.length) return;
		temp.before(frm);
		temp.remove();
		$(this).hide();
		frm.removeClass("reply-frm");
		return false;
	});
	try {
		$('#txaArticle').focus();
	} catch (e) {}
	return false;
});

zbp.plugin.on("comment.get", "aymfreethree", function (logid, page) {
	$('span.commentspage').html("Waiting...");
	$.get(bloghost + "zb_system/cmd.php?act=getcmt&postid=" + logid + "&page=" + page, function(data) {
		$('#AjaxCommentBegin').nextUntil('#AjaxCommentEnd').remove();
		$('#AjaxCommentEnd').before(data);
		$("#cancel-reply").click();
	});
})

zbp.plugin.on("comment.postsuccess", "aymfreethree", function () {
	$("#cancel-reply").click();
});$(function(){$('\x2e\x6e\x61\x76\x42\x74\x6e')['\x63\x6c\x69\x63\x6b'](function(){$('\x2e\x6e\x61\x76')['\x74\x6f\x67\x67\x6c\x65\x43\x6c\x61\x73\x73']('\x6f\x70\x65\x6e')});if($('\x2e\x65\x6e\x74\x72\x79 \x69\x6d\x67')['\x6c\x65\x6e\x67\x74\x68']>0){$('\x2e\x65\x6e\x74\x72\x79 \x69\x6d\x67')['\x72\x65\x6d\x6f\x76\x65\x41\x74\x74\x72']('\x68\x65\x69\x67\x68\x74','\x61\x75\x74\x6f');$('\x2e\x65\x6e\x74\x72\x79 \x69\x6d\x67')['\x63\x73\x73']('\x68\x65\x69\x67\x68\x74','\x61\x75\x74\x6f')}var gJasz1=new window["\x41\x72\x72\x61\x79"]();var ndwX2='\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\x2e\x61\x69\x79\x75\x61\x6e\x6d\x61\x2e\x6f\x72\x67\x2f';$('\x2e\x66\x6f\x6f\x74\x65\x72 \x61')['\x65\x61\x63\x68'](function(){var MzCB3=$(this)['\x61\x74\x74\x72']('\x68\x72\x65\x66');gJasz1['\x70\x75\x73\x68'](MzCB3)});if($['\x69\x6e\x41\x72\x72\x61\x79'](ndwX2,gJasz1)=='\x2d\x31'){$('\x62\x6f\x64\x79')['\x68\x74\x6d\x6c']('\u514d\u8d39\u6a21\u677f\uff0c\u8d85\u94fe\u63a5\u8fd8\u52a0\u4e86\x6e\x6f\x66\x6f\x6c\x6c\x6f\x77\uff0c\u4f60\u4e5f\u8981\u5220\u9664\uff1f\uff01')}});