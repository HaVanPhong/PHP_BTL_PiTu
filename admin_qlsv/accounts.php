<?php
    require 'students.php';
    function delete_account($account_id)
    {
        
        // // Gọi tới biến toàn cục $conn
        global $conn;

        // // Hàm kết nối
        connect_db();
        
        // Câu truy sửa
        $sql_delete = "
                DELETE FROM account
                WHERE accountID = $account_id
        ";
        
        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql_delete);
        
        return $query;
    }
?>