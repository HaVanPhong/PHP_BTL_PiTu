<?php
    include 'connect.php';
    
    // require 'students.php';
    $id = isset($_POST['idAccount']) ? (int)$_POST['idAccount'] : '';
    if($id){
        // delete_account($id);
        $sql = " DELETE FROM account WHERE accountID = $id";
        $query = mysqli_query($conn, $sql);
    }
    
    //Trở về trang danh sách
        header("location: dstaikhoan.php");
?>