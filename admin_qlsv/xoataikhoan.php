<?php
    
    require 'students.php';
    $id = isset($_POST['idAccount']) ? (int)$_POST['idAccount'] : '';
    if($id){
        delete_account($id);
    }
    
    //Trở về trang danh sách
        header("location: dstaikhoan.php");
?>