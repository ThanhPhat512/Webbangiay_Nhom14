
            <?php
                if(isset($_GET["ac"])){
                    $tam=$_GET["ac"];
                } else{
                    $tam='';
                }
                if($tam=='them'){
                    include("modules/quanlinhomhanghoa/them.php");
                }
                if($tam=='sua'){
                    include("modules/quanlinhomhanghoa/sua.php");
                }
                if($tam=='xoa'){
                    include("modules/quanlinhomhanghoa/xoa.php");
                }
                if($tam==''){
                    include("index.php");
                }
            ?>
       
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-md-12">
            <?php 
                include("modules/quanlinhomhanghoa/lietke.php");
            ?>
        </div>
    </div>
</div>
      