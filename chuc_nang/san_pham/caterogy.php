<?php 
	include("ket_noi.php");	
	$id=$_GET['id'];
	
	$so_du_lieu=15;
	$tv="select count(*) from san_pham where thuoc_menu='$id';";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$query_name = mysqli_query($conn,"select * from menu_doc where id='$id';");
	$get_name = mysqli_fetch_array($query_name);
	$so_trang=ceil($tv_2[0]/$so_du_lieu);
?>
<div class="title">
	<span><?php echo $get_name['ten']; ?> </span> 
</div>
	
<?php
	if(!isset($_GET['page'])){$vtbd=0;}else{$vtbd=($_GET['page']-1)*$so_du_lieu;}
	
	$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where thuoc_menu='$id' order by id desc limit $vtbd,$so_du_lieu";
	$tv_1=mysqli_query($conn,$tv);
	echo "<div class='product_container'>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
			for($i=1;$i<=3;$i++)
			{
				if($tv_2!=false) {
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
						echo "<span class='price'>";						
						echo $gia;
						echo "</span>";	
					echo "</div>";	
				}
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
	}
	echo "</div>";
	echo "<div class='more' >";
		for($i=1;$i<=$so_trang;$i++)
		{
			$link="?thamso=caterogy&id=".$_GET['id']."&page=".$i;
			echo "<a href='$link' >";
				echo $i;echo " ";
			echo "</a>";
		}
	echo "</div>";
?>