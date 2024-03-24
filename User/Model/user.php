<?php
class user
{
    //phuong thuc kiem tra trung username va email
    function checkKhachHang($user, $email)
    {
        $db = new connect();
        $select = "SELECT a.username,a.email FROM khachhang a WHERE a.username='$user' or a.email='$email'";
        $result = $db->getList($select);
        return $result;
    }
    //phuong thuc insret vao data
    function insertKhachHang($tenkh,$username,$matkhau,$email,$diachi,$sodienthoai)
    {
        $db = new connect();
        $query="INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoat`) 
        VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodienthoai');";
        //exec
       
        $result = $db->exec($query);
        return $result;
    }
    //pt log
    function logKhachHang($user, $pass){    
        $db = new connect();
        $select = "select a.makh, a.tenkh, a.username from khachhang a WHERE a.username='$user' and a.matkhau='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkEmail($email)
        {
            $db=new connect();
            $select="select * from khachhang a
             WHERE a.email='$email'";
            $result=$db->getList($select);
            return $result;
        }
        function updatePassEmail($email,$pass){
            $db=new connect();
            $query="update khachhang set matkhau='$pass' where email='$email'";
            $db->exec($query);
        }
}
?>