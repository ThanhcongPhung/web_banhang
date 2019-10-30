<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$id=$_GET['id'];
	
	$tv="select * from san_pham where id='$id' ";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);

	$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
	if(is_file($link_hinh))	
	{
		unlink($link_hinh);
	}
	
	$tv="DELETE FROM san_pham WHERE id = $id ";
	pg_query($conn,$tv);
	echo "<script type='text/javascript'>alert('Đã xóa sản phẩm ".$tv_2['ten']."'); window.location.href='?thamso=quan_ly_san_pham';</script>";
?>