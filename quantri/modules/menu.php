<?php
if(isset($_GET["ac"])&& $_GET['ac']=='dangxuat'){
    unset($_SESSION['username']);
    header('location:login.php');
}
 ?>
<!--navbar-->
<div class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <nav class="navbar navbar-expand-md bg-light" id="navbar1">
                <a class="navbar-branch" href="index.php">
                    <img src="../Hinh_anh/logowweb.png" alt="logo" height="85px">
                </a>
            </nav>
            <ul class="navbar-nav  ml-5 pl-5">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?quanli=quanlikhachhang" class="nav-link">Quản lí khách hàng</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?quanli=quanlinhanvien&ac=them" class="nav-link">Quản lí nhân viên</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?quanli=quanlihanghoa&ac=them" class="nav-link">Quản lí hàng hóa</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?quanli=quanlinhomhanghoa&ac=them" class="nav-link">Quản lí nhóm hàng hóa</a>
                </li>
                
            </ul>
            <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
                    <a href="index.php?ac=dangxuat" class="nav-link">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</div>