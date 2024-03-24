<!--Section: Examples-->
<section id="examples" class="text-center">

    <!-- Heading -->
    <div class="row offset-md-6">
        <div class="col-lg-8 text-right">
            <i><h3 class="mb-5 font-weight-bold" style="color: #FF9900;font-size:20px">SẢN PHẨM MỚI NHẤT</h3></i>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=sanpham&act=sanphamkhuyenmai">
                <span style="color: gray;">Xem chi tiết</span>
        </div>
        </a>
    </div>
    <!--Grid row-->
    <div class="row offset-md-3">
        <?php
        $hh = new hanghoa();
        $result = $hh->gethanghoaNew(); //veiw lay duoc du lieu la 8 san pham
        //đỗ dữ liệu len veiw
        while ($set = $result->fetch()): //set=arr(mahh:24, tenhh:giay)
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-5 text-left">
                <div class="view overlay z-depth-1-half">
                    <img style="height: 200px; width:200px;" src=".\images\<?php echo $set['hinh'] ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h5 class="my-4 font-weight-bold" style="color: #BB0000;">
                    <?php echo number_format($set['dongia']); ?><sup><u>đ</u></sup>
                </h5>
                   
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['idnuoc']; ?>">
                    <span>
                        <?php echo $set['tennuoc']?>
                    </span></a>
                <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                <h5 style="font-size:15px; padding-top: 10px; text-align: center">Số lượt xem: <?php echo $set['soluotxem'] ?></h5>
            </div>
            <?php
        endwhile;
        ?>
    </div>
    <!--Grid row-->
</section>
<!-- end sản phẩm mới nhất -->
<!-- sản phẩm khuyến mãi -->
<section id="examples" class="text-center">
    <!-- Heading -->
    <div class="row offset-md-6">
        <div class="col-lg-8 text-right">
            <i><h3 class="mb-5 font-weight-bold" style="color: #FF9900;font-size:20px">SẢN PHẨM KHUYẾN MÃI</h3></i>
        </div>
        <div class="col-lg-4 text-right mt-4">
            <a href="index.php?action=sanpham">
                <span style="color: gray;">Xem chi tiết</span>
        </div>
        </a>
    </div>
    <!--Grid row-->
    <div class="row offset-md-3">
        <?php
        $ss = new hanghoa();
        $result = $ss->getHangHoaAllSale(); //veiw lay duoc du lieu la 8 san pham
        //đỗ dữ liệu len veiw
        while ($set = $result->fetch()): //set=arr(mahh:24, tenhh:giay)
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3 text-left">
                <div class="view overlay z-depth-1-half">
                    <img style="height: 200px; width:200px;" src="images\<?php echo $set['hinh'] ?>" class="img-fluid" alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>
                <h5 class="my-4 font-weight-bold">
                    <?php echo'<font color="red">'.number_format($set['dongia']-$set['giamgia']).'<sup><u>đ</u></sup></font>
                        <strike>'.number_format($set['giamgia']).'</strike><sup><u>đ</u></sup>'?>
                </h5>
                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['maloainuoc']; ?>">   
                    <span>
                        <?php echo $set['tennuoc']; ?>
                    </span></br></a>
                <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                <h6 style="font-size:15px; padding-top: 10px; text-align: center">Số lượt xem: <?php echo $set['soluotxem'] ?></h6>
                
            </div>
            <?php
        endwhile;
        ?>
    </div>
    <!--Grid row-->
</section>
<!-- end sản phẩm khuyến mãi -->