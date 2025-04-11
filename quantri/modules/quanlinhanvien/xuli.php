<?php 
require_once "../config.php";
$MSNV =$_GET["msnv"];
$hotennv =$_POST["hotennv"];
$msnv=$_POST["msnv"];
$chucvu=$_POST["chucvu"];
$diachi=$_POST["diachi"];
$sodienthoai =$_POST["sodienthoai"];
if(isset($_POST["them"])){
    $sql="insert into nhanvien(MSNV,HoTenNV,ChucVu,Diachi,SoDienThoai) values('$msnv','$hotennv','$chucvu','$diachi','$sodienthoai')";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhanvien&ac=them");
}
elseif(isset($_POST["sua"])){
    $sql = "update nhanvien set MSNV='$msnv' , HoTenNV='$hotennv' ,ChucVu='$chucvu',Diachi='$diachi',SoDienThoai='$sodienthoai' where MSNV='$msnv' ";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhanvien&ac=sua&msnv=$MSNV");
}
else{
    $sql = "Delete from nhanvien where MSNV='$MSNV'";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhanvien&ac=them");
}


?> 