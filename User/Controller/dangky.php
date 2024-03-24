<?php
$act = 'dangky';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once "./View/registration.php";
        break;
    case 'dangky_action':
        //nhan thong tin
        $tenkh = '';
        $diachi = '';
        $sodt = '';
        $user = '';
        $email = '';
        $pass = '';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $diachi = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpass'];
            //ma hoa pass
            $saltF = "ASDW31!";
            $saltL = "SAD!";
            $passnew = md5($saltF . $pass . $saltL);
            $kh = new user();
            $check = $kh->checkKhachHang($user, $email)->rowCount();
            if ($check >= 1) {
                echo '<script> alert("Username va email da ton tai");</script>';
                //include.once echo "View/registation";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';
            }else{
               $iskh=$kh->insertKhachHang($tenkh,$user,$passnew,$email,$diachi,$sodt);
               if($iskh!=false){
                echo '<script> alert("Đăng ký thành công")</script>';
                
                include_once "./View/home.php";
               }else{
                echo '<script> alert("Đăng ký ko thành công")</script>';

                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangky"/>';
               }
            }
        }
        break;
}

?>
