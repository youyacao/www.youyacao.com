(function (doc, win,maxWidth) {
	var param = null;
	var docEl = doc.documentElement,
		resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
		recalc = function () {
			var clientWidth = docEl.clientWidth > 1920 ? 1920 : docEl.clientWidth;
			if (!clientWidth) return;
			if(clientWidth <= maxWidth){
				window.responseSize = 32;
				docEl.style.fontSize = responseSize + 'px';
			}else{

				window.responseSize = 100 * (clientWidth / 1920);
				docEl.style.fontSize = responseSize + 'px';
			}
		};
	if (!doc.addEventListener) return;
	recalc();
	win.addEventListener(resizeEvt, recalc, false);
	doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window, 600);