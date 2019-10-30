<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$tv="select * from thong_tin_quan_tri where id='1' ";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$ky_danh=$_POST['ky_danh'];
	$mat_khau=$tv_2['mat_khau'];

	$check_mat_khau_tu_form = $_POST['check_mat_khau'];
	$mat_khau_tu_form=$_POST['mat_khau'];
	if ($check_mat_khau_tu_form != $mat_khau_tu_form) {
		echo "<script type='text/javascript'>alert('Nhập mật khẩu không khớp'); window.history.back();</script>";
	}

	if($mat_khau_tu_form!="khong_doi")
	{
		$mat_khau=md5($mat_khau_tu_form);
		$mat_khau=md5($mat_khau);
	}

	$tv="
	UPDATE thong_tin_quan_tri SET 
	ky_danh = '$ky_danh',
	mat_khau = '$mat_khau' 
	WHERE id =1;
	";
	pg_query($conn,$tv);
	
	$_SESSION['ky_danh']=$ky_danh;
	$_SESSION['mat_khau']=$mat_khau;
	
	echo "<script type='text/javascript'>alert('Đổi thông tin đăng nhập thành công'); window.history.back();</script>";;			
	
?>