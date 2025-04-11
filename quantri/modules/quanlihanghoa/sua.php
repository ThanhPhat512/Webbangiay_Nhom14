<?php
$sql = "select *from hanghoa where MSHH='$_GET[mshh]'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>

<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12">Sửa chi tiết hàng hóa</p>
            
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="modules/quanlihanghoa/xuli.php?mshh=<?php echo $row["MSHH"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mshh" class="col-md-12 control-label">MSHH</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["MSHH"] ?>"  id="mshh" name="mshh"/>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenhh" class="col-md-12 control-label">Tên HH</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["TenHH"] ?>"  name="tenhh" id="tenhh" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gia" class="col-md-12 control-label">Giá</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["Gia"] ?>"  name="gia" id="gia" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="soluong" class="col-md-12 control-label">Số lượng</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" value="<?php echo $row["SoLuongHang"] ?>"  name="soluong" id="soluong" />
                            </div>
                        </div>
                    </div>
                        <?php
                            $sql_manhom = "select *from nhomhanghoa";
                            $result_manhom = mysqli_query($conn,$sql_manhom);
                        ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="manhom" class="col-md-12 control-label">Mã Nhóm</label>
                            <div class="col-md-10">
                            <select name="manhom" class="form-control" id="manhom">
                            <?php
                                while($row_manhom =mysqli_fetch_array($result_manhom)){
                                    if($row["MaNhom"]==$row_manhom["MaNhom"]){
                                    ?>
                                        <option selected="selected"><?php echo $row_manhom["MaNhom"] ?></option>
                                    <?php
                                    }else{
                                    ?>
                                        <option><?php echo $row_manhom["MaNhom"] ?></option>
                                    <?php
                                    }
                                } 
                            ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-6">
                            <label for="hinhanh" class="col-md-12 control-label">Hình Ảnh</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control-file"   name="hinhanh" id="hinhanh" /><img class="img-thumbnail" style="width:250px;height:230px;" src="modules/quanlihanghoa/uploads/<?php echo $row["Hinh"] ?>">
                            </div>
                        </div>
                    </div>
                        
                        <div class="form-group">
                            <label for="mota" class="col-md-12 control-label">Mô tả hàng hóa</label>
                            <div class="col-md-10">
                                <textarea  class="md-textarea form-control" rows="3"  name="mota" id="mota" ><?php echo $row["MotaHH"] ?></textarea>
                            </div>
                        </div>

                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-md" name="sua">Sửa</button>
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>