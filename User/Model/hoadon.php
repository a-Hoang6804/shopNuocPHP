<?php
class hoadon
{
    function insertHoadon($makh)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $db = new connect();
        $query = "insert into hoadon(masohd,makh,ngaydat,tongtien) values(Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select masohd from hoadon order by masohd desc limit 1";
        $mahd = $db->getInstance($select);
        return $mahd[0];
    }
    function insertCTHoadon($masohd, $mahh, $soluongmua, $thanhtien)
    {
        $db = new connect();
        $query = "insert into cthoadon(masohd,mahh,soluongmua,thanhtien,tinhtrang) 
    values($masohd,$mahh,$soluongmua,$thanhtien,0)";
        $db->exec($query);
    }
    // tính tổng tiền vào bảng hóa đơn
  
    // hien thị thông tin khác hàng dựa vào số hóa đơn
    function selectThongTinKhachHangHoaDOn($masohd)
    {
        $db = new connect();
        $select = "SELECT b.masohd, b.ngaydat,a.tenkh  FROM khachhang a  INNER JOIN hoadon b on a.makh=b.makh WHERE masohd=$masohd";
        $result = $db->getInstance($select);
        return $result;

    }
    function selectThongTinHHID($masohd)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.tennuoc,b.dongia,c.soluongmua FROM nuoc a,ctnuoc b, cthoadon c WHERE a.idnuoc=b.manuoc and a.idnuoc=c.mahh and c.masohd=$masohd";
        $result = $db->getList($select);
        return $result;
    }
    function updateHoaDonTine($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$tongtien  WHERE masohd=$masohd and makh=$makh;";
        $db->exec($query);

    }
}

?>