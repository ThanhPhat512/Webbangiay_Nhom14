<?php 
require_once "../config.php";
$MSHH =$_GET["mshh"];
$MaNhom =$_GET["manhom"];
$mshh =$_POST["mshh"];
$tenhh=$_POST["tenhh"];
$gia=$_POST["gia"];
$soluong=$_POST["soluong"];
$manhom =$_POST["manhom"];
$mota =$_POST["mota"];
$hinhanh=$_FILES["hinhanh"]["name"];
$hinhanh_tmp =$_FILES["hinhanh"]["tmp_name"];
move_uploaded_file($hinhanh_tmp,"uploads/".$hinhanh);
if(isset($_POST["them"])){
    $sql="insert into hanghoa(MSHH,TenHH,Gia,SoLuongHang,MaNhom,Hinh,MotaHH) values('$mshh','$tenhh','$gia','$soluong','$manhom','$hinhanh','$mota')";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlihanghoa&ac=them");
}
elseif(isset($_POST["sua"])){
    if($hinhanh!=''){
        $sql = "update hanghoa set MSHH='$mshh',TenHH='$tenhh' , Gia='$gia' , SoLuongHang='$soluong', MaNhom='$manhom', Hinh='$hinhanh', MotaHH='$mota' where MSHH='$MSHH' ";
        mysqli_query($conn,$sql);
        header("location:../../index.php?quanli=quanlihanghoa&ac=sua&mshh=".$MSHH);
    }
    else{
        $sql = "update hanghoa set MSHH='$mshh',TenHH='$tenhh' , Gia='$gia' , SoLuongHang='$soluong', MaNhom='$manhom', MotaHH='$mota' where MSHH='$MSHH' ";
        mysqli_query($conn,$sql);
        header("location:../../index.php?quanli=quanlihanghoa&ac=sua&mshh=".$MSHH);
    }
    
    
}
else{
    $sql = "Delete from hanghoa where MSHH='$MSHH'";
    mysqli_query($conn,$sql);
    header("location:../../index.php?quanli=quanlihanghoa&ac=them");
}

?>