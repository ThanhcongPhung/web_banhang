<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$ten_menu=trim($_POST['ten']);
	$ten_menu=str_replace("'","&#39;",$ten_menu);
	$id=$_GET['id'];
	if($ten_menu!="")
	{
		$tv="
		UPDATE menu_doc SET 
		ten = '$ten_menu'
		WHERE id =$id;
		";
		pg_query($conn,$tv);
		echo "<script type='text/javascript'>alert('Đã sửa danh mục'); window.history.back();</script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Chưa điền tên danh mục');</script>";
	}
?>