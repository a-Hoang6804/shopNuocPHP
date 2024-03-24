<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select * from nuoc";
        $result = $db->getList($select);
        return $result;
    }
    //phương thức insert
    function insertHangHoa($maloainuoc, $tennuoc, $giamgia, $slx, $mota)
    {
        $db = new connect();
        $query = "INSERT INTO `nuoc` (`idnuoc`, `maloainuoc`, `tennuoc`, `hinh`, `giamgia`, `soluotxem`, `mota`)
             VALUES (NULL, '$maloainuoc', '$tennuoc', '1.jpg', '$giamgia', '$slx', '$mota');";
        $result = $db->exec($query);
        return $result;
    }
    // lấy thông tin 1 sản phẩm
    function getHangHoaID($id)
    {
        $db = new connect();
        $select = "select * from nuoc where idnuoc=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateHangHoa($idnuoc, $tennuoc, $slx, $mota)
    {
        $db = new connect();
        $query = "update nuoc set tennuoc='$tennuoc',soluotxem=$slx,mota='$mota' where idnuoc=$idnuoc;";
        $result = $db->exec($query);
        return $result;
    }
    function getMau()
    {
        $db = new connect();
        $select = "select * from mausac";
        $result = $db->getList($select);
        return $result;
    }
    function getSize()
    {
        $db = new connect();
        $select = "select * from size";
        $result = $db->getList($select);
        return $result;
    }
     function getDongia()
    {
        $db = new connect();
        $select = "select * from ctnuoc";
        $result = $db->getList($select);
        return $result;
    }
    // phương thức thống kê
    function getThongKe()
    {
        $db = new connect();
        $select = "SELECT b.tennuoc,sum(a.soluongmua)as soluong FROM cthoadon a,nuoc b WHERE a.mahh=b.maloainuoc GROUP by b.tennuoc";
        $result = $db->getList($select);
        return $result;
    }

    function xoaHangHoaID($id)
    {
        $db = new connect();
        $select = "DELETE FROM nuoc WHERE `nuoc`.`idnuoc` = $id";
        $result = $db->exec($select);
        return $result;
    }
}
?>