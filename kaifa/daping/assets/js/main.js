// 替代原script.js的主脚本文件
(function() {
    'use strict';
    
    // 等待DOM加载完成
    document.addEventListener('DOMContentLoaded', function() {
        // 如果存在jQuery，则使用jQuery功能
        if (typeof $ !== 'undefined') {
            // 移动端菜单切换功能
            $('[data-toggle="toggle-nav"]').on('click', function(e) {
                e.preventDefault();
                $(this).closest('nav').find($(this).attr('data-target')).toggleClass('hidden');
            });
            
            // 初始化轮播图（如果slick插件存在且元素存在）
            if (typeof $.fn.slick !== 'undefined') {
                if ($('#slider-1').length > 0) {
                    $('#slider-1').slick({
                        infinite: true,
                        prevArrow: $('.prev'),
                        nextArrow: $('.next'),
                    });
                }
                
                if ($('#slider-2').length > 0) {
                    $('#slider-2').slick({
                        dots: true,
                        arrows: false,
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        centerMode: true,
                        customPaging: function(slider, i) {
                            return '<div class="bg-white br-round w-1 h-1 opacity-50 mt-5" id=' + i + '> </div>';
                        },
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }]
                    });
                }
            }
            
            // 响应式处理
            function handleResponsive() {
                var isMobile = $(window).width() <= 768;
                $('.md-hidden').toggleClass('hidden', isMobile);
            }
            
            // 初始调用和窗口调整时调用
            handleResponsive();
            $(window).on('resize', handleResponsive);
        }
        
        // 加载Feather图标（如果存在）
        if (typeof feather !== 'undefined') {
            feather.replace();
        }
        
        // 简单的平滑滚动实现（不依赖外部库）
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#' || !document.querySelector(targetId)) {
                    return;
                }
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
})();