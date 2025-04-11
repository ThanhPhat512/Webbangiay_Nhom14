<?php
$sql = "select *from nhanvien where MSNV='$_GET[msnv]'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>
<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12">Sửa thông tin nhân viên</p>
            
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="modules/quanlinhanvien/xuli.php?msnv=<?php echo $row["MSNV"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="msnv" class="col-md-12 control-label">MSNV</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["MSNV"] ?>"  id="msnv" name="msnv"/>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hotennv" class="col-md-12 control-label">Tên nhân viên</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["HoTenNV"] ?>"  name="hotennv" id="hotennv" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sodienthoai" class="col-md-12 control-label">Phone</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"value="<?php echo $row["SoDienThoai"] ?>"  name="sodienthoai" id="sodienthoai" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chucvu" class="col-md-12 control-label">Chức vụ</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["ChucVu"] ?>"  name="chucvu" id="chucvu" />
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="diachi" class="col-md-12 control-label">Địa chỉ</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["Diachi"] ?>"  name="diachi" id="diachi" />
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