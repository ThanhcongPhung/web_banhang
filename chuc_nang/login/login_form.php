
<?php 
  include("ket_noi.php"); 
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['user_name'];
    $mypassword = $_POST['pass_word'];
    $mypassword=md5($mypassword);
    $tv = "SELECT ten_khach_hang,mat_khau FROM khach_hang WHERE ten_khach_hang='$myusername' and mat_khau='$mypassword'";
    $tv_1 = pg_query($conn ,$tv);
    $count = pg_num_rows($tv_1);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
      $_SESSION['login_user'] = $myusername;
          header("location: index.php");
      } else {
          echo "<p class='fail_noti'>Your Username or Password is invalid</p>";
      }
  }
?>  

<head>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <style type="text/css">
    @import "bourbon";
.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  /*background-color: #fff;*/
  border: 1px solid rgba(0,0,0,0.1);  
  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }
  .checkbox {
    font-weight: normal;
  }
  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);
    &:focus {
      z-index: 2;
    }
  }
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
  </style>
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" method="POST" action="">       
      <h2 class="form-signin-heading" style="text-align:center; padding: 15px;">Please login</h2>
      <input type="text" class="form-control" name="user_name" placeholder="User name" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="pass_word" placeholder="Password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 30px;">Login</button>   
    </form>
  </div>
</body>
