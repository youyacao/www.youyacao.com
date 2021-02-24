var container2 = document.createElement('script');
$(container2).attr('type','text/plain').attr('id','img_editor');
$("body").append(container2);
_editor = UE.getEditor('img_editor');
_editor.ready(function () {
    _editor.hide();
    $(".uploadimg strong").click(function(){        
        object = $(this).parent().find('.uplod_img');
        _editor.getDialog("insertimage").open();
        _editor.addListener('beforeInsertImage', function (t, arg) {
            object.attr("value", arg[0].src);
        });
    });
});