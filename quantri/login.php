
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang đăng nhập</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            hr.light{
                border-top: 1px solid white;
                width: 75%;
            }

            .col-md-12 p{
                color: #2e86de !important;
            }
        </style>
    </head>

    <body>
    
    <div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12 display-4">LOGIN</p>
            
            <!-- Tab panes -->
            <div>
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="username" class="col-md-2 control-label">USERNAME</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="phone" name="username" placeholder="Tên đăng nhập" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">PASSWORD</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" />
                            </div>
                        </div>

                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-md" name="login">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    </body>
</html>
<?php
require_once'./modules/config.php';
session_start();

if(isset($_POST["login"])){
    $username =$_POST["username"];
    $password =$_POST["password"];
    $sql = "select * from dangnhap where Username='$username' and Password='$password' limit 1";
    $result =mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);
    if($row >0){
        $_SESSION['username'] =$username;
        header("location:index.php");
    }
    else{
        header("location:login.php");
    }

}

 ?>
