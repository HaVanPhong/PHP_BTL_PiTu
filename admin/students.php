<?php
    global $conn;
// Hàm kết nối database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', 'thanhtb01', 'btlnhom9') or die (`Can't not connect to database`);
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
    }
}   
 
// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}
 
// Hàm lấy tất cả sinh viên
function get_all_students()
{
    
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả sinh viên
    $sql = "SELECT * FROM student";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm lấy sinh viên theo ID
function get_student($student_id)
{
    
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();

    // Câu truy vấn lấy tất cả sinh viên
    $sql = "SELECT * FROM student WHERE studentID = {$student_id}";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm thêm sinh viên
function add_student($student_mail, $student_name, $student_phone, $student_address, $student_birthday, $student_money, $account_id)
{
    
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $student_mail = addslashes($student_mail);
    $student_name = addslashes($student_name);
    $student_phone = addslashes($student_phone);
    $student_address = addslashes($student_address);
    $student_birthday = addslashes($student_birthday);
    $student_money = addslashes($student_money);
    $account_id = addcslashes($account_id);
     
    // Câu truy vấn thêm
    
    $sql = "INSERT INTO `student`(`studentName`, `studentPhone`, `studentAdress`, `studentEmail`, `studentDate_Birth`, `studentMoney`, `accountID`)
     VALUES (
                '$student_name',
                '$student_phone',
                '$student_address',
                '$student_mail',
                '$student_birthday',
                '$student_money',
                '$account_id')";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm sửa sinh viên
function edit_student($student_mail, $student_name, $student_phone, $student_address, $student_birthday, $student_money)
{
    
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $student_mail = addslashes($student_mail);
    $student_name = addslashes($student_name);
    $student_phone = addslashes($student_phone);
    $student_address = addslashes($student_address);
    $student_birthday = addslashes($student_birthday);
    $student_money = addslashes($student_money);
     
    // Câu truy sửa
    $sql = "
            UPDATE student SET
            sv_name = '$student_name',
            studentName = '$student_name',
            studentPhone = '$student_phone',
            studentAdress = '$student_address',
            studentEmail = '$student_mail',
            studentDate_Birth = '$student_birthday',
            studentMoney = '$student_money'
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
// Hàm xóa sinh viên
function delete_student($student_id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();

    // Câu truy sửa
    $sql = "
            DELETE FROM student
            WHERE studentID = $student_id
    ";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}

function delete_account($account_id)
    {
        
        // // Gọi tới biến toàn cục $conn
        global $conn;

        // // Hàm kết nối
        connect_db();
        
        // Câu truy sửa
        $sql_delete = "DELETE FROM account WHERE account.accountID = $account_id";
                
        
        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql_delete);
        
        return $query;
    }
?>