<?php 
	if(isset($_GET['thamso'])){$thamso=$_GET['thamso'];}else{$thamso="";}
	switch($thamso)
	{
		case "login":
			include("chuc_nang/login/login_form.php");
		break;
		case "logout":
			include("chuc_nang/login/logout.php");
		break;
		case "profile":
			include("chuc_nang/profile/profile.php");
		break;
		case "caterogy":
			include("chuc_nang/san_pham/caterogy.php");
		break;
		case "product_detail":
			include("chuc_nang/san_pham/product_detail.php");
		break;
		case "all_product":
			include("chuc_nang/san_pham/show_all_product.php");
		break;
		case "about":
			include("chuc_nang/about.php");
		break;
		case "guide":
			include("chuc_nang/guide.php");
		break;
		case "contact":
			include("chuc_nang/contact.php");
		break;
		case "tim_kiem":
			include("chuc_nang/tim_kiem/xuat_san_pham_tim_kiem.php");
		break;
		case "gio_hang":
			include("chuc_nang/gio_hang/gio_hang.php");
		break;
		default:
			include("chuc_nang/slideshow/slideshow.php");	
			include("chuc_nang/san_pham/main_product.php");	
			include("chuc_nang/san_pham/new_product.php"); 
			include("chuc_nang/san_pham/hot_product.php");
			include("chuc_nang/register/register_form.php");  
	}
?>