<?php
// unset($_SESSION['cart']);
if (!isset($_SESSION['cart'])) {
    //tao gio hang
    $_SESSION['cart'] = array();
}
$act = 'giohang';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'giohang_action':
        $id=0;
        // $size=0;
        $soluong=0;
        if(isset($_POST['mahh'])){
            // echo "asaajagjagjgajgajagjagjagajgajgajgajgajah";
            $id=$_POST['mahh'];
            // $size=$_POST['size'];
            $soluong=$_POST['soluong'];
            $gh= new giohang();
            $gh->addCart($id,$soluong);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;
        case 'giohang_xoa':
        //nhan key
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            unset($_SESSION['cart'][$id]);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;
        case 'update_gh';
        //nhan gia tri
        if(isset($_POST['newqty'])){
            $newqty=$_POST['newqty'];
            foreach ($newqty as $key => $value) {
                if($_SESSION['cart'][$key]['soluong']!=$value){
                    $gh=new giohang();
                    $gh->updateHH($key,$value);
                }
            }
        }
        echo `<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>`;
        break;
}
?>
