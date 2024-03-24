<div class="col-md-12 ms-sm-auto col-lg-9 p-1">

<?php
if (isset($_SESSION['makh'])) {
    $makh = $_SESSION['makh'];
    $hd = new hoadon();
    $sohd = $hd->insertHoadon($makh);
    $_SESSION['masohd'] = $sohd;
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
        $hd->insertCTHoadon($sohd, $item['mahh'], $item['soluong'], $item['thanhtien']);
        // $hd->updateSoLuongTon($item['mahh'], $item['soluong']);
        $total += $item['thanhtien'];
    }
    $hd->updateHoaDonTine($sohd, $makh, $total);
}
include_once "./View/order.php";

?>

</div>