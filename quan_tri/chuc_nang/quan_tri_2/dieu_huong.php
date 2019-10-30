<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['thamso'])){$thamso="";}else{$thamso=$_GET['thamso'];}
	
	switch($thamso)
	{
		case "khach_hang":
			include("chuc_nang/khach_hang/quan_ly_khach_hang.php");
		break;
		case "menu_doc":
			include("chuc_nang/menu_doc/lien_ket_menu_doc.php");
		break;
		case "them_menu_doc":
			include("chuc_nang/menu_doc/them_menu_doc.php");
		break;
		case "quan_ly_menu_doc":
			include("chuc_nang/menu_doc/quan_ly_menu_doc.php");
		break;
		case "sua_menu_doc":
			include("chuc_nang/menu_doc/sua_menu_doc.php");
		break;
		case "san_pham":
			include("chuc_nang/san_pham/lien_ket_san_pham.php");
		break;
		case "them_san_pham":
			include("chuc_nang/san_pham/them_san_pham.php");
		break;
		case "quan_ly_san_pham":
			include("chuc_nang/san_pham/quan_ly_san_pham.php");
		break;
		case "sua_san_pham":
			include("chuc_nang/san_pham/sua_san_pham.php");
		break;
		case "hoa_don":
			include("chuc_nang/hoa_don/quan_ly_hoa_don.php");
		break;
		case "xem_hoa_don":
			include("chuc_nang/hoa_don/xem_hoa_don.php");
		break;
		case "sua_thong_tin_quan_tri":
			include("chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
		break;
	}
?>