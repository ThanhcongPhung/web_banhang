<?php
	session_start();
	$bien_bao_mat="co";
    include("../ket_noi.php");	
	include("chuc_nang/quan_tri_2/xac_dinh_dang_nhap.php");
	include("chuc_nang/quan_tri_2/ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("chuc_nang/quan_tri_2/xu_ly_post_get.php");
		}   
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Quản trị</title>
		<script src='phan_bo_tro/tinymce/js/tinymce/tinymce.min.js'></script>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body style="font-family: 'Quicksand', sans-serif; width: auto; position: relative;">
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("chuc_nang/quan_tri_2/khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					include("chuc_nang/quan_tri_2/trang_chu.php");
				}
			}
		?>
	</body>
</html>