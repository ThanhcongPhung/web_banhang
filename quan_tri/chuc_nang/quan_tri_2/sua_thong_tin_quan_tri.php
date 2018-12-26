<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$tv="select * from thong_tin_quan_tri where id='1' ";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$ky_danh=$tv_2['ky_danh'];	
?>
<div style="width:100%;text-align:left; padding: 35px 5%;">
	<form action="" method="post" >
		<table width="990px" >
			<tr>
				<td colspan="2" ><b style="color:blue;font-size:20px" >Sửa thông tin quản trị</b><br><br> </td>			
			</tr>
			<tr>
				<td width="200px" valign="top" >Ký danh : </td>
				<td width="890px" >
					<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ky_danh" value="<?php echo $ky_danh; ?>" >
				</td>
			</tr>
			<tr>
				<td valign="top" >Mật khẩu : </td>
				<td >
					<input type="password" style="width:400px;margin-top:3px;margin-bottom:3px;" name="mat_khau">
				</td>
			</tr>
			<tr>
				<td valign="top" >Nhập lại mật khẩu : </td>
				<td >
					<input type="password" style="width:400px;margin-top:3px;margin-bottom:3px;" name="check_mat_khau"><br><br>
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>
					<br>
					<input type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Sửa" style="width:200px;height:50px;font-size:24px" >
				</td>
			</tr>
		</table>
	</form>
</div>