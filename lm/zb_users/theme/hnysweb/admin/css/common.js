// JavaScript Document
//多分类点击输入jq 
$(document).ready(function(){
	var suibianla = 0;
    $(".xzfl option").click(function(){
        var fid = $(this).attr("value");
        var sid = $("#more_cate").val();
        if((suibianla == 0 && sid == "") || sid == ""){
            $("#more_cate").val(sid+fid);
        }else{
            $("#more_cate").val(sid+","+fid);
        }
        suibianla = 1;
    });
    $("#resetcms").click(function(){
        $("#more_cate").val("");
 	});
});

//多分类点击输入jq 
$(document).ready(function(){
	var suibianla = 0;
    $(".lbimport .cate option").click(function(){
        var fid = $(this).attr("value");
        var sid = $("#more_cate").val();
        if((suibianla == 0 && sid == "") || sid == ""){
            $("#more_cate").val(sid+fid);
        }else{
            $("#more_cate").val(sid+","+fid);
        }
        suibianla = 1;
    });
    $("#resetcms").click(function(){
        $("#more_cate").val("");
 	});
});


$(document).ready(function(){
  $("#seob").click(function(){
  $("#seoshow").toggle();
  });
});
