
<?php

$sql = "select*from hanghoa where MSHH='$_GET[mshh]' ";
$result = mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($result);
?>
<?php 
$sqli = "SELECT DISTINCT TenNhom FROM nhomhanghoa a join hanghoa b on a.MaNhom = b.MaNhom where MSHH='$_GET[mshh]'";
$resulti = mysqli_query($conn,$sqli);
$dongi=mysqli_fetch_array($resulti);
?>


<div class="container-fluid mb-4 mt-4">
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="quantri/modules/quanlihanghoa/uploads/<?php echo $dong["Hinh"] ?>" /></div>
						<div class="tab-pane" id="pic-2"><img src="./Hinh_anh/giaychitiet.jpg" /></div>
						<div class="tab-pane" id="pic-3"><img src="./Hinh_anh/giaychitiet3.jpg" /></div>
						<div class="tab-pane" id="pic-4"><img src="./Hinh_anh/giaychitiet4.jpg" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="quantri/modules/quanlihanghoa/uploads/<?php echo $dong["Hinh"] ?>" /></a></li>
						<li><a data-target="#pic-2" data-toggle="tab"><img src="./Hinh_anh/giaychitiet.jpg" /></a></li>
						<li><a data-target="#pic-3" data-toggle="tab"><img src="./Hinh_anh/giaychitiet3.jpg" /></a></li>
					    <li><a data-target="#pic-4" data-toggle="tab"><img src="./Hinh_anh/giaychitiet4.jpg" /></a></li>
                    </ul>
                </div>
                <div class="details col-md-5">
                    <h3 class="product-title"><?php echo $dong["TenHH"] ?></h3>
                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
						    <span class="fa fa-star checked"></span>
						    <span class="fa fa-star checked"></span>
						    <span class="fa fa-star"></span>
						    <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="product-description"><?php echo $dong["MotaHH"] ?></p>
                    <h5 class="price">Thương hiệu: <span><?php echo $dongi["TenNhom"] ?></span></h5>
                    <h5 class="price">Giá: <span><?php echo number_format($dong['Gia']).' '.'đ'?></span></h5>
                    <form  role="form" class="form-horizontal" action="suagiohang.php?mshh=<?php echo $dong["MSHH"] ?>" method="POST" enctype="multipart/form-data">
                        <label for="size">Size</label>
                        <select name="size" id="size" class="form-control col-md-3">
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                        </select>
                        <label for="soluong">Số lượng</label>
                        <input type="number" id="soluong" name="soluong" min="1" max='100' value="1" class="form-control col-md-3">
                        <div class="buttons text-center mt-5"><button name="muahang" type="submit"  class="btn btn-primary i fa fa-shopping-cart "> Buy now</button></div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>




