<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$id=$_GET['id'];
	$tv="DELETE FROM khach_hang WHERE id = $id ";
	pg_query($conn,$tv);
	echo "<script type='text/javascript'>alert('Đã xóa khách hàng');</script>";
?>