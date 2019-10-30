<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	include("../ket_noi.php");	
	$ten_menu=trim($_POST['ten']);
	$ten_menu=str_replace("'","&#39;",$ten_menu);

	$tv_count = pg_query($conn, "select * from menu_doc");
	$count = pg_num_rows($tv_count);
	$check = 1;
	for ($i=1;$i<=$count;$i++) {
		if (pg_affected_rows(pg_query($conn,"SELECT id FROM menu_doc WHERE id='$i'")) > 0) {
			continue;
		} else {
			$id = $i;
			$check = 0;
			break;
		}
	}
	if ($check == 1) $id = $count + 1;
	if($ten_menu!="")
	{
		$tv="
		INSERT INTO menu_doc (
		id ,
		ten 
		)
		VALUES (
		'$id' ,
		'$ten_menu'
		);";
		pg_query($conn,$tv);
		echo "<script type='text/javascript'>alert('Đã thêm danh mục ".$ten_menu."'); window.history.back();</script>";
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Chưa điền tên danh mục');</script>";
	}
?>