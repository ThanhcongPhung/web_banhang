<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from hoa_don";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from hoa_don order by id desc limit $so_dong_tren_mot_trang offset $vtbd";
	$tv_1=pg_query($conn,$tv);
?>
<div style="width:100%;text-align:left; padding: 35px 5%;">
	<b style="color:blue;font-size:20px" >Quản lý hóa đơn</b><br><br>
	<table width="100%" class="tb_a1" >
		<tr style="background:#CCFFFF;height:40px;" >
			<td width="370px" ><b>Tên</b></td>
			<td width="300px" ><b>Email</b></td>
			<td width="120px" ><b>Điện thoại</b></td>
			<td align="center" width="100px" ><b>Sửa</b></td>
			<td align="center" width="100px" ><b>Xóa</b></td>
		</tr>
		<?php 
			while($tv_2=pg_fetch_array($tv_1))
			{
				$id=$tv_2['id'];
				$ten=$tv_2['ten_nguoi_mua'];
				$email=$tv_2['email'];
				$dien_thoai=$tv_2['dien_thoai'];
				$link_xem="?thamso=xem_hoa_don&id=".$id."&trang=".$_GET['trang'];
				$link_xoa="?xoa_hoa_don=co&id=".$id;
				?>
					<tr class="a_1" >
						<td>
							<a href="<?php echo $link_xem; ?>" class="lk_a1" ><?php echo $ten; ?></a>
						</td>
						<td>
							<?php echo $email; ?>
						</td>
						<td>
							<?php echo $dien_thoai; ?>
						</td>
						<td align="center" >
							<a href="<?php echo $link_xem; ?>" class="lk_a1" >Xem</a>
						</td>
						<td align="center" >
							<a href="<?php echo $link_xoa; ?>" class="lk_a1" >Xóa</a>
						</td>
					</tr>
				<?php 
			}
		?>
		<tr>
			<td colspan="5" align="center" >
				<br>
				<?php 
					for($i=1;$i<=$so_trang;$i++)
					{
						$link_phan_trang="?thamso=hoa_don&trang=".$i;
						echo "<a href='$link_phan_trang' class='phan_trang' id='page".$i."'>";
							echo $i;
						echo "</a> ";
					}
				?>
				<br><br>
			</td>
		</tr>
	</table>
</div>