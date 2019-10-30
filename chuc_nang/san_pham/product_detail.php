<?php 
	include("ket_noi.php");	
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=pg_query($conn,$tv);
	$tv_2=pg_fetch_array($tv_1);
	$menu = $tv_2['thuoc_menu'];
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
	$link_chi_tiet="?thamso=caterogy&menu=".$tv_2['thuoc_menu'];
	$query_name = pg_query($conn,"select * from menu_doc where id='$menu';");
	$get_name = pg_fetch_array($query_name);

	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		if(isset($_SESSION['login_user'])) {

			$newcomment = $_POST['content'];
			$lencomment = strlen($_POST['content']);
			

			$tv_count = pg_query($conn, "select * from review");
			$count = pg_num_rows($tv_count);

			$comment_id = $count + 1;
			$username = $_SESSION['login_user'];
			$sp_id = $id;

			if (!isset($_POST['rate1'])) {
				echo "<p class='fail_noti'>Xin hãy đánh giá điểm cho món ăn này</p>";
			}
			else if (pg_affected_rows(pg_query($conn,"SELECT username FROM review WHERE username='$username' and sp_id='$sp_id'")) == 0) {
				$star = $_POST['rate1'];
				$query = "insert into review values ('$comment_id', '$username', '$sp_id','$star','$newcomment') ";
				$result = pg_query($conn, $query);
				header("Location: index.php?thamso=product_detail&id=$sp_id");
			} else {
				echo "<p class='fail_noti'>Bạn đã đánh giá món ăn này rồi</p>";
			}

		} else {
			echo "<script>alert('Vui lòng đăng nhập để nhận xét sản phẩm này')</script>";
		}
		
	}
?>
<div class="name_detail noti">
	<a href="<?php echo $link_chi_tiet ?>"> <?php echo $get_name['ten']; ?> </a> 
	<span> > </span>
	<span><?php echo $tv_2['ten']; ?></span>
</div>

<div style="width: 80%; margin: auto;">
	<div class="product">
		<?php echo "<img src='$link_anh' style='float: left;'> "?>
	</div>
	<span class="product_name" style="padding-top: 0; font-size: 35px;"><?php echo $tv_2['ten']; ?></span>
	<span class="price" style="padding-bottom:25px; font-size: 25px;">
		<?php
			$gia=$tv_2['gia'];
			$gia=number_format($gia,0,",",".");
			echo $gia;
		?>
	</span>
	<form>
		<input type='hidden' name='thamso' value='gio_hang' >
		<?php echo "<input type='hidden' name='id' value='".$_GET['id']."' >" ?>
		<input type='text'  class='form-control' name='so_luong' value='1' style='width:60px; display: inline-block;' >
		<button type='submit' class='btn btn-warning' class='submit_button' style='margin-bottom: 3px; margin-left: 25px;'>Thêm vào giỏ</button>
	</form>
	<span class="description" style="font-size: 18px;">
			<?php echo $tv_2['noi_dung']; ?>
	</span>
	<div class="review col-sm-12">
		<span class="header" style="font-size: 23px;background: none">ĐÁNH GIÁ SẢN PHẨM</span>
		<div class="rating_overview" style="margin-bottom: 20px">
			<div class="ratings">

				 <!-- get review data  -->

				<?php 
				$get_review_query = "select * from review where sp_id = '$id'";
				// $result = pg_query($conn, $query);
				$get_average_star = "select AVG(star) from review where sp_id = '$id'";
				$avg = pg_query($conn,$get_average_star);
				$row = pg_fetch_array($avg);
				$average_star = round($row['avg'],1);
				$average_star_integer = round($row['avg']);
				$comments = pg_query($conn,$get_review_query);
			
			echo "<span style='font-size: 25px'>$average_star</span> trên 5";
			echo "
			</div>
			<div class='stars'>
			";
				for($i=1;$i<=$average_star_integer;$i++) {

					echo "<span class='fa fa-star checked' ></span>";
				}
				for($i=$average_star_integer;$i<5;$i++) {

					echo "<span class='fa fa-star' ></span>";
				}
				echo "
			</div>

		</div>
				";
				?>


				<?php  
				while ($row = pg_fetch_array($comments)) {
					$name = $row['username'];
					$get_avatar = pg_fetch_array(pg_query($conn,"select * from khach_hang where ten_khach_hang='$name'"));
					$star_comment = $row['star'];
					$user_comment = $row['username'];
					$content_comment = $row['comment'];
					$avatar_user = $get_avatar['anh_dai_dien'];
    				// echo "<span>$star_comment</span>";
    				// echo "<span>$content_comment</span>";
		echo "
		<div class='review_comment'>
			<div class='user_avatar'>
				<img src='hinh_anh/avatar_user/".$avatar_user."' class='avatar_img'>
			</div>
			<div class='main_rating'>
				<div class='username'>
					<span>$user_comment</span>
				</div>
				<div class='stars'>";
				for($i=1;$i<=$star_comment;$i++) {

					echo "<span class='fa fa-star checked' ></span>";
				}
				for($i=$star_comment;$i<5;$i++) {

					echo "<span class='fa fa-star' ></span>";
				}
				echo "
				</div>
				<div class='comment'>$content_comment</div>
			</div>

		</div>
		";
		}
				 ?>
		
		

		<div style="width: 40%; padding-top: 10px; font-size: 24px;">
			
		<form action="" method = "post">
		<?php
		if(isset($_SESSION['login_user'])) {
			echo "
		<fieldset class='rate'>
    <input id='rate1-star5' type='radio' name='rate1' value='5' />
    <label for='rate1-star5' title='Excellent'>5</label>

    <input id='rate1-star4' type='radio' name='rate1' value='4' />
    <label for='rate1-star4' title='Good'>4</label>

    <input id='rate1-star3' type='radio' name='rate1' value='3' />
    <label for='rate1-star3' title='Satisfactory'>3</label>

    <input id='rate1-star2' type='radio' name='rate1' value='2' />
    <label for='rate1-star2' title='Bad'>2</label>

    <input id='rate1-star1' type='radio' name='rate1' value='1' />
    <label for='rate1-star1' title='Very bad'>1</label>
  </fieldset>
			";
}
?>
	    <input type="text" class="form-control" name="content" >
	  	<input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Bình luận">
	  	</div>
	  	
	  	<!-- <button type="button" class="btn btn-primary" onclick="window.location.href='?thamso=register'">Đăng ký</button> -->
	</form>
</div>
	</div>

 
</div>
