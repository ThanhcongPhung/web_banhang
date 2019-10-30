<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$ten=trim($_POST['ten']);
	$ten=str_replace("'","&#39;",$ten);
	$danh_muc=$_POST['danh_muc'];
	$gia=trim($_POST['gia']);
	$ten_file_anh=$_FILES['hinh_anh']['name'];
	$trang_chu=$_POST['trang_chu'];
	$noi_bat=$_POST['noi_bat'];
	$noi_dung=$_POST['noi_dung'];
	$noi_dung=str_replace("'","&#39;",$noi_dung);
	$tv_m="select max(sap_xep_trang_chu) from san_pham";
	$tv_m_1=pg_query($conn,$tv_m);
	$tv_m_2=pg_fetch_array($tv_m_1);
	$sap_xep_trang_chu=$tv_m_2[0]+1;
	if($ten!="")
	{
		if($gia!="")
		{
			if($ten_file_anh!="")
			{
				$tv_k="select count(*) from san_pham where hinh_anh='$ten_file_anh' ";
				$tv_k_1=pg_query($conn,$tv_k);
				$tv_k_2=pg_fetch_array($tv_k_1);

				$tv_count = pg_query($conn, "select * from san_pham");
		    	$count = pg_num_rows($tv_count);
		    	$check = 1;
		    	for ($i=1;$i<=$count;$i++) {
		    		if (pg_affected_rows(pg_query($conn,"SELECT id FROM san_pham WHERE id='$i'")) > 0) {
		    			continue;
		    		} else {
		    			$id = $i;
		    			$check = 0;
		    			break;
		    		}
		    	}
		 		if ($check == 1) $id = $count + 1;
				if($tv_k_2[0]==0)
				{
					$tv="
					INSERT INTO san_pham (
					id ,
					ten ,
					gia ,
					hinh_anh ,
					noi_dung ,
					thuoc_menu ,
					noi_bat ,
					trang_chu ,
					sap_xep_trang_chu
					)
					VALUES (
					'$id',
					'$ten',
					'$gia',
					'$ten_file_anh',
					'$noi_dung',
					'$danh_muc',
					'$noi_bat',
					'$trang_chu',
					'$sap_xep_trang_chu'
					);";
					pg_query($conn,$tv);

					$duong_dan_anh="../hinh_anh/san_pham/".$ten_file_anh;
					move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
					
					$_SESSION['danh_muc_menu']=$danh_muc;
					$_SESSION['tuy_chon_trang_chu']=$trang_chu;
					$_SESSION['tuy_chon_noi_bat']=$noi_bat;

					echo "<script type='text/javascript'>alert('Đã thêm sản phẩm ".$ten."'); window.history.back();</script>";
				}
				else 
				{
					echo "<script type='text/javascript'>alert('Hình ảnh bị trùng tên'); </script>";
				}
			}
			else 
			{
				echo "<script type='text/javascript'>alert('Chưa chọn ảnh cho sản phẩm');</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Chưa điền giá sản phẩm'); </script>";
		}

	}
	else 
	{
		echo "<script type='text/javascript'>alert('Chưa điền tên sản phẩm');</script>";
	}
?>