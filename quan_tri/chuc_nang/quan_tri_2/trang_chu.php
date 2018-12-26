<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	.lk_1 {
		width: 80%;
		display: block;
		color: #fff;
	    padding: 10px 15px;
	    margin: 15px auto;
	    text-decoration: none;
	    font-size: 20px;
	    transition: 0.3s;
	    border-radius: 4px;
	}
	.lk_1:hover {
		background-color: #ffc107;
	    color: #000;
	    text-decoration: none;
	}
	.web_icon {
		border-radius: 50%;
	    width: 100px;
	    margin: 35px 86px;
	}
	.banner {
		background-size: cover;
	    background-position: center;
	    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.85)), url(../hinh_anh/background4.jpg);
		height: 100px;
		color: #fff;
	    text-align: center;
	    font-size: 40px;
	    padding-top: 20px;
	}
</style>
<!-- <a href="index.php" style="font-size:72px;color:blue;text-decoration:none" >Quản trị cửa hàng</a> -->

<ul class="nav flex-column" style="width: 20%; height: 100%; position: fixed; display: inline-block; float: left; background-color: #2d2d2d">
	<a href="index.php"><img src="../hinh_anh/avatar/icon.png" class="web_icon"></a>
	<a href="?thamso=khach_hang" class="lk_1" id="menu1">Khách hàng</a>
	<a href="?thamso=menu_doc" class="lk_1" id="menu2">Danh mục</a>
	<a href="?thamso=san_pham" class="lk_1" id="menu3">Sản phẩm</a>
	<a href="?thamso=hoa_don" class="lk_1" id="menu4">Hóa đơn</a>
	<a href="?thamso=sua_thong_tin_quan_tri" class="lk_1" id="menu5">Sửa thông tin</a>
	<a href="?thamso=thoat" class="lk_1" >Thoát</a>
  
</ul>
<div style="width: 80%; min-height: 100%; float: right; display: inline-block; background-color: #ddd;">
	<?php 
		if (basename($_SERVER['REQUEST_URI']) == "index.php") {
			echo "<div class='banner' style='height: 100%'>";
			echo "<span style='font-size: 60px;display: block;margin-top: 18%;'>QUẢN TRỊ CỬA HÀNG</span>";
			echo "</div>";
		} else {
			echo "<div class='banner'>";
			echo "<span>QUẢN TRỊ CỬA HÀNG</span>";
			echo "</div>";
		}
	?>
	
	<?php 
		include("chuc_nang/quan_tri_2/dieu_huong.php");
	?>
</div>