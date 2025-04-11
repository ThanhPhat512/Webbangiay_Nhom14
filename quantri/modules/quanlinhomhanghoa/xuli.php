<?php
require_once'../config.php';
$tennhom = $_GET["tennhom"];
$manhom =$_GET["manhom"];
$MaNhom = $_POST["manhom"];
$TenNhom = $_POST["tennhom"];
if(isset($_POST["them"])){
    $sql="insert into nhomhanghoa values(" ."'" . $_POST["manhom"] . "'," ."'" . $_POST["tennhom"] ."')";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhomhanghoa&ac=them");
}
elseif(isset($_POST["sua"])){
    $sql = "update nhomhanghoa set MaNhom='$MaNhom' , TenNhom='$TenNhom' where MaNhom='$manhom' ";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhomhanghoa&ac=sua&manhom=".$manhom);
    
}
else{
    $sql = "Delete from nhomhanghoa where TenNhom='$tennhom'";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlinhomhanghoa&ac=them");
}
?>