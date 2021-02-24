<?php /* EL PSY CONGROO */     	  	 	 
require '../../../../zb_system/function/c_system_base.php';      		    
require $blogpath . 'zb_users/theme/hnysweb/admin/Admin_header.php';    	 	 	 		
?>
<div class="SubMenu">
    <?php hnysweb_SubMenu(5);?>
</div>
<link href="../source/colpick.css" rel="stylesheet" type="text/css"/>
<script src="../source/colpick.js" type="text/javascript"></script>
<div id="divMain2">
    <?php
    if ( count( $_POST ) > 0 ) {     		 		  
        if ( function_exists( 'CheckIsRefererValid' ) )CheckIsRefererValid();    	 		   	
        if ( GetVars( 'coloron' ) ) { //开关         		 	 
            $zbp->Config( 'hnysweb' )->coloron = $_POST[ 'coloron' ];    			   	 
        } else {    			  			
            $zbp->Config( 'hnysweb' )->coloron = '';    				   	
        }    	     		
        $zbp->Config( 'hnysweb' )->contentsize = $_POST[ 'contentsize' ];     				 	 
        $zbp->Config( 'hnysweb' )->cl1 = $_POST[ 'cl1' ];    	   				
        $zbp->Config( 'hnysweb' )->cl2 = $_POST[ 'cl2' ];      	     
        $zbp->Config( 'hnysweb' )->cl3 = $_POST[ 'cl3' ];    		 	  		
           		   			
        //导航栏和按钮     	  		 	
        $zbp->Config( 'hnysweb' )->cl4 = $_POST[ 'cl4' ];    	 			 		
        $zbp->Config( 'hnysweb' )->cl5 = $_POST[ 'cl5' ];     		   	 
        //网址列表链接    		 	  		
        $zbp->Config( 'hnysweb' )->cl6 = $_POST[ 'cl6' ];     	 	 			
        $zbp->Config( 'hnysweb' )->cl7 = $_POST[ 'cl7' ];    		  		 	
        //文章列表链接    		  	 		
        $zbp->Config( 'hnysweb' )->cl8 = $_POST[ 'cl8' ];    								
        $zbp->Config( 'hnysweb' )->cl9 = $_POST[ 'cl9' ];      			 	 
        //关键词颜色        	 	 
             	  	  
        $hnysweb_css = @file_get_contents( $zbp->path . 'zb_users/theme/hnysweb/style/style.min.css' );    	    	 	
        //网页整体         			
        $hnysweb_css = str_replace( "#f5fffa", $zbp->Config( 'hnysweb' )->cl1, $hnysweb_css );    		  	 	 
        $hnysweb_css = str_replace( "#fbfbfb", $zbp->Config( 'hnysweb' )->cl2, $hnysweb_css );      						
        $hnysweb_css = str_replace( "#d4e6dd", $zbp->Config( 'hnysweb' )->cl3, $hnysweb_css );     	 			 	
        //导航栏和按钮颜色    		 	 	 	
        $hnysweb_css = str_replace( "#39ac73", $zbp->Config( 'hnysweb' )->cl4, $hnysweb_css );     		  	 	
        $hnysweb_css = str_replace( "#40bf80", $zbp->Config( 'hnysweb' )->cl5, $hnysweb_css );    	   			 
        //网址列表     		  	 	
        $hnysweb_css = str_replace( "#3e54ab", $zbp->Config( 'hnysweb' )->cl6, $hnysweb_css );    					   
        $hnysweb_css = str_replace( "#9ad4b7", $zbp->Config( 'hnysweb' )->cl7, $hnysweb_css );    		 	  	 
        //文章      	 	 	 
        $hnysweb_css = str_replace( "#333333", $zbp->Config( 'hnysweb' )->cl8, $hnysweb_css );    	   	  	
        $hnysweb_css = str_replace( "#6bc7a8", $zbp->Config( 'hnysweb' )->cl9, $hnysweb_css );    	      	
             	 	   
        @file_put_contents( $zbp->path . 'zb_users/theme/hnysweb/style/style.ok.css', $hnysweb_css );    		      
        $zbp->SaveConfig( 'hnysweb' );    		      
        $zbp->ShowHint( 'good' );     	 	 	 	
    }      		    
    ?>
    <script>
        $( function () {
            //Color2样式
            $( ".colorint input" ).each( function () {
                $( this ).css( 'border-color', $( this ).val() );
            } );
            $( '.colorint input' ).colpick( {
                layout: 'hex',
                submit: 0,
                onChange: function ( hsb, hex, rgb, el, bySetColor ) {
                    $( el ).css( 'border-color', '#' + hex );
                    if ( !bySetColor ) $( el ).val( '#' + hex );
                }
            } ).keyup( function () {
                $( this ).colpickSetColor( this.value );
            } );
        } );
    </script>
    <form id="form3" name="form3" method="post">
        <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">

            <tr>
                <td width="30%"><b>主题配色开关</b>
                </td>
                <td>
                    <p>
                        <input type="text" id="coloron" name="coloron" class="checkbox" value="<?php echo $zbp->Config('hnysweb')->coloron;?>"/> &nbsp;&nbsp;&nbsp;开启后使用自定义的主题配色
                    </p>
                </td>
            </tr>
            <tr>
                <td><b>网站整体</b>
                </td>
                <td>
                    <div class="colorint lr30"><span>1、网站背景颜色</span>
                        <input type="text" name="cl1" value="<?php echo $zbp->Config('hnysweb')->cl1;?>">
                        <div id="picker"></div>
                    </div><div class="colorint lr30"><span>2、网站底部背景颜色</span>
                        <input type="text" name="cl2" value="<?php echo $zbp->Config('hnysweb')->cl2;?>">
                        <div id="picker"></div>
                    </div><div class="colorint"><span>3、版块阴影颜色</span>
                        <input type="text" name="cl3" value="<?php echo $zbp->Config('hnysweb')->cl3;?>">
                        <div id="picker"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><b>网站导航栏</b>
                </td>
                <td>
                    <div class="colorint lr30"><span>4、导航栏背景和按钮颜色</span>
                        <input type="text" name="cl4" value="<?php echo $zbp->Config('hnysweb')->cl4;?>">
                        <div id="picker"></div>
                    </div> <div class="colorint"><span>5、触发导航栏按钮颜色</span>
                        <input type="text" name="cl5" value="<?php echo $zbp->Config('hnysweb')->cl5;?>">
                        <div id="picker"></div>
                    </div>
                </td>
            </tr>
             <tr>
                <td><b>网站列表</b>
                </td>
                <td>
                    <div class="colorint lr30"><span>6、网址和文章列表标题颜色</span>
                        <input type="text" name="cl6" value="<?php echo $zbp->Config('hnysweb')->cl6;?>">
                        <div id="picker"></div>
                    </div> <div class="colorint"><span>7、网址列表中访问网站按钮颜色</span>
                        <input type="text" name="cl7" value="<?php echo $zbp->Config('hnysweb')->cl7;?>">
                        <div id="picker"></div>
                    </div>
                </td>
            </tr>
             <tr>
                <td><b>网站文章</b>
                </td>
                <td>
                     <div class="colorint lr30"><span>8、文章字体颜色</span>
                        <input type="text" name="cl8" value="<?php echo $zbp->Config('hnysweb')->cl8;?>">
                        <div id="picker"></div>
                    </div> <div class="colorint lr30"><span>9、文章底部关键词颜色</span>
                        <input type="text" name="cl9" value="<?php echo $zbp->Config('hnysweb')->cl9;?>">
                        <div id="picker"></div>
                    </div><span>10、正文字体大小</span>、
                        <input type="text" name="contentsize" style="width:100px;" value="<?php echo $zbp->Config('hnysweb')->contentsize;?>">
                </td>
            </tr>
             
        </table>
        <br/>
        <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
        <input name="" type="Submit" class="button" value="保存"/>
    </form>
</div>
</div>
<script type="text/javascript">
    ActiveTopMenu( "topmenu_hnysweb" );
</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';    			 				
RunTime();    				    
?>