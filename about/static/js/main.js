$(document).ready(function(){
	
	var winW = $(window).width();
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
	var slide = 4;

	if(winW<1365){
		slide = 3;
	}
	if(winW<961){
		slide = 2;
	}
	if(winW<681){
		slide = 2;
	}
	
	$("img,div").lazyload({effect: "fadeIn", threshold :180});


	$('header .menu').on('click', function() {
		$('.slide_nav').addClass('left_active')
		$('.all_contentS,.all_content').addClass('active');
		// $('.fix-bg').show();
		$('.header .logo').animate({
			'opacity': 0
		})
	})
	$('.phone_back').on('click', function() {
		$('.slide_nav').removeClass('left_active')
	});

	$(".new-nav p").mouseenter(function(){
		var index = $(this).index();
		$(this).addClass("on").siblings().removeClass("on");
		$(".main-box .main").eq(index).addClass("on").siblings().removeClass("on");
	})


	// //首页轮播
	// var swiper01 = new Swiper('.swiper-01',{
	// 	autoplay:5000,
	// 	speed:1000,
	// 	autoplayDisableOnInteraction : false,
	// 	loop:true,
	// 	on:{
	// 		slideChangeTransitionStart: function(){
	// 			wow2 = new WOW({
	// 			   boxClass: 'topA',
	// 				animateClass: 'animated',
	// 				offset: 0,
	// 				mobile: false,
	// 				live: true
	// 			 });
	// 			 wow2.init();
	// 		},
	// 		slideChangeTransitionEnd: function(){
	// 		},
	// 	}
	// });
	//历程轮播
	var swiperHis = new Swiper('.his-swiper',{
		autoplay:false,
		speed:1000,
		autoplayDisableOnInteraction : false,
		loop:true,
		on:{
			slideChangeTransitionStart: function(){
				var real = this.realIndex;
				$(".his-nav ul li").eq(real).addClass("on").siblings().removeClass("on");
			},
			slideChangeTransitionEnd: function(){
				
			},
		}
	});
	var swiperTwo = new Swiper('.two-swiper',{
		autoplay:5000,
		speed:1000,
		autoplayDisableOnInteraction : false,
		loop:true,
		slidesPerView:4,
		spaceBetween:'1%',
	});
	var swiperOne = new Swiper('.one-swiper',{
		autoplay:5000,
		speed:1000,
		autoplayDisableOnInteraction : false,
		loop:true,
		slidesPerView:4,
		spaceBetween:'1%',
	});
	
	$(".his-nav ul li").mouseenter(function(){
		var index = $(this).index();
		$(this).addClass("on").siblings().removeClass("on");
		swiperHis.slideToLoop(index,1000,false);
	})
	$('.contact_box .contact1').hover(function () {
	
			$(this).find('.icon').css('background-image','url(/template/pc/skin/images/icon_dianhua.png)');
	
		}, function () {
	
			$(this).find('.icon').css('background-image', 'url(/template/pc/skin/images/icon_dianhua2.png)');
	
		});
	
		$('.contact_box .contact2').hover(function () {
	
			$(this).find('.icon').css('background-image','url(/template/pc/skin/images/icon_chat2.png)');
	
		}, function () {
	
			$(this).find('.icon').css('background-image', 'url(/template/pc/skin/images/icon_chat.png)');
	
		});
	
		$('.contact_box .contact3').hover(function () {
	
			$(this).find('.icon').css('background-image','url(/template/pc/skin/images/icon_qq3.png)');
	
		}, function () {
	
			$(this).find('.icon').css('background-image', 'url(/template/pc/skin/images/icon_qq2.png)');
	
		});
	
		$('.contact_box .contact4').hover(function () {
	
			$(this).find('.icon').css('background-image','url(/template/pc/skin/images/icon_ewm2.png)');
	
		}, function () {
	
			$(this).find('.icon').css('background-image', 'url(/template/pc/skin/images/icon_ewm.png)');
	
		});
	
		$('.contact_box .contact5').hover(function () {
	
			$(this).find('.icon').css('background-image','url(/template/pc/skin/images/icon_top2.png)');
	
		}, function () {
	
			$(this).find('.icon').css('background-image', 'url(/template/pc/skin/images/icon_top.png)');
	
		});
	
		
	
		//点击按钮时判断 百度商桥代码中的“我要咨询”按钮的元素是否存在，存在的话就执行一次点击事件
	
	    // $(".contact_box .contact2").click(function(event) {
	
	            // if ($('#nb_invite_ok').length > 0) {
	
	            //     $('#nb_invite_ok').click();
	
	            // }
	            // window.open("http://p.qiao.baidu.com/cps/chat?siteId=15671634&userId=1861427&siteToken=52e1ba87b6184b210e56c93e1c98b9a7");
	
	    // });

});

function pageBox() {
	w_width = jQuery(window).width();
	w_height = jQuery(window).height();

	//设置移动端参数
	if (w_width <= 950) {
		isMobile = true;
	} else if (w_width > 950) {
		isMobile = false;
	};
	//区分手机端和平板
	if (w_width <= 800) {
		mobile = true;
	} else if (w_width > 800) {
		mobile = false;
	};
}

$(function() {
	pageBox();
});


