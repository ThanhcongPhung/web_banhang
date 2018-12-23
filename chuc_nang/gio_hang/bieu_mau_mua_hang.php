<?php
  include("ket_noi.php");
  if(isset($_SESSION['login_user'])) {
    $username = $_SESSION['login_user']; 
    $tv="select * from khach_hang where ten_khach_hang='$username'";
    $tv_1=pg_query($conn,$tv);
    $tv_2=pg_fetch_array($tv_1);

    $email = $tv_2['email'];
    $address = $tv_2['dia_chi'];
    $telephone = $tv_2['dien_thoai'];
  }
?>


<form method='post' action='' style="margin-bottom: 50px;">
	<input type='hidden' name='thong_tin_khach_hang' value='co' >
	<div class="info-wrapper" style="width: 45%; margin-left: 10%;">
		<div>
			<h3 style="padding: 50px 0 20px;">Thông tin mua hàng</h3>
		</div>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Tên người mua</span>
  			</div>
        <?php 
          if(!isset($_SESSION['login_user'])){
            echo "<input type='text' name='ten_nguoi_mua' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>";
          } else if(isset($_SESSION['login_user'])) {
            echo "<input type='text' name='ten_nguoi_mua' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='$username'>";
        }
  			?>
		</div>

    <br>
		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
  			</div>
        <?php
          if(!isset($_SESSION['login_user'])){
    			   echo "<input type='text' name='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>";
          } else if(isset($_SESSION['login_user'])) {
              echo "<input type='text' name='email' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='$email'>";
            }
        ?>
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Địa chỉ</span>
  			</div>
  			<?php 
          if(!isset($_SESSION['login_user'])){
            echo "<input type='text' name='dia_chi' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>";
          } else if(isset($_SESSION['login_user'])) {
            echo "<input type='text' name='dia_chi' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='$address'>";
        }
        ?>
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Điện thoại</span>
  			</div>
  			<?php 
          if(!isset($_SESSION['login_user'])){
            echo "<input type='text' name='dien_thoai' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg'>";
          } else if(isset($_SESSION['login_user'])) {
            echo "<input type='text' name='dien_thoai' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-lg' value='$telephone'>";
        }
        ?>
		</div>
    <br>

		<div class="input-group input-group-lg">
  			<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-lg">Nội dung</span>
  			</div>
  			<input type="text" name='noi_dung' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
		</div>
	  <br>	

		<button type="submit" class="btn btn-warning" style="font-size: 20px">Mua hàng</button>

	 </div>	 
</form>
