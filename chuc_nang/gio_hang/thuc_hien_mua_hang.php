<?php 
	include("ket_noi.php");	
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=trim($_POST['ten_nguoi_mua']);
		$email=trim($_POST['email']);
		$dien_thoai=trim($_POST['dien_thoai']);
		$dia_chi=trim(nl2br($_POST['dia_chi']));
		$noi_dung=nl2br($_POST['noi_dung']);

		$tv_count = pg_query($conn, "select * from hoa_don");
    	$count = pg_num_rows($tv_count);
    	$check = 1;
    	for ($i=1;$i<=$count;$i++) {
    		if (pg_affected_rows(pg_query($conn,"SELECT id FROM hoa_don WHERE id='$i'")) > 0) {
    			continue;
    		} else {
    			$id = $i;
    			$check = 0;
    			break;
    		}
    	}
 		if ($check == 1) $id = $count + 1;
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua=$hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}		
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua
            )
            VALUES (
            '$id' ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua'
            );";
			pg_query($conn, $tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			$success = "Cảm ơn bạn đã mua hàng tại website chúng tôi";
			echo "<script type='text/javascript'>alert('$success');</script>";
		}
		else 
		{
			
			$message = "Không được bỏ trống tên người mua , điện thoại , địa chỉ";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>