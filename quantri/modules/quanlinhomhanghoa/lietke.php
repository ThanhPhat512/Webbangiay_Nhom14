<?php 
$sql = "select * from nhomhanghoa";
$result = mysqli_query($conn,$sql);
?>
<div class="container mb-5">
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã Nhóm</th>
        <th scope="col">Tên Nhóm</th>
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
        <td ><?php echo $row["MaNhom"] ?></td>
        <td><?php echo $row["TenNhom"] ?></td>
        <td><a href="index.php?quanli=quanlinhomhanghoa&ac=sua&manhom=<?php echo $row["MaNhom"]?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        <td><a href="modules/quanlinhomhanghoa/xuli.php?tennhom=<?php echo $row["TenNhom"]?>"><i class="fa fa-remove"></i></a></td>
    </tr>
  </tbody>
  <?php $i++; } ?>
</table>
</div>
