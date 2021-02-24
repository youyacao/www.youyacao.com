
var st;
document.addEventListener('visibilitychange',function(){
if(document.hidden){
document.title="";
clearTimeout(st);
console.log('hide');
}else{
document.title=OriginTitile;
console.log('show');
st=setTimeout(function(){
document.title=OriginTitile;
},4000);
console.log('endChange=');
}
});