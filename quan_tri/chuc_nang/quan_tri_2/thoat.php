<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(session_destroy()) {
	    header("location: index.php");
	}
?>
