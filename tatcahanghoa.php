<?php
$sql = "select*from hanghoa";
$result = mysqli_query($conn,$sql);
 ?>
<!--content-->
<div class="container-fluid mb-5 mt-5">
    <div class="container">
      <div class="row welcome text-center mt-4 mb-4">
        <div class="col-4">
          <hr>
        </div>
        <div class="col-4">
          <h1 class="display-5">Sản phẩm</h1>
        </div>
        <div class="col-4">
          <hr>
        </div>
      </div>
    </div>
   <!--sanpham-->
  <div class="container">
  <div class="row">
   <?php 
    while($row = mysqli_fetch_array($result)){
   ?>
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="product-grid6">
        <div class="product-image6">
          <a href="index.php?xem=chitiethanghoa&mshh=<?php echo $row['MSHH'] ?>"><img class="pic-1" src="quantri/modules/quanlihanghoa/uploads/<?php echo $row["Hinh"] ?>">
          </a>
        </div>
        <div class="product-content">
          <h3 class="title"><?php echo $row["TenHH"] ?></h3>
          <div class="price"> 
            <?php echo number_format($row['Gia']).' '.'đ'?>
            <?php $giacu =200000;
                  $giacu = $row['Gia'] +$giacu;
             ?>
            <span><?php echo number_format($giacu).' '.'đ'?></span>
          </div>
        </div>
        <ul class="social">
          <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
        <!--<span class="product-new-label">new</span>-->
      </div>
    </div>
   <?php } ?>
  </div>
</div>
</div>