<?php
$sql = "select *from nhomhanghoa where MaNhom='$_GET[manhom]'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>
<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12">Sửa nhóm hàng hóa</p>
            
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="modules/quanlinhomhanghoa/xuli.php?manhom=<?php echo $row["MaNhom"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="manhom" class="col-md-12 control-label">Mã Nhóm</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["MaNhom"] ?>" id="manhom" name="manhom" placeholder="Manhom" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tennhom" class="col-md-12 control-label">Tên Nhóm</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?php echo $row["TenNhom"] ?>" name="tennhom" id="tennhom" placeholder="Tennhom" />
                            </div>
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