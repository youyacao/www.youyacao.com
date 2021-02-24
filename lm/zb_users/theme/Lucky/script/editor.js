$(document).ready(function() {
    editor_api.editor.content.obj.ready(function() {
        var str = '<link rel="stylesheet" rev="stylesheet" href="' + bloghost + 'zb_users/theme/Lucky/script/editor.css" type="text/css" media="all"/>';
        for (var i = 0; i < window.frames.length; i++) {
            $(window.frames[i].document.head).append(str);
        }
    });
});
var Lucky_ueditor_icon = [];
Lucky_ueditor_icon['蓝色框'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -0 0 no-repeat !important;";
Lucky_ueditor_icon['绿色框'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -20px 0 no-repeat !important;";
Lucky_ueditor_icon['红色框'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -40px 0 no-repeat !important;";
Lucky_ueditor_icon['黄色框'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -60px 0 no-repeat !important;";
Lucky_ueditor_icon['标题'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -80px 0 no-repeat !important;";
Lucky_ueditor_icon['h2标签'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') 0px -20px no-repeat !important;";
Lucky_ueditor_icon['h3标签'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -20px -20px no-repeat !important;";
Lucky_ueditor_icon['下载'] = "background: #ecf2d6 url('" + bloghost + "zb_users/theme/Lucky/style/image/admin.png') -40px -20px no-repeat !important;";
UE.registerUI('蓝色框 绿色框 红色框 黄色框 标题 h2标签 h3标签 下载',
function(editor, uiname) {
    var btn = new UE.ui.Button({
        name: uiname,
        title: uiname,
        cssRules: Lucky_ueditor_icon[uiname],
        onclick: function() {
            var range = editor.selection.getRange();
            range.select();
            var txt = editor.selection.getText();
            if (txt == null || txt == "") {
                txt = "此处应有文本";
            }
            if (uiname == "蓝色框") {
                editor.execCommand('insertHtml', '<p class="code_blue">' + txt + '</p>');
            } else if (uiname == "绿色框") {
                editor.execCommand('insertHtml', '<p class="code_green">' + txt + '</p>');
            } else if (uiname == "红色框") {
                editor.execCommand('insertHtml', '<p class="code_red">' + txt + '</p>');
            } else if (uiname == "黄色框") {
                editor.execCommand('insertHtml', '<p class="code_yello">' + txt + '</p>');
            } else if (uiname == "标题") {
                editor.execCommand('insertHtml', '<p class="code_pt_biaoti">' + txt + '</p>');
            } else if (uiname == "h2标签") {
                editor.execCommand('insertHtml', '<h2><p class="code_h2">' + txt + '</p></h2>');
            } else if (uiname == "h3标签") {
                editor.execCommand('insertHtml', '<h3><p class="code_h3">' + txt + '</p></h3>');
            } else if (uiname == "下载") {
                editor.execCommand('insertHtml', '<blockquote><p class="code_download">' + txt + '</p></blockquote>');
            } else {
                editor.execCommand('insertHtml', '<p class="' + uiname + '">' + txt + '</p>');
            }
        }
    });
    return btn;
});
Lucky_buttons = ['蓝色框', '绿色框', '红色框', '黄色框', '标题', 'h2标签', 'h3标签', '下载'];
var i = 0,
len = Lucky_buttons.length;
for (; i < len; i++) {
    window.UEDITOR_CONFIG['toolbars'][0].push(Lucky_buttons[i]);
}