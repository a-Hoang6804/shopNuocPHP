<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $hh = new hanghoa();
  $sanpham = $hh->getHangHoaid($id);
}
?>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

<title>Pixie - Product Detail</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript">
  function chonsize(a) {
    document.getElementById("size").value = a;
  }
</script>
<!-- Additional CSS Files -->
<link rel="stylesheet" href="chitietCSS/assets/css/fontawesome.css">
<link rel="stylesheet" href="chitietCSS/assets/css/tooplate-main.css">
<link rel="stylesheet" href="chitietCSS/assets/css/owl.css">
<link rel="stylesheet" href="chitietCSS/assets/css/flex-slider.css">
<!-- Page Content --> 
<!-- Single Starts Here -->
<div class="single-product col-md-8 ms-sm-auto col-lg-9 p-0">
  <div class="container">
    <div class="row">
      <?php
      $hh = new hanghoa();
      $sp = $hh->getHangHoaid($id);
      $tennuoc = $sp['tennuoc'];
      $dongia = $sp['dongia'];
      $mota = $sp['mota'];
      $soluongton = $sp['soluongton'];
      $hinh = $sp['hinh'];
      ?>
      <div class="col-md-12">

      </div>
      <div class="col-md-6">
        <div class="product-slider">
          <div id="slider" class="flexslider">
            <ul class="slides">
              <li>
                <img style="height:500px; width:400px" src=".\images\<?php echo $hinh ?>" />
              </li>
              <!-- items mirrored twice, total of 12 -->
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- <div class="rating">
            <div class="pstar" data-pid="<?=$id?>">
              Your rating:
                for($i=1;$i<=5;$i++){
                  $img=$i<=$rating?"star":"star-blank";
            echo "<img src='Content/imagetourdien/$img.png'; style='width:20px; height: 20px; cursor:pointer;' data-set='$i'>";
                }
              
              
            </div>
        </div> -->
        <div class="right-content">
          <h2 style="color:#FFCC00">
            <?php echo $tennuoc ?>
          </h2>
          <h6>
            <?php echo $dongia ?><sup><u>đ</u></sup>
          </h6>
          <h4>
            <?php echo $mota ?>
          </h4>

          <form action="index.php?action=giohang&act=giohang_action" method="post">
            <h4>Quantity:</h4>
            <input type="hidden" name="mahh" value="<?php echo $id;?>">
           
            <input name="soluong" type="soluong" class="soluong-text" id="soluong"
            onBlur="if(this.value == '') { this.value = '1';}"
              value="1"><br>
            
            <button type="submit" name="submit">MUA HANG</button>
          </form>

          <div class="down-content">
            <div class="categories">
              <h4>Quantity In Stock: <h5><a href="#">
                    <?php echo $soluongton ?>
                  </a> ly</h5>
              </h4>
              <br>
            </div>
            <div class="share">
              <h4>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                      class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h4>
            </div>
            <?php 
              if(isset($_SESSION['makh'])):
            ?>
            <p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="index.php?action=binhluan" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="<?php echo $id;?>"/>
        <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; />
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
            placeholder="Thêm bình luận">  </textarea>
        <input type="submit" name="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<?php 
  endif;
?>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
    <?php 
      $bl=new binhluan();
      $noidung=$bl->selectBinhLuan($id);
      while($set=$noidung->fetch()):
    ?>
</div>
<div class="row">
    <br/>
    <!-- <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; /> -->
    <p>
      <?php
        echo '<b>'.$set['username'].'</br>:'.$set['content'];
      ?>
    </p>
</div>
<?php 
  endwhile;
?>
<hr>
<div>
  <div class="row">
    <br>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Single Page Ends Here -->


<!-- Bootstrap core JavaScript -->
<script src="chitietCSS/vendor/jquery/jquery.min.js"></script>
<script src="chitietCSS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="chitietCSS/assets/js/custom.js"></script>
<script src="chitietCSS/assets/js/owl.js"></script>
<script src="chitietCSS/assets/js/isotope.js"></script>
<script src="chitietCSS/assets/js/flex-slider.js"></script>


<script language="text/Javascript">
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t) {                   //declaring the array outside of the
    if (!cleared[t.id]) {                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value = '';         // with more chance of typos
      t.style.color = '#fff';
    }
  }
</script>