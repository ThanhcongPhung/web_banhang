<?php 
if (!isset($_POST['name'])) {
    # code...
    die('');}   
    include('../../ket_noi.php');
    header('Content-Type: text/html; charset=UTF-8');
    $username   = addslashes($_POST['name']);
    $password   = addslashes($_POST['password']);
    $repassword   = addslashes($_POST['repassword']);
    $email      = addslashes($_POST['email']);
    $address   = addslashes($_POST['address']);
    $telephone   = addslashes($_POST['telephone']);
    //ma hóa mật khẩu
    $password = md5($password);
    //gán id cho new user
    $tv_count = pg_query($conn, "select * from khach_hang");
    $count = pg_num_rows($tv_count);
    $id = $count + 1;
    //kiểm tra tên có trong database
    if (pg_affected_rows(pg_query($conn,"SELECT ten_khach_hang FROM khach_hang WHERE ten_khach_hang='$username'")) > 0){
        echo "<script type='text/javascript'>alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.'); window.history.back();</script>";
        exit;
    }
     //Kiểm tra email đã có người dùng chưa
    else if (pg_affected_rows(pg_query($conn,"SELECT email FROM khach_hang WHERE email='$email'")) > 0)
    {
        echo "<script type='text/javascript'>alert('Email này đã có người dùng. Vui lòng chọn Email khác.'); window.history.back();</script>";
        exit;
    }
    //Kiểm tra nhập lại đúng password
    else if ($_POST['password'] != $_POST['repassword']) {
        echo "<script type='text/javascript'>alert('Vui lòng nhập lại đúng mật khẩu.'); window.history.back();</script>";
        exit;
    }
    
    $addmember = pg_query($conn,"
        INSERT INTO khach_hang(
            id,
            ten_khach_hang,
            mat_khau,
            email,
            dia_chi,
            dien_thoai
        )
        VALUES(
            '{$id}',
            '{$username}',
            '{$password}',
            '{$email}',
            '{$address}',
            '{$telephone}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "<script type='text/javascript'>alert('Cảm ơn bạn đã đăng ký thành viên. Hãy tận hưởng niềm vui mua sắm với Food Lover !'); window.location.href='../../index.php?thamso=login';</script>";
    else
        echo "<script type='text/javascript'>alert('Có lỗi trong quá trình đăng ký.'); window.history.back();</script>";
 ?>