<?php
$act = "hanghoa";
if (isset ($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'hanghoa':
        include_once "./View/hanghoa.php";
        break;
    case 'insert_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case 'insert_action':
        // nhận thông tin
        if (isset ($_SERVER['REQUEST_METHOD']) == "POST") {
            $idnuoc = $_POST['mahh'];
            $maloainuoc = $_POST['manuoc'];
            $tennuoc = $_POST['tennuoc'];
            $giamgia = $_POST['giamgia'];
            $slx = $_POST['slx'];
            $mota = $_POST['mota'];
            // đem dữ liệu này lưu vào database
            $hh = new hanghoa();
            $check = $hh->insertHangHoa($maloainuoc, $tennuoc, $giamgia, $slx, $mota);
            if ($check !== false) {
                echo '<script>alert("Thêm dữ liệu thành công");</script>';
                // echo '<meta http-equiv=refresh content="0;url=/index.php?action=hanghoa"/>';
                include_once "./View/hanghoa.php";

            } else {
                echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                include_once "./View/edithanghoa.php";
            }
        }
        break;
    case 'update_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case 'update_action':
        if (isset ($_SERVER['REQUEST_METHOD']) == "POST") {
            $idnuoc = $_POST['mahh'];
            $tennuoc = $_POST['tennuoc'];
            $slx = $_POST['slx'];
            $mota = $_POST['mota'];
            // đem dữ liệu này lưu vào database
            $hh = new hanghoa();
            // $check=$hh->insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota);
            $check = $hh->updateHangHoa($idnuoc, $tennuoc, $slx, $mota);
            if ($check !== false) {
                echo '<script>alert("Update dữ liệu thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=index.php?action=hanghoa"/>';
            } else {
                echo '<script>alert("UPdate dữ liệu ko thành công");</script>';
                include_once "./View/edithanghoa.php    ";
            }
        }
        break;
    case 'delete_hanghoa':
        if (isset ($_GET['id'])) {
            $id = $_GET['id'];
        }
        $hh = new hanghoa();
        $check = $hh->xoaHangHoaID($id);

        if ($check !== false) {
            echo '<script>alert("Xóa hàng hóa thành công");</script>';
            echo '<meta http-equiv=refresh content="0;url=index.php?action=hanghoa"/>';
        } else {
            echo '<script>alert("Xóa hàng hóa không thành công");</script>';
            include_once "./View/edithanghoa.php    ";
        }

        break;
}

?>