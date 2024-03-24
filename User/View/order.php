<div class="table-responsive">
 <?php 
  if(!isset($_SESSION['makh']) || count($_SESSION['cart'])<1 ):
    echo ' <script> alert("Ban chua dang nhap")</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
 ?>
<?php
  else:
    ?>
    <form action="./index.php?action.php=giohang" method="post">
      <table class="table table-bordered" border="0">
     
      <?php
        if (isset($_SESSION['masohd'])) {
          $masohd = $_SESSION['masohd'];
          $hd = new hoadon();
          $kh = $hd->selectThongTinKhachHangHoaDOn($masohd);
          $ngay = $kh['ngaydat'];
          $tenkh = $kh['tenkh'];
        ?>    
       <tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>
      <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $masohd; ?></td> 
          <td colspan="2"> Ngày lập:  <?php echo $ngay ?></td>
        </tr>
       <tr>
          <td colspan="2">Họ và tên:  <?php echo $tenkh ?></td>
          <td colspan="2"></td>
        </tr>
       
      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>

          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
           
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $j = 0;
          $sp = $hd->selectThongTinHHID($masohd);
          while ($set = $sp->fetch()):
            $j++;
          ?>
            <tr>
              <td><?php echo $j ?></td>
              <td> <?php echo $set['tennuoc']; ?> <br /></td>
             
              <td>Đơn Giá:
                <?php echo number_format($set['dongia']); ?> - Số Lượng:
                <?php echo $set['soluongmua']; ?> <br />
              </td>
            </tr>
          <?php endwhile ?>

            <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>
                <?php $gh = new giohang();
                echo $gh->getSubTotal();
                }
                ?>
                <sup><u>đ</u></sup>
              </b>
            </td>
            </tr>

          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b> <sup><u>đ</u></sup></b>
            </td>
           
          </tr>
        </tbody>
      </table>
    </form>
    <?php endif; ?>
</div>
</div>