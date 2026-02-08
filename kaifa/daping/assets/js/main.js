// 优化后的主脚本文件 - 解决菜单显示和响应式问题
(function() {
    'use strict';
    
    // 等待DOM加载完成
    document.addEventListener('DOMContentLoaded', function() {
        // 移动端菜单切换功能 - 优化版本，同时支持jQuery和原生JavaScript
        function initMenuToggle() {
            // 获取菜单按钮
            const menuToggle = document.querySelector('[data-toggle="toggle-nav"]');
            
            if (menuToggle) {
                // 菜单按钮点击事件处理
                menuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    // 使用data-target属性值来定位目标元素，提高代码通用性
                    const targetSelector = this.getAttribute('data-target');
                    const navItems = document.querySelector(targetSelector);
                    
                    if (navItems) {
                        // 切换hidden类
                        navItems.classList.toggle('hidden');
                    } else {
                        console.error('Target element not found:', targetSelector);
                    }
                });
                
                // 点击菜单项后自动收起菜单（仅在移动端）
                const navLinks = document.querySelectorAll('#nav-items a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (window.innerWidth <= 768) {
                            navItems.classList.add('hidden');
                        }
                    });
                });
            }
        }
        
        // 响应式处理 - 优化版本，确保在各种屏幕尺寸下菜单正确显示/隐藏
        function handleResponsive() {
            const navItems = document.querySelector('#nav-items');
            if (!navItems) return;
            
            // 获取当前窗口宽度
            const isMobile = window.innerWidth <= 768;
            
            // 根据屏幕尺寸设置菜单初始状态
            if (isMobile) {
                // 移动端默认隐藏菜单
                navItems.classList.add('hidden');
            } else {
                // 桌面端默认显示菜单
                navItems.classList.remove('hidden');
            }
        }
        
        // 初始化轮播图
        function initSliders() {
            // 检查jQuery和slick是否可用
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.slick !== 'undefined') {
                const $ = jQuery;
                
                // 初始化第一个轮播图（如果存在）
                if ($('#slider-1').length > 0) {
                    try {
                        $('#slider-1').slick({
                            infinite: true,
                            prevArrow: $('.prev'),
                            nextArrow: $('.next'),
                        });
                    } catch (e) {
                        console.log('Slider 1 initialization error:', e);
                    }
                }
                
                // 初始化第二个轮播图（如果存在）
                if ($('#slider-2').length > 0) {
                    try {
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
                    } catch (e) {
                        console.log('Slider 2 initialization error:', e);
                    }
                }
            }
        }
        
        // 初始化Feather图标
        function initFeatherIcons() {
            if (typeof feather !== 'undefined') {
                try {
                    feather.replace();
                } catch (e) {
                    console.log('Feather icons initialization error:', e);
                }
            }
        }
        
        // 简单的平滑滚动实现
        function initSmoothScroll() {
            // 直接排除带有data-toggle属性的元素，避免与菜单切换冲突
            document.querySelectorAll('a[href^="#"]:not([data-toggle])').forEach(anchor => {
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
        }
        
        // 执行所有初始化函数
        initMenuToggle();
        handleResponsive();
        initSliders();
        initFeatherIcons();
        initSmoothScroll();
        
        // 窗口大小改变时重新处理响应式布局
        window.addEventListener('resize', handleResponsive);
    });
})();