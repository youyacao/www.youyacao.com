/* 为输入框placeholder显示文字 */
function isPlaceholder(){
    var input = document.createElement('input');
    return 'placeholder' in input;
}
if (!isPlaceholder()) {
    $(document).ready(function() {
        if(!isPlaceholder()){
            $("input").not("input[type='password']").each(
				function(){
					if($(this).val()=="" && $(this).attr("placeholder")!=""){
						$(this).val($(this).attr("placeholder"));
						$(this).focus(function(){
							if($(this).val()==$(this).attr("placeholder")) $(this).val("");
						});
						$(this).blur(function(){
							if($(this).val()=="") $(this).val($(this).attr("placeholder"));
						});
					}
				}
			);
        }
    });
}