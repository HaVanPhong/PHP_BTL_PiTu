<?php
    include 'connect.php';
    // require_once 'students.php';
    $id_account = $_POST['idAccount'];
    $id = isset($_POST['id']) ? (int)$_POST['id'] : '';
    
    if ($id){
        // delete_student($id);
        // delete_account($_POST['idAccount']);

        // delete student
        $sql_delete = "DELETE FROM student WHERE studentID = $id";
        $query = mysqli_query($conn, $sql_delete);
        // delete account
        $sql_delete_acc = " DELETE FROM account WHERE accountID = $id_account";
        $query_acc = mysqli_query($conn, $sql_delete_acc);
    }
    
    // Trở về trang danh sách
        header("location: dssinhvien.php");
?>