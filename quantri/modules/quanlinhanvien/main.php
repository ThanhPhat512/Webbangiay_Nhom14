
    <?php
    if(isset($_GET["ac"])){
        $tam=$_GET["ac"];
    }
    else{
        $tam='';
    }
    if($tam=='them'){
        include("modules/quanlinhanvien/them.php");
    }
    if($tam=='sua'){
        include("modules/quanlinhanvien/sua.php");
    }
    if($tam==''){
        include("index.php");
    }
    ?>


    
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-md-12">
            <?php 
                include("modules/quanlinhanvien/lietke.php");
            ?>
        </div>
    </div>
</div>