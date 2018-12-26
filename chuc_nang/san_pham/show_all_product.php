<div class="title">
	<span>Tất cả món ăn</span> 
</div>

<?php 
	include("ket_noi.php");	
	$so_du_lieu=15;
	$tv="select count(*) from san_pham";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_du_lieu);
	
	if(!isset($_GET['page'])){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$so_du_lieu;}
	
	$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham order by id desc limit $so_du_lieu offset $vtbd";
	$tv_1=pg_query($conn,$tv);
	echo "<div class='product_container'>";
	while($tv_2=pg_fetch_array($tv_1))
	{
			for($i=1;$i<=3;$i++)
			{
				if($tv_2!=false) {
					echo "<div class='product'>";
						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
						$link_chi_tiet="?thamso=product_detail&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$_SESSION['trang_chi_tiet_gio_hang']='co';
						$_GET['id']=$tv_2['id'];
						$gia=number_format($gia,0,",",".");
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh'>";
						echo "</a>";
						echo "<a class='product_name' href='$link_chi_tiet' >";
							echo $tv_2['ten'];
						echo "</a>";
						echo "<span class='price'>";						
						echo $gia;
						echo "</span>";?>
							<form style="margin: 20px;">
								<input type='hidden' name='thamso' value='gio_hang' >
								<?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
								<input type='hidden' class='form-control' name='so_luong' value='1'>
								<button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px;'>Thêm vào giỏ</button>
							</form>
					<?php
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
			$link="?thamso=all_product&page=".$i;
			echo "<a href='$link' id='page".$i."'>";
				echo $i;echo " ";
			echo "</a>";
		}
	echo "</div>";
?>