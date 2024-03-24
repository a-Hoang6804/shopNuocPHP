<div class="container-fluid">
    <div class="row">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

            <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                <a class="navbar-brand" href="index.html">
                    <img src="images/hinh-anh-ly-ca-phe-muoi.jpg" class="logo-image img-fluid" align="">
                </a>
                <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <!-- <a href="Trangchu.php?trang=tk"> -->
                                        <input class="input-group-text" style="height: 35px;" type="submit"
                                            id="btsearch" value="Tìm Kiếm" />
                                        <!-- </a> -->
                                        <!-- <span class="input-group-text">@</span> -->
                                        <input type="text" name="txtsearch" class="form-control"
                                            placeholder="Tìm Kiếm" />
                                    </div>
                                </div>
                            </form> 
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php?action=home">Trang Chủ</a>
                    </li>
                    <li>
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php?action=dangky">Đăng Kí</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php?action=dangnhap">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php?action=dangnhap&act=dangxuat">Đăng Xuất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php?action=giohang">Giỏ Hàng</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--BÊN PHẢI MENU-->
        
        <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
            
            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <h1 class="text-white mb-lg-3 mb-4"><strong>Cà<em> Phê</em></strong></h1>
                            <p class="text-black">Luôn Hài Lòng Khách Hàng</p>
                           
                            <br>
                            <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2"
                                href="#section_2">Nay chúng ta uống gì</a>

                            <a class="btn custom-btn smoothscroll mb-2" href="#section_3">CAFE Việt Nam</a>
                        </div>
                        
                    </div>
                    
                </div>
               
                <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
                    <img src="images/download.jpg" class="custom-block-image img-fluid" alt="">

                    <h4><strong class="text-white">Hurry Up! Just Drink.</strong></h4>

                    <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Book a
                        seat</a>
                </div>
            </section>
            
            <?php 
                    if(isset($_SESSION['makh'])){
                        echo '
                        <p style="text-transform: uppercase;font-size:100px;
                        color:red; font-size:25px; margin-top:20px; margin-left: 10px;font-weight: bold">XIN CHÀO BẠN '.$_SESSION['tenkh'].  '</p>
                        ';
                    }else{
                        echo '
                        <p style="color:red; margin-top:20px; margin-left: 0px;text-transform: uppercase;font-weight: bold">Xin Chào!</p>
                        ';
                    }   
                ?>
            <section class="services-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <b><h2 class="mb-5">DANH MỤC</h2></b>
                        </div>
                        <?php
                        $hh = new hanghoa();
                        $result = $hh->getLoaiHinh(); //veiw lay duoc du lieu la 8 san pham
                        //đỗ dữ liệu len veiw
                        while ($set = $result->fetch()): //set=arr(mahh:24, tenhh:giay)
                            ?>
                            <div class="col-lg-6 col-12 mb-4">
                                <div class="services-thumb">
                                    <img style="height: 358px; width: 636px;" src="images/<?php echo $set['banghinh'] ?>" class="services-image img-fluid" alt="">
                                    <div class="services-info d-flex align-items-end">
                                        <h4 class="mb-0">
                                            <?php echo $set['tennuoc'] ?>
                                        </h4>
                                        <strong class="services-thumb-price"> <?php echo $set['dongia'] ?><sup><u>đ</u></sup></strong>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>