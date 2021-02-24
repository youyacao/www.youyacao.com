var cypSwiper = new Swiper('#downCont', {
    loop: true,
    onSlideChangeEnd: function (cypSwiper) {
        var index = cypSwiper.realIndex;
        $(".down_nav li").removeClass("active").eq(index).addClass("active");
    }
});

$(".down_nav li").click(function () {
    var i = $(this).index() + 1;
    cypSwiper.slideTo(i, 500, false);
    $(this).addClass("active").siblings().removeClass("active");
});


$(function () {
    $(".androidDown").each(function() {
        $(this).click(function () {
            var downUrl = $(this).attr("url");
            $("#AndroidUrl").attr("href", downUrl);
            $("#spAndroid").click();
        });
    });

    $(".iosDown").each(function() {
        $(this).click(function () {
            var downUrl = $(this).attr("url");
            $("#IosUrl").attr("href", downUrl);
            $("#spIos").click();
        });
    });
});

$(function(){
    if(!window.location.search){
        return false;
    }
    var parme = window.location.search.replace('?','').split('&');
    var parmeData={};
    for(var i=0;i<parme.length;i++){
        var item = parme[i];
        var items = item.split('=');
        parmeData[items[0]] = items[1];
    };
    try{
        if(parmeData.app){
            $(".down_nav").find('.'+parmeData.app).click();
        }
    }catch(error){
        console.log(error);
    }
    
});