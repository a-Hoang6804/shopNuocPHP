<?php
  if(isset($_GET['id']))
  {
    $mahh=$_GET['id'];
    // truy vấn thông tin của id
    $hh=new hanghoa();
    $kq=$hh->getHangHoaID($mahh);
    $tennuoc=$kq['tennuoc'];
    $giamgia=$kq['giamgia'];
    $slx=$kq['soluotxem'];
    $mota=$kq['mota'];
  }
?>
<?php
$ac=1;
if(isset($_GET['action']))
{
  if(isset($_GET['act'])&& $_GET['act']=='insert_hanghoa')
  {
    $ac=1;
  }
  else
  {
    $ac=2;
  }
}
?>
<div class="row col-md-4 col-md-offset-4" >
  <?php
    if($ac==1)
    {
      echo '<form action="index.php?action=hanghoa&act=insert_action" method="post" enctype="multipart/form-data">';
    }
    else
    {
      echo'<form action="index.php?action=hanghoa&act=update_action" method="post" enctype="multipart/form-data">';
    }
  ?>

    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh;?>" readonly/></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tennuoc"  value="<?php if(isset($mahh)) echo $tennuoc;?>"  maxlength="100px"></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia"  value="<?php if(isset($mahh)) echo $giamgia;?>"  maxlength="100px"></td>
      </tr>
      <tr>
        <td>Mã loại</td>
        <td>
          <select name="manuoc" class="form-control" style="width:150px;">
            <?php
            $selectloai=-1;
            if(isset($manuoc) && $manuoc!=-1)
            {
              $selectloai=$manuoc;//6
            }
              $loai=new loai();
              $result=$loai->getLoai();
              while($set=$result->fetch()):
            ?>
            <option value="<?php echo $set['manuoc']?>" <?php if($selectloai==$set['manuoc']) echo 'selected';?>><?php echo $set['tennuoc'];?></option>
            <?php
              endwhile;
            ?>
          </select>
        </td>
      </tr>
      
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control"  value="<?php if(isset($slx)) echo $slx;?>" name="slx" >
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control"  value="<?php if(isset($mota)) echo $mota;?>" name="mota">
        </td>
      </tr>
     

      <tr>
        <td colspan="2">
          <input type="submit" value="submit">
          

        </td>
      </tr>

    </table>
  </form>
</div>