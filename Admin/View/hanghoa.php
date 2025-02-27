<div class="col-md-4 col-md-offset-4">
  <h3><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div class="row col-12">
  <a href="index.php?action=hanghoa&act=insert_hanghoa">
    <h4>Thêm sản phẩm</h4>
  </a>
</div>
<div class="row">
  <table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Số lượt xem</th>
        <th>Giảm giá</th>
        <th>Mô tả</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $result = $hh->getHangHoa();
      while ($set = $result->fetch()):
        ?>
        <tr>
          <td>
            <?php echo $set['idnuoc']; ?>
          </td>
          <td>
            <?php echo $set['tennuoc']; ?>
          </td>
          <td>
            <?php echo $set['soluotxem']; ?>
          </td>
          <td>
            <?php echo $set['giamgia']; ?>
          </td>
          <td>
            <?php echo $set['mota']; ?>
          </td>
          <td><a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['idnuoc']; ?>">Cập nhật</a></td>
          <td><a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['idnuoc']; ?>">Xóa</a></td>
        </tr>
        <?php
      endwhile;
      ?>
    </tbody>
  </table>
</div>