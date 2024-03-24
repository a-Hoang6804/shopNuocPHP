<?php
    class loai{
        function getLoai()
        {
            $db=new connect();
            $select="select * from loainuoc";
            $result=$db->getList($select);
            return $result;
        }
    }
?>