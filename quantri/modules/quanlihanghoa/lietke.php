<?php 
$sql = "select * from hanghoa";
$result = mysqli_query($conn,$sql);
?>

<div class="container-fluid mb-5">
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã HH</th>
        <th scope="col">Tên Hàng Hóa</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng hàng</th>
        <th scope="col">Mã nhóm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Mô tả hàng hóa</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
    </tr>
  </thead>
  <?php
  $i=1;
    while ($row = mysqli_fetch_array($result)){
    ?>
  <tbody>
    <tr>
        <th scope="row"><?php echo $i ;?></th>
        <td ><?php echo $row["MSHH"] ?></td>
        <td><?php echo $row["TenHH"] ?></td>
        <td ><?php echo $row["Gia"] ?></td>
        <td ><?php echo $row["SoLuongHang"] ?></td>
        <td ><?php echo $row["MaNhom"] ?></td>
        <td ><img src="modules/quanlihanghoa/uploads/<?php echo $row["Hinh"] ?>"width="100" height="80"></td>
        <td ><?php echo $row["MotaHH"] ?></td>
        <td><a href="index.php?quanli=quanlihanghoa&ac=sua&mshh=<?php echo $row["MSHH"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td><a href="modules/quanlihanghoa/xuli.php?mshh=<?php echo $row["MSHH"] ?>"><i class="fa fa-remove"></i></a></td>
    </tr>
  </tbody>
  <?php $i++; } ?>
</table>
</div>