<?php
    $severname="localhost";
    $username="root";
    $password="";
    $database="btlNhom9";

        $conn= new mysqli($severname,$username,$password,$database);
        mysqli_set_charset($conn, "utf8");
    
    if(mysqli_connect_errno()){
        echo "loi ket noi".mysqli_connect_error();
        echo "Không thể kết nối database";
        exit();
    }
    

?>