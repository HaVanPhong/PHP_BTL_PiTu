<?php
    include 'connect.php';
    
    $id = isset($_POST['id']) ? (int)$_POST['id'] : '';
    $id_account = $_POST['idAccount'];
    if ($id){

        // delete student
        $sql_delete = "DELETE FROM student WHERE studentID = $id";
        $query = mysqli_query($conn, $sql_delete);
        // delete account
        $sql_delete_acc = " DELETE FROM account WHERE accountID = $id_account";
        $query_acc = mysqli_query($conn, $sql_delete_acc);
    }
    
    // Trở về trang danh sách
        header("location: index.php?quanly=hocvien");
?>