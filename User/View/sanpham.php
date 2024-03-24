
 <?php 
    $ac=1;
    if(isset($_GET['action'])){
        if(isset($_GET['act'])&&$_GET['act']=='sanphamkhuyenmai'){
            $ac=2;
        }else if(isset($_GET['act'])&&$_GET['act']=='timkiem'){
            $ac=3;
        }else{
            $ac=1;
        }
    }
 ?>

<section id="examples" class="text-center">
    <!--Grid row-->
    <div class="row offset-md-3">

    <?php 
                if($ac==1){
                    echo '<h3 class="mb-5 font-weight-bold" style="color:red;">TẤT CẢ SẢN PHẨM KHUYẾN MÃI</h3>';
                }
                if($ac==2){
                    echo '<h3 class="mb-5 font-weight-bold" style="color:red;">TẤT CẢ SẢN PHẨM </h3>';  
                }
                if($ac==3){
                    echo '<h3 class="mb-5 font-weight-bold" style="color:red;">SẢN PHẨM TÌM KIẾM</h3>';  
                }
             ?>
        
    </div>
    <div class="row offset-md-3">
        <?php
        $hh = new hanghoa();
        if ($ac == 1) {
            $result = $hh->getHangHoaAllSale();
        }
        if ($ac == 2) {
            $result = $hh->getHanghoaAll();
        }
        if($ac==3){
            if(isset($_POST['txtsearch'])){
             $tk=$_POST['txtsearch'];
             $result=$hh->selectTimKiem($tk);
            }
         }
        ///do tung sp len view  
        while ($set = $result->fetch()):
        ?>
            <!--Grid column-->
            <div class="col-lg-4 col-md-4 mb-3 text-left">
                <div class="view overlay z-depth-1-half">
                    <img style="height: 200px; width:200px;" src="images\<?php echo $set['hinh'] ?>" class="img-fluid"
                        alt="">>
                    <div class="mask rgba-white-slight"></div>
                </div>
                <?php
                if ($ac == 1) {
                    echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">' . number_format($set['dongia'] - $set['giamgia']) . '<sup><u>đ</u></sup></font>
                        <strike>' . number_format($set['giamgia']) . '</strike><sup><u>đ</u></sup>
                    </h5>'; 
                }
                if ($ac == 2) {
                    echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">' . number_format($set['dongia'] - $set['giamgia']) . '<sup><u>đ</u></sup></font>
                        <strike>' . number_format($set['giamgia']) . '</strike><sup><u>đ</u></sup>
                    </h5>';
                }
                if ($ac == 3) {
                    echo '<h5 class="my-4 font-weight-bold">
                        <font color="red">' . number_format($set['dongia'] - $set['giamgia']) . '<sup><u>đ</u></sup></font>
                        <strike>' . number_format($set['giamgia']) . '</strike><sup><u>đ</u></sup>
                    </h5>';
                }
                ?>
                
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['maloainuoc']; ?>">
                    <span>
                        <?php echo $set['tennuoc']; ?>
                    </span></br></a>
                <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                <h6 style="font-size:15px; padding-top: 10px; text-align: center">Số lượt xem:
                    <?php echo $set['soluotxem'] ?>
                </h6>

            </div>
        <?php
        endwhile;
        ?>

    </div>
    <!--Grid row-->
</section>