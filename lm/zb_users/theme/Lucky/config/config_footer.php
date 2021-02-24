        </div>
	</div>
</div>
<script type="text/javascript">
    $(function () {
        // 弹出层
        $(".popover-main a[data-toggle=popover]").popover({ container: 'body', trigger: 'focus', placement: 'right', html: true, animation:true})
        .on("mouseenter", function () {
            var _this = this;
            $(this).popover("show");
            $(".popover").on("mouseleave", function () {
                $(_this).popover('hide'); 
            });
        })
        .on("mouseleave", function () {
            var _this = this;
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        });

        //导航高亮
        var currentUrl = document.location;
        $(".navbar .navbar-nav a").each(function() {
            if (this.href == currentUrl.toString().split("php")[0]+'php') {
                $(this).parent("li").addClass("active");
            }
        });
        //关闭提示框
        setTimeout("$('.alert').slideUp()", 1000);
    });
	ActiveTopMenu("topmenu_Lucky");
</script> 
<?php /* EL PSY CONGROO */
	require $blogpath . 'zb_system/admin/admin_footer.php';       			 	
	RunTime();      	 				
?>