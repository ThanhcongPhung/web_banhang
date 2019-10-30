<?php 
	include('ket_noi.php');
	$user_name = $_SESSION['login_user'];
	$result=pg_query($conn,"SELECT * FROM khach_hang WHERE ten_khach_hang = '$user_name'");
	if (!$result) {
 		 echo "An error occurred.\n";
  		exit;
		}
	else {
		$arr=pg_fetch_array($result);
		// echo $arr["ten_khach_hang"];
	}
	$get_avatar = pg_fetch_array(pg_query($conn,"select * from khach_hang where ten_khach_hang='$user_name'"));
 ?>


<head>
	<link rel="stylesheet" type="text/css" href="giao_dien/register_form.css">
	<link rel="stylesheet" type="text/css" href="chuc_nang/quan_li_user/myuser.css">
</head>
<h1>THÔNG TIN TÀI KHOẢN</h1>
<div class="wrapper">

	<div class="row">
		<div class="col span-1-of-3" style="text-align: center;">
			<img src="hinh_anh/avatar_user/<?php echo $get_avatar['anh_dai_dien'] ?> " style="width: 250px; border-radius: 50%;">
		</div>
		<div class="col span-2-of-3">
			<div>
				<?php 
					echo "<div class ='information'><h5>Tên khách hàng : ".$_SESSION['login_user']."</h5></div>";
					// echo "<div class ='information'><h5>Mật khẩu : ".$arr["mat_khau"]."</h5></div>";
					echo "<div class ='information'><h5>Email : ".$arr["email"]."</h5></div>";
					echo "<div class ='information'><h5>Địa chỉ : ".$arr["dia_chi"]."</h5></div>";
					echo "<div class ='information' style='margin-bottom: 50px;'><h5>Điện thoại : ".$arr["dien_thoai"]."</h5></div>";
					echo "<a class='btn btn-success' href='?thamso=update' role='button'>Cập nhật thông tin</a>";
				 ?>
			</div>
		</div>
	</div>
</div>