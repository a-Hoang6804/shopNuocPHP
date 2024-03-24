<?php 
    class connect{
        //thuoc tinh
        var $db= null;
        //ham tao duoc goi khi new 1 doi tuong
        function __construct(){
            $dsn='mysql:host=localhost;dbname=shopnuoc';
            
            $user='root';
            $pass=''; //neu sai xamp, wamp, laragon thi $pass='';
            //ket noi dua vao class PDO 
            try {
                $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
                // echo ("ket noi thanh cong");
            } catch (\Throwable $th) {
                //throw $th;    
                echo ("Ket noi that bai");
                echo $th;
            }
        }
        //phuong thuc truy van tra ra nhieu row
        function getList($select){
            $result=$this->db->query($select);//this->db->(select*from hanghoa)
            return $result;//$result tra ve 1 table
        }
         //phuong thuc truy van tra ve 1 row
         function getInstance($select){
            $result=$this->db->query($select);//this->db->(select*from hanghoa)
            $results=$result->fetch();//$result la arr chi chua 1 dong. [mamh:1, tenmh:giay...]
            return $results;
         }
         //cau lenh insert, add, delete, update ai lam? exex
         function exec($query){
            $results=$this->db->exec($query);
            return $results;
         }
         //dung prepare
         function execp($query){
            $results=$this->db->prepare($query);
            return $results;
         }
    }
?>