<?php
    require_once 'students.php';
    $id = isset($_POST['id']) ? (int)$_POST['id'] : '';
    if ($id){
        delete_student($id);
        delete_account($_POST['idAccount']);
    }
    
    // Trở về trang danh sách
        header("location: dssinhvien.php");
?>