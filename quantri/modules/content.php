
<?php
    if(isset($_GET["quanli"])){
        $tam=$_GET["quanli"];
    }
    else {
        $tam='';
    }
    if($tam=="quanlinhomhanghoa"){
        include("modules/quanlinhomhanghoa/main.php");
    }
    if($tam=="quanlihanghoa"){
        include("modules/quanlihanghoa/main.php");
    }
    if($tam=="quanlinhanvien"){
        include("modules/quanlinhanvien/main.php");
    }
    if($tam=='quanlikhachhang'){
        include('modules/quanlikhachhang/main.php');
    }

    if($tam==''){
     ?>
     <img src="../Hinh_anh/11sneakers-top-1.jpg" style="height: 620px; width:100%">
     <?php } ?>

   
