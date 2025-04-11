<?php 
$sql = "select * from nhanvien";
$result = mysqli_query($conn,$sql);
?>
<div class="container mb-5">
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">MSNV</th>
        <th scope="col">Họ Tên NV</th>
        <th scope="col">Chức Vụ</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Số điện thoại</th>
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
        <td ><?php echo $row["MSNV"] ?></td>
        <td><?php echo $row["HoTenNV"] ?></td>
        <td><?php echo $row["ChucVu"] ?></td>
        <td><?php echo $row["Diachi"] ?></td>
        <td><?php echo $row["SoDienThoai"] ?></td>
        <td><a href="index.php?quanli=quanlinhanvien&ac=sua&msnv=<?php echo $row["MSNV"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td><a href="modules/quanlinhanvien/xuli.php?msnv=<?php echo $row["MSNV"]?>"><i class="fa fa-remove"></i></a></td>
    </tr>
  </tbody>
  <?php $i++; } ?>
</table>
</div>
