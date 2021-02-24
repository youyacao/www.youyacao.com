(function () {
  zbp.cookie.set("geeteston", 1, 1);
  zbp.cookie.set("geetestchallenge", "", 1);
  zbp.cookie.set("geetestvalidate", "", 1);
  zbp.cookie.set("geetestseccode", "", 1);
  if ($('#geetest').length === 0 || !$('#geetest').is(":empty")){
    return;
  }
  $.ajax({
    url: bloghosts() + "zb_users/theme/Lucky/initialize.php?act=geetest&rnd=" + (new Date()).getTime(),
    type: "get",
    dataType: "json",
    success: function (data) {
      initGeetest({
        gt: data.gt,
        challenge: data.challenge,
        offline: !data.success,
        product: "float",
        new_captcha: data.new_captcha
      }, function (captchaObj) {
        captchaObj.appendTo('#geetest');
        if (captchaObj.reset) {
          captchaObj.refresh = captchaObj.reset;
        }
        zbp.plugin.on("comment.postsuccess", "Lucky", function () {
          captchaObj.refresh();
        });
        captchaObj.onSuccess(function () {
          var validate = captchaObj.getValidate();
          zbp.cookie.set("geetestchallenge", validate.geetest_challenge, 1);
          zbp.cookie.set("geetestvalidate", validate.geetest_validate, 1);
          zbp.cookie.set("geetestseccode", validate.geetest_seccode, 1);
          zbp.cookie.set("geeteston", 0, 1);
          var btn = $('#comment-btn')
          btn.removeAttr('disabled')
          btn.val('提交评论')
        });
      });
    }
  });
})();