<?php 
$sql = "select * from khachhang";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid mb-5 mt-5">
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">MSKH</th>
        <th scope="col">Họ tên KH</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Ghi chú</th>
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
        <td ><?php echo $row["MSKH"] ?></td>
        <td><?php echo $row["HoTenKH"] ?></td>
        <td><?php echo $row["DiaChi"] ?></td>
        <td><?php echo $row["SoDienThoai"] ?></td>
        <td><?php echo $row["Ghichu"] ?></td>
        <td><a href="#"><i class="fa fa-remove"></i></a></td>
    </tr>
  </tbody>
  <?php $i++; } ?>
</table>
</div>


