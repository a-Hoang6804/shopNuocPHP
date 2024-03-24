<?php 
    class giohang{
        function addCart($mahh,$soluong)
        {
            $sanpham=new hanghoa();
            $sp=$sanpham->getHangHoaid($mahh);
            $tenhh=$sp['tennuoc'];
            $dongia=$sp['dongia'];
            //lay hinh
            $hinh=$sanpham->getHangHoaIdSize($mahh);
            $img=$hinh['hinh'];
            $total=$soluong*$dongia;
            $flag=false;
            //truoc khi dua project vao gio hang kiem tra xem gio co hang hay ko
            foreach ($_SESSION['cart'] as $key => $item) {
                if($item['mahh']==$mahh){
                    $flag=true;
                    $soluong+=$item['soluong'];
                    $this->updateHH($key,$soluong);
                }
            }
        if($flag==false){
            //gio hang chua 1 mon hang, mon hang la 1 project;
            $item=array(
                'mahh'=>$mahh,//thuoc tinh->gia tri, trong do thuoc tinh tu dat
                'tenhh'=>$tenhh,
                'hinh'=>$img,
                // 'size'=>$size,
                'soluong'=>$soluong,
                'dongia'=>$dongia,
                'thanhtien'=>$total
            );
            //dem doi tuong add vao gio hang
            $_SESSION['cart'][]=$item;
        }
        /**
         * a[1][mausac]
         * $_session['cart]=({
         *  mahh:22, tenhh:giay cao got, mausac:trang, sizeL35, dongia:500,soluong:1, thanhtien:500;
         * })
         */
        }
        //phuong thuc tinh tong thanh tien tren gio hang
        function getSubTotal(){
            $subtotal=0;
            foreach ($_SESSION['cart'] as $key => $item) {
                $subtotal+=$item['thanhtien'];
            }
            $subtotal=number_format($subtotal);
            return $subtotal;
        }
        function updateHH($index,$soluong){
            if($soluong<=0){
                unset($_SESSION['cart'][$index]);
            }else{
                $_SESSION['cart'][$index]['soluong']=$soluong;
                $tiennew=$_SESSION['cart'][$index]['soluong']*$_SESSION['cart'][$index]['dongia'];
                $_SESSION['cart'][$index]['thanhtien']=$tiennew;
            }
        }
    }
?>