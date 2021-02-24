<?php /* EL PSY CONGROO */    	 			 	 
require '../../../../zb_system/function/c_system_base.php';     				   
require '../../../../zb_system/function/c_system_admin.php';     	  				
    		  		  
$zbp->Load();    	 				  
$action='root';     		   	 
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}      	 	   
if (!$zbp->CheckPlugin('Lucky')) {$zbp->ShowError(48);die();}     	 		  	
           	
list($navigation, $title) = Lucky_ConfigNav();      	 	 		
if ($title) $blogtitle = $title;    	 	    	
          	 
require $blogpath . 'zb_system/admin/admin_header.php';    						  
require $blogpath . 'zb_system/admin/admin_top.php';    		  			 
    	    	  
?>

<link href="../style/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../style/fonts/font-awesome.min.css" rel="stylesheet"/>
<link href="../style/static/style/other.css" rel="stylesheet">
<script src="<?php echo $zbp -> host; ?>zb_system/script/jquery-2.2.4.min.js"></script>
<script src="../style/static/bootstrap/js/bootstrap.min.js"></script>

<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
                <?php echo $navigation; ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo $zbp->host ?>zb_users/plugin/AppCentre/main.php?auth=1423304f-3af2-49d1-b18a-5979aa433a33" target="_blank"><i class="fa fa-star"></i> 更多作品</a></li>
				<li><a href="https://www.songhaifeng.com/ZBlog/42.html" target="_blank"><i class="fa fa-globe"></i> 主题简介</a></li>
				<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=284204003&amp;site=qq&amp;menu=yes" target="_blank"><i class="fa fa-thumbs-up"></i> 联系作者</a></li>
			</ul>
		</div>
	</nav>
	<div class="row">
		<div class="col-lg-12">