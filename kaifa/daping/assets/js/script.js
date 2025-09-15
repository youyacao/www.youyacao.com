// 主脚本文件
$(document).ready(function () {
    
    // 移动端菜单切换功能
    $('[data-toggle="toggle-nav"]').on('click', function () {
        $(this).closest('nav').find($(this).attr('data-target')).toggleClass('hidden');
        return false;
    });

    // 加载Feather图标
    if (typeof feather !== 'undefined') {
        feather.replace();
    }

    // 初始化第一个轮播图
    if (typeof $.fn.slick !== 'undefined' && $('#slider-1').length > 0) {
        $('#slider-1').slick({
            infinite: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });
    }

    // 初始化第二个轮播图
    if (typeof $.fn.slick !== 'undefined' && $('#slider-2').length > 0) {
        $('#slider-2').slick({
            dots: true,
            arrows: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            customPaging: function (slider, i) {
                return '<div class="bg-white br-round w-1 h-1 opacity-50 mt-5" id=' + i + '> </div>'
            },
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    }

    // 确保隐藏元素的可见性处理
    $('.hidden').each(function() {
        if ($(window).width() > 768 && $(this).hasClass('md-hidden')) {
            $(this).removeClass('hidden');
        }
    });

    // 窗口大小改变时的响应式处理
    $(window).on('resize', function() {
        $('.md-hidden').each(function() {
            if ($(window).width() > 768) {
                $(this).removeClass('hidden');
            } else {
                $(this).addClass('hidden');
            }
        });
    });
});