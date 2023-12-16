function debounce(fn,delay){
    let timeout = null;
    return function() {
        clearTimeout(timeout);
        timeout = setTimeout(_ => {
            fn.call(this, arguments);
        }, delay);
    };
}
function LazyLoad(selector,success){
    this.el = document.querySelectorAll(selector);
    this.length = this.el.length;
    this.step = function (index){
        if(index >= this.length)return success();
        let type = this.el[index].nodeName.toLowerCase() === 'img',
            src = this.el[index].getAttribute('data-src');
        let callback = type ? ()=>{
            this.el[index].src = src;
            this.step(++index);
        } : ()=>{
            this.el[index].style.backgroundImage = `url(${src})`;
            this.step(++index);
        }
        this.load(src,callback)
    };
    this.load = function (src,callback){
        let img = new Image();
        img.onload = callback;
        img.src = src
    };
    this.step(0);
}
function openKefu(e){
	window.open('https://affim.baidu.com/unique_1861427/chat?siteId=18883997&userId=1861427&siteToken=a859f4d868378166e97527db5cef4c09','_blank');
}