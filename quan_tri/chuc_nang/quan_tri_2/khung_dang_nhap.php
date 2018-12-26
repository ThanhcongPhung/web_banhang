<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<center style="width: 30%; margin: auto; padding: 30px; border: 2px solid #ccc; border-radius: 5px;">

	<form class="form-signin" method="POST" action="">       
      	<h2 class="form-signin-heading" style="text-align:center; padding: 15px;">Login</h2>
      	<input type="text" class="form-control" name="ky_danh" placeholder="Username" required="" autofocus="" /><br>
      	<input type="password" class="form-control" name="mat_khau" placeholder="Password" required=""/>
      	<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >  
      	<button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 30px;">Login</button>   
    </form>
</center>
