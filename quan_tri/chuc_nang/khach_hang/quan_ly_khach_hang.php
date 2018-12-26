<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$so_dong_tren_mot_trang=20;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from khach_hang";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from khach_hang order by id desc limit $so_dong_tren_mot_trang offset $vtbd";
	$tv_1=pg_query($conn,$tv);
?>
<div style="width:100%;text-align:left; padding: 35px 5%;">
	<b style="color:blue;font-size:20px" >Quản lý khách hàng</b><br><br>
	<table width="990px" class="tb_a1" >
		<tr style="background:#CCFFFF;height:40px;" >
			<td width="200px" ><b>Tên</b></td>
			<td width="320px" ><b>Email</b></td>
			<td width="380px" ><b>Địa chỉ</b></td>
			<td width="120px" ><b>Điện thoại</b></td>
		</tr>
		<?php 
			while($tv_2=pg_fetch_array($tv_1))
			{
				$id=$tv_2['id'];
				$ten=$tv_2['ten_khach_hang'];
				$email=$tv_2['email'];
				$dia_chi=$tv_2['dia_chi'];
				$dien_thoai=$tv_2['dien_thoai'];
				?>
					<tr class="a_1" >
						<td>
							<?php echo $ten; ?></a>
						</td>
						<td>
							<?php echo $email; ?>
						</td>
						<td>
							<?php echo $dia_chi; ?>
						</td>
						<td>
							<?php echo $dien_thoai; ?>
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
						echo "<a href='$link_phan_trang' class='phan_trang' >";
							echo $i;
						echo "</a> ";
					}
				?>
				<br><br>
			</td>
		</tr>
	</table>
</div>