$(document).ready(function() {
	var B = document.location;
	$("#nav a").each(function() {
		if (this.href == B.toString().split("#")[0]) {
			$(this).addClass("cur");
			return false;
		}
	});
	$(".navlower a").each(function() {
		if (this.href == B.toString().split("#")[0]) {
			$(this).addClass("cur");
			return false;
		}
	});
});
function getObject(objectId){
	if(document.getElementById && document.getElementById(objectId)){
		return document.getElementById(objectId);
	}else if(document.all && document.all(objectId)){
		return document.all(objectId);
	}else if(document.layers && document.layers[objectId]){
		return document.layers[objectId];
	}else{
		return false;
	}
}
function showHide(e,objname){
	var obj = getObject(objname);
	if(obj.style.display == "block"){
		obj.style.display = "none";	
	}else{
		obj.style.display = "block";	
	}
}
$('.nav').css("max-height",$(window).height()-120);
 $(document).ready(function(){
  $("#cate").click(function(){
    $(".nav").fadeToggle(700);
    $(".login").fadeOut();
    $(".search").fadeOut("slow");
  });
    $("#seach").click(function(){
    $(".search").fadeToggle(700);
    $(".login").fadeOut();
    $(".nav").fadeOut("slow");
  });
    $("#user").click(function(){
    $(".login").fadeToggle(700);
    $(".search").fadeOut();
    $(".nav").fadeOut("slow");
  });
  $(".main").click(function(){
    $("#nav li ul").fadeOut();
   
  });
});
  $(function(){$("img.lazy").lazyload({placeholder:"../images/grey.gif",threshold:1000,effect:"fadeIn",})});