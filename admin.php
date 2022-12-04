<?php 

    include ("include/connection.php");

    if(isset($_POST['login'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

        $error=array();

        if(empty($username)){
            $error['admin']="Nhập tài khoản";
        }
        else if(empty($password)){
            $error['admin']="Nhập mật khẩu";
        }
        if(count($error)==0){

            if(isset($connect)) {
                $query= "SELECT * FROM admin WHERE username='$username' AND password='$password'";
                $resurt=mysqli_query($connect,$query);
            }

            if(mysqli_num_rows($resurt) == 1){
                echo "<script> alert('Bạn đã đăng nhập với tư cách quản trị viên') </script>"; 
                $_SESSION['admin']=$username;
                //header("Location:");
                
            }else{
                echo "<script>alert('Tài khoản và mật khẩu không hợp lệ') </script>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
</head>
<body style="background-image:url(img/bgr.jpg);background-repeat:no-repeat;background-size:cover">
    <?php 
        require "include/header.php";
    ?>
    <div style="margin-top: 20px;"></div>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                    <img src="img/admin.jpg" class="col-md-12" alt="">
                    <form action="" method="post" class="my-2">
                        <div class="alert alert-danger">
                            <?php 
                                if(isset($error['admin'])){
                                    $show=$error['admin'];
                                   
                                }else{
                                    $show="";
                                }
                                echo $show;
                            ?>
                        </div>

                        <div class="form-group" >
                            <label for="">Tên tài khoản</label>
                            <input type="text" name="username" class="form-control" autocomplete="off" >
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <input  type="submit" name="login" class="btn btn-success " value="Login">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>


</body>
</html>