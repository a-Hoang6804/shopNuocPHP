<?php

$act = "dangnhap";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/login.php";
        break;
    case 'dangnhap_action':
        if (isset($_POST['submit'])) {
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpassword'];
            $saltF = "ASDW31!";
            $saltL = "SAD!";
            $passnew = md5($saltF . $pass . $saltL);
            $kh=new user();
            $logkh=$kh->logKhachHang($user,$passnew);//tra ve array
            if($logkh){
                //meu dang nhap thanh cong, thi tao session de luu tru thongtin kh
                $_SESSION['makh']=$logkh['makh'];
                $_SESSION['tenkh']=$logkh['tenkh'];
                echo '<script> alert("Dang nhap thanh cong"); </script>';
                //include.once echo "View/registation";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            }else{
                echo '<script> alert("Dang nhap khong thanh cong");</script>';
                //include.once echo "View/registation";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
            }
        }
        break;
        case 'dangxuat':
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
}
?>