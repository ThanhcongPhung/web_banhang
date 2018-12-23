<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<link rel="shortcut icon" href="hinh_anh/avatar/icon.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body style="font-family: 'Quicksand', sans-serif; width: auto; position: relative;">
		<div class="header">
			<?php 
			if(!isset($_SESSION['login_user'])){
				echo "<a class='btn btn-danger' href='?thamso=login' role='button' style='margin-bottom: 3px;position: absolute;right: 122px ;top: 30px'>Đăng nhập</a>";
				if (basename($_SERVER['REQUEST_URI']) == "index.php") {
					echo "<a class='btn btn-success go-to-register' href='#register' role='button' style='margin-bottom: 3px;position: absolute;right: 26px ;top: 30px'>Đăng kí</a>";
				} else {
					echo "<a class='btn btn-success go-to-register' href='index.php#register' role='button' style='margin-bottom: 3px;position: absolute;right: 26px ;top: 30px'>Đăng kí</a>";
				}

			} else if(isset($_SESSION['login_user'])) {
				echo "<span class='user_name'><span style='color: #fff;'>Xin chào </span><a href='?thamso=profile'>".$_SESSION['login_user']."</a></span>";
				echo "<a class='btn btn-danger login_button' href='?thamso=logout'>Đăng xuất</a>";
			}
			?>
			<a href="./index.php"><img src="hinh_anh/avatar/icon.png" class="web_icon"></a>
			<?php 
				include("chuc_nang/tim_kiem/vung_tim_kiem.php");
			?>
		</div>
		<div class="nav-bar">
		    <a href="index.php">Trang chủ</a>
		    <a href="?thamso=about">Giới thiệu</a>
		    <div class="caterogy" style="height: 50px;">
		    	<a href="javascript:;">Danh mục</a>
		    	<div class="caterogy_wrapper">
		    	<?php 
		    		include("chuc_nang/menu_doc/menu_doc.php");
		    	?> 
		    	</div>
		    </div>
		    <a href="?thamso=guide">Hướng dẫn mua hàng</a>
		    <a href="?thamso=contact">Liên hệ</a>
		    <div class="cart" style="height: 50px;">
		    	<a href="javascript:;">Giỏ hàng</a>
		    	<div class="cart_wrapper">
		    	<?php 
		    		include("chuc_nang/gio_hang/vung_gio_hang.php");
		    	?> 
		    	</div>
			</div>   
		</div>

		<div class="main-container">
			<?php 
				include("chuc_nang/navigation.php");
			?>
		</div>

		<div class="footer">
			<?php include("chuc_nang/footer/footer.php"); ?>
		</div>

		
	</body>
</html>
