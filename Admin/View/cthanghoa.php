
<div class="row col-md-4 col-md-offset-4" >
  <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng hóa</td>
        <td> <select name="idnuoc" class="form-control" style="width:150px;">
            <?php
              $hh=new hanghoa();
              $hang=$hh->getHangHoa();
              while($set=$hang->fetch()):
            ?>
            <option value="<?php echo $set['idnuoc'];?>"><?php echo $set['tennuoc'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Size</td>
        <td> <select name="mamau" class="form-control" style="width:150px;">
        <?php
              $hh=new hanghoa();
              $hang=$hh->getSize();
              while($set=$hang->fetch()):
            ?>
            <option value="<?php echo $set['idsize'];?>"><?php echo $set['tensize'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
     
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" >
     
      <tr>
        <td>Số lượng tồn</td>
        <td><input type="text" class="form-control" name="slt" >
        </td>
      </tr>
     
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia" ></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
        </td>
      </tr>

    </table>
  </form>
</div>