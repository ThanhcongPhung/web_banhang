<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<div style="width:100%;text-align:left; padding: 35px 5%;">
	<form action="" method="post">
		<table width="100%" >
			<tr>
				<td colspan="2" ><b style="color:blue;font-size:20px" >Thêm danh mục</b><br><br> </td>
				
			</tr>
			<tr>
				<td width="150px" >Tên : </td>
				<td width="840px">
					<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten" value="" >
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<br>
					<input type="submit" name="bieu_mau_them_menu_doc" value="Thêm danh mục" style="width:200px;height:50px;font-size:24px" >
				</td>
			</tr>
		</table>
	</form>
</div>