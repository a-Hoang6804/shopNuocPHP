<?php 
    class page{
        //pt tinh so trang
        function findPage($count,$limit){
            $page=(($count%$limit)==0?$count/$limit:ceil($count/$limit));
            return $page;
        }
        //phuong thuc tinh start dua vao URl, tuc la trang hien tai
        //tao 1 bien chua trang hien tai, ten la page
        function findStart($limit){
            if(!isset($_GET['page']) || $_GET['page']==1){
                $start=1;
            }else{
                $start=($_GET['page']-1)*$limit;
            }
            return $start;
        }
    }
?>