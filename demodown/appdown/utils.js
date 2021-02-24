var nav = {
	nowNavInfo: '',
	setLocal: false
}

var utils = {        
    setStorage: function(name,value){
        window.localStorage.setItem(name,value)
    },
    getStorage: function(name){
        return window.localStorage.getItem(name)
    },
    getNavigator: function(){
    	return navigator.appCodeName + navigator.appName + navigator.appVersion + navigator.connection + navigator.mimeTypes + navigator.oscpu + navigator.platform + navigator.plugins + navigator.userAgent + navigator.appMinorVersion;
    },
    addTrack: function(){
    	var nowNavInfo = this.getNavigator();
    	var oldNavInfo = utils.getStorage('navigator');
    	console.log(nowNavInfo)
    	console.log(oldNavInfo)
    	if(oldNavInfo != nowNavInfo){
    		nav.nowNavInfo = nowNavInfo;    		
    		return true;
    	}else{
    		$('.hook-track').removeClass('track');
    		$('.hook-track').removeAttr('trackname');
    		return false;
    	}
    }
};

nav.setLocal = utils.addTrack();
$(function(){
	$('.hook-track').click(function(){
		if(nav.setLocal){
			utils.setStorage('navigator',nav.nowNavInfo);
			nav.setLocal = false;
			$(this).removeClass('track');
			$(this).removeAttr('trackname');
		}
	})

})
