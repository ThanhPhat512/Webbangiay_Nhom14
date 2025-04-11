<?php
    $sql = "select*from nhomhanghoa";
    $run = mysqli_query($conn,$sql);
     ?>

<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12">Thêm chi tiết hàng hóa</p>
            
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="modules/quanlihanghoa/xuli.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mshh" class="col-md-12 control-label">MSHH</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  id="mshh" name="mshh"/>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenhh" class="col-md-12 control-label">Tên HH</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="tenhh" id="tenhh" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gia" class="col-md-12 control-label">Giá</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="gia" id="gia" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="soluong" class="col-md-12 control-label">Số lượng</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control"  name="soluong" id="soluong" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="manhom" class="col-md-12 control-label">Mã Nhóm</label>
                            <div class="col-md-12">
                            <select name="manhom" class="form-control" id="manhom">
                            <?php
                                while($row =mysqli_fetch_array($run)){
                            ?>
                                <option><?php echo $row["MaNhom"] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-6">
                            <label for="hinhanh" class="col-md-12 control-label">Hình Ảnh</label>
                            <div class="col-md-12">
                                <input type="file" class="form-control-file"   name="hinhanh" id="hinhanh" />
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="mota" class="col-md-12 control-label">Mô tả hàng hóa</label>
                            <div class="col-md-12">
                                <textarea  class="form-control "  name="mota" id="mota" ></textarea>
                            </div>
                        </div>

                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-md" name="them">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>