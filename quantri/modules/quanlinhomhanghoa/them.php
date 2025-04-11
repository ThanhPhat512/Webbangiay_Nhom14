
<div class="modal-body container">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <p class=" nav nav-tabs col-md-12">Thêm nhóm hàng hóa</p>
            
            <!-- Tab panes -->
            
                <div class="tab-pane">
                    <form role="form" class="form-horizontal" action="modules/quanlinhomhanghoa/xuli.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="manhom" class="col-md-12 control-label">Mã Nhóm</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  id="manhom" name="manhom"/>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tennhom" class="col-md-12 control-label">Tên Nhóm</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="tennhom" id="tennhom" />
                            </div>
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