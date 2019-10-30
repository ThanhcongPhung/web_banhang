<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$id=$_GET['id'];
	$tv="select count(*) from san_pham where thuoc_menu='$id' ";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$name = pg_fetch_array(pg_query($conn,"select * from menu_doc where id='$id'"));
	if($tv_2[0]==0)
	{
		$truy_van_xoa="DELETE FROM menu_doc WHERE id = $id ";
		pg_query($conn,$truy_van_xoa);
		echo "<script type='text/javascript'>alert('Đã xóa danh mục ".$name['ten']."'); window.history.back();</script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Menu vẫn còn dữ liệu. Không thể xóa'); window.history.back();</script>";
	}
?>