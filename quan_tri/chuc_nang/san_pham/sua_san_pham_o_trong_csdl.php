<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$ten=trim($_POST['ten']);
	$ten=str_replace("'","&#39;",$ten);
	$gia=trim($_POST['gia']);
	$trang_chu=$_POST['trang_chu'];
	$noi_bat=$_POST['noi_bat'];
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&#39;",$noi_dung);
	$ten_file_anh_tai_len=$_FILES['hinh_anh']['name'];
	if($ten_file_anh_tai_len!="")
	{
		$ten_file_anh=$ten_file_anh_tai_len;
	}
	else 
	{
		$ten_file_anh=$_POST['ten_anh'];
	}
	$id=$_GET['id'];
	if($ten!="")
	{
		$tv_k="select count(*) from san_pham where hinh_anh='$ten_file_anh' ";
		$tv_k_1=pg_query($conn,$tv_k);
		$tv_k_2=pg_fetch_array($tv_k_1);
		if($tv_k_2[0]==0 or $ten_file_anh_tai_len=="")
		{
			$tv="
			UPDATE san_pham SET 
			ten = '$ten',
			gia = '$gia',
			hinh_anh = '$ten_file_anh',
			noi_dung = '$noi_dung',
			trang_chu = '$trang_chu',
			noi_bat = '$noi_bat' 
			WHERE id =$id;
			";
			pg_query($conn,$tv);
			
			if($ten_file_anh_tai_len!="")
			{				
				$duong_dan_anh="../hinh_anh/san_pham/".$ten_file_anh_tai_len;
				move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
				$duong_dan_anh_cu="../hinh_anh/san_pham/".$_POST['ten_anh'];
				unlink($duong_dan_anh_cu);
			}

			echo "<script type='text/javascript'>alert('Đã sửa thông tin sản phẩm'); window.history.back();</script>";
				
		}
		else 
		{
			echo "<script type='text/javascript'>alert('Hình ảnh bị trùng tên');</script>";
		}
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Chưa điền tên sản phẩm');</script>";
	}
?>