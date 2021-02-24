<?php /* EL PSY CONGROO */    		 	  		
require 'config_header.php';     					  
    		 			  
if (GetVars('signal', 'GET') == 'danger' || GetVars('signal', 'GET') == 'success') {    	 	     
    $signal = GetVars('signal', 'GET');    	  	 	 	
} else {    					  	
	Redirect('./operate.php?signal=danger&operate=true');          		
}    			  			
    	  			 	
if (GetVars('operate', 'GET') == 'true' || GetVars('operate', 'GET') == 'false') {    		 	 	 	
    $operate = GetVars('signal', 'GET');    	   		 	
} else {    		 	 	  
	Redirect('./operate.php?signal=danger&operate=true');    		 				 
}    	 	   		
       	   	
Lucky_Tips($signal, $operate);     						 
     				 		
?>

<script type="text/javascript">
    setTimeout("window.location.href='slides.php'", 1000);
</script>

<?php
require 'config_footer.php';      		 	 	
?>