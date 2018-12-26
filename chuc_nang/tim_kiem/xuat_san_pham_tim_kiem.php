<?php 
	include("ket_noi.php");	
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$so_du_lieu=16;
		$tv="select count(*) from san_pham  where $chuoi_tim_sql_2";
		$tv_1=pg_query($conn,$tv);
		$tv_2=pg_fetch_array($tv_1);
		echo "<span class='noti'>Tìm thấy ".$tv_2[0]." món ăn phù hợp với '".$_GET['tu_khoa']."'</span>";
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		
		if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
		
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc limit $so_du_lieu offset $vtbd";

		$tv_1=pg_query($conn,$tv);
		echo "<div class='product_container'>";
		while($tv_2=pg_fetch_array($tv_1))
		{
				for($i=1;$i<=3;$i++)
				{
					if($tv_2!=false)
					{
						echo "<div class='product'>";
							$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
							$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
							$gia=$tv_2['gia'];
							$gia=number_format($gia,0,",",".");
							echo "<a href='$link_chi_tiet' >";
								echo "<img src='$link_anh'>";
							echo "</a>";
							echo "<a class='product_name' href='$link_chi_tiet' >";
								echo $tv_2['ten'];
							echo "</a>";						
						echo "</div>";
					}
					if($i!=3)
					{
						$tv_2=pg_fetch_array($tv_1);
					}
				}
		}
		echo "</div>";

		echo "<div class='more' >";
			for($i=1;$i<=$so_trang;$i++)
			{
				$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
				echo "<a href='$link' id='page".$i."'>";
					echo $i;echo " ";
				echo "</a>";
			}
		echo "</div>";
	}
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}
?>