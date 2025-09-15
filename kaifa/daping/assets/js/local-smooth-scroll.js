// 简单的本地平滑滚动实现
(function() {
    'use strict';
    
    // 为所有带有href属性且包含#的链接添加点击事件
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            // 获取目标元素的ID
            const targetId = this.getAttribute('href');
            
            // 如果href只是一个#或者目标元素不存在，则不执行任何操作
            if (targetId === '#' || !document.querySelector(targetId)) {
                return;
            }
            
            // 获取目标元素
            const targetElement = document.querySelector(targetId);
            
            // 计算滚动到目标元素的位置
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
            
            // 设置滚动动画持续时间
            const duration = 800; // 800毫秒
            const startTime = performance.now();
            
            // 滚动动画函数
            function scrollAnimation(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / duration, 1);
                
                // 使用缓动函数使滚动更加平滑
                const easeProgress = progress < 0.5 ? 
                    4 * progress * progress * progress : 
                    1 - Math.pow(-2 * progress + 2, 3) / 2;
                
                // 执行滚动
                window.scrollTo(0, targetPosition * easeProgress);
                
                // 如果动画未完成，则继续请求下一帧
                if (elapsedTime < duration) {
                    requestAnimationFrame(scrollAnimation);
                }
            }
            
            // 开始滚动动画
            requestAnimationFrame(scrollAnimation);
        });
    });
})();