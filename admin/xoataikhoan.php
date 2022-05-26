<?php
    include 'connect.php';
    
    $id = isset($_POST['idAccount']) ? (int)$_POST['idAccount'] : '';
    if($id){
        // $sql_delete = "DELETE FROM account WHERE accountID = $id";
        // $query = mysqli_query($conn, $sql_delete);
    }
    
    //Trở về trang danh sách
        header("location: index.php?quanly=taikhoan");
?>