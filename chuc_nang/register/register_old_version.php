<?php
	include("ket_noi.php");	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$newusername = $_POST['username'];
		$newpassword = $_POST['password'];
		$repassword = $_POST['repassword'];

		$lenuser = strlen($_POST['username']);
		$lenpass = strlen($_POST['password']);

		$tv_count = pg_query($conn, "select * from khach_hang");
		$count = pg_num_rows($tv_count);

		$newid = $count + 1;

		if (($lenuser == 0) || ($lenpass == 0))
			echo "<p class='fail_noti'>Please input your username and password</p>";
		else if ($newpassword != $repassword)
			echo "<p class='fail_noti'>Retype password error</p>";
		else {
			$tv = "insert into khach_hang values ('$newid', '$newusername', '$newpassword') ";
			$result = pg_query($conn, $tv);
			if ($result) {
				header("Location: index.php?thamso=login");
				echo "<script>alert('Đăng ký tài khoản thành công !')</script>";
			} else echo pg_last_error($conn);
		}
	}
?>

<div style="width: 40%; margin: auto; padding-top: 50px; font-size: 24px;">
	<form action="" method = "post">
		<div class="form-group">
	    	<label>Tài khoản mới</label>
	    	<input type="text" class="form-control" name="username">
	  	</div>
	  	<div class="form-group">
	   		<label>Mật khẩu</label>
	    	<input type="password" class="form-control" name="password">
	  	</div>
	  	<div class="form-group">
	   		<label>Nhập lại mật khẩu</label>
	    	<input type="password" class="form-control" name="repassword">
	  	</div>
	  	<input type="submit" class="btn btn-primary" value="Đăng ký">
	</form>
</div>