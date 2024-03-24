<?php 
    class hanghoa{
        //Phuong thuc hien thi san pham new
        function gethanghoaNew(){
        //b1: ket noi voi du lieu
        $db= new connect();
        //b2: can lay cai gi thi truy van cai do
        $select=" SELECT a.tennuoc, a.hinh,a.giamgia,a.soluotxem ,b.dongia,b.manuoc,a.idnuoc  FROM nuoc a ,ctnuoc b WHERE a.idnuoc = b.manuoc LIMIT 8;";
        $result=$db->getList($select);
        return $result;//lay duoc du lieu
        }
        function getHanghoaAll(){
            //b1: ket noi voi du lieu
            $db= new connect();
            //b2: can lay cai gi thi truy van cai do
            $select="select a.idnuoc,a.maloainuoc,a.giamgia,a.tennuoc,a.soluotxem,a.hinh,b.dongia from nuoc a,ctnuoc b
            WHERE a.idnuoc=b.manuoc";
            $result=$db->getList($select);
            return $result;//lay duoc du lieu
        }
        function getHangHoaAllSale(){
            //b1: ket noi voi du lieu
            $db= new connect();
            //b2: can lay cai gi thi truy van cai do
            $select="select a.maloainuoc, a.tennuoc, a.hinh, a.giamgia, a.soluotxem, b.dongia from nuoc a, ctnuoc b WHERE a.maloainuoc=b.manuoc and a.giamgia!=0 ORDER by a.maloainuoc DESC LIMIT 4;";
            $result=$db->getList($select);
            return $result;//lay duoc du lieu
        }
        function getTrung($id){
            $db= new connect();
            //b2: can lay cai gi thi truy van cai do
            $select="SELECT DISTINCT a.tennuoc, a.hinh FROM nuoc a, ctnuoc b WHERE a.maloainuoc=b.manuoc and a.maloainuoc=$id";
            $result=$db->getList($select);
            return $result;//lay duoc du lieu
        }
        function getHangHoaid($id){
            $db=new connect();
            $select="SELECT DISTINCT a.hinh, a.tennuoc,a.maloainuoc,a.mota,b.soluongton,b.dongia FROM nuoc a, ctnuoc b WHERE a.idnuoc=b.manuoc and a.idnuoc=$id";
            $result=$db->getInstance($select);
            return $result;//tra ve 1 row, array(mahh:19, tenhh:giay)
        }
        function getLoaiHinh(){
            $db=new connect();
            $select=" SELECT b.dongia,a.tennuoc, a.banghinh FROM loainuoc a,ctnuoc b  WHERE a.idnuoc=b.idnuoc";
            $result=$db->getList($select);
            return $result;  
        }
        //lay hinh san pham
        function getHangHoaHinh($id){
            $db=new connect();
            $select="select a.hinh from nuoc a, ctnuoc b WHERE a.idnuoc=b.manuoc and b.manuoc=$id";
            $result=$db->getList($select);
            return $result;
        }
        //lay size
        function getHangHoaSize($id){
            $db=new connect();
            $select="select b.idsize, b.tensize from ctnuoc a ,size b WHERE a.idsize=b.idsize AND a.idnuoc=$id";
            // $select="select b.idsize, b.tensize from ctnuoc a ,size b WHERE a.idnuoc=$id";
            $result=$db->getList($select);
            return $result;
        }
        //lay hinh
            function getHangHoaIdSize($id){
                $db=new connect();  
                // $select="select DISTINCT a.hinh from cthanghoa a, sizegiay c WHERE a.idsize=c.Idsize and a.idhanghoa=$id and c.size=$size";
                $select="SELECT DISTINCT a.hinh from nuoc a WHERE a.idnuoc=$id";
                $result=$db->getInstance($select);
                return $result; 
            }
            function selectTimKiem($tennuoc){
                $db=new connect();
                // $select="SELECT a.tennuoc,a.hinh,a.soluotxem,a.mota,b.dongia from nuoc a, ctnuoc b WHERE a.maloainuoc=b.idnuoc and a.tennuoc like '%$tennuoc%' ORDER by a.maloainuoc desc";
                $select="SELECT a.tennuoc,a.hinh,a.soluotxem,a.mota,b.dongia from nuoc a, ctnuoc b WHERE a.idnuoc=b.manuoc and a.tennuoc like '%$tennuoc%' ORDER by  a.maloainuoc desc";
                $result=$db->getList($select);
                return $result;   
            }
    }
?>