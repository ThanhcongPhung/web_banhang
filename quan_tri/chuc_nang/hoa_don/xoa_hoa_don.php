<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$id=$_GET['id'];
	$tv="DELETE FROM hoa_don WHERE id = $id ";
	pg_query($conn,$tv);
	echo "<script type='text/javascript'>alert('Đã xóa hóa đơn');</script>";
?>
