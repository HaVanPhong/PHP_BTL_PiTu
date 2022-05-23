<?php 
    session_start();
    include 'connect.php';
    $sql = "SELECT * FROM student ";
    $res = mysqli_query($conn, $sql);
    

?>
<div class="dssinhvien">
    <table align="center" border="1">
        <tr class="title">
            <th>Mã học viên</th>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Số dư TK</th>
            <th>Quản lý</th>
        </tr>
        <?php
            while($row= mysqli_fetch_assoc($res)){
                echo '
                    <tr>
                        <td><a href="">'.$row["studentID"].'</a></td>
                        <td><a href="">'.$row["studentName"].'</a></td>
                        <td><a href="">'.$row["studentPhone"].'</a></td>
                        <td><a href="">'.$row["studentAdress"].'</a></td>
                        <td><a href="">'.$row["studentEmail"].'</a></td>
                        <td><a href="">'.$row["studentDate_Birth"].'</a></td>
                        <td><a href="">'.$row["studentMoney"].'</a></td>
                        <td class="confirm">'?>
                            <form method="post" action="xoasinhvien.php">
                                <?php
                                    $_SESSION['studentID'] = $row['studentID'];
                                    $_SESSION['accountID'] = $row['accountID'];
                                ?>
                                <input style="margin-right: 10px" onclick="window.location = 'suasinhvien.php?id=<?php echo $row['studentID']; ?>'" type="button" value="Sửa"/>
                                <input type="hidden" name="id" value="<?php echo  $row['studentID']; ?>"/>
                                <input type="hidden" name="idAccount" value=" <?php echo $row['accountID'];?>"/>
                                
                                <input onclick="return confirm('Bạn có chắc muốn xóa sinh viên <?= $row['studentName']?> không?');" type="submit" name="delete" value="Xóa"/>
                            </form>   
                    </td>
                    </tr>
                <?php ;
            }
        ?>
    </table>
    <a href="themsinhvien.php" class="indam">
        <span class="btn-themhv">Thêm học viên</span>
    </a>
</div>
<style>
    *{
        padding: 0;
        margin: 0; 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        box-sizing: border-box;
    }
    table{
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
        text-align: center;
    }
    .dssinhvien .title{
        background: #7CC242;
    }
    
    table th{
        color: #fff;
        padding:10px 30px;
    }
    
    table td{
        width: 100px;
        padding:10px 10px;
        border-spacing: 0px;
    }
    table td a{
        text-decoration: none;
        color: #707070;
    }
    .btn-themhv{
        display: flex;
        width: 150px;
        background: #7CC242;
        padding:15px 20px;
        margin: 10px 100px;
        line-height: 1.5;
        cursor: pointer;
        white-space: nowrap;
        border-radius: 20px;
    }
    .indam{
        font-weight: bold;
    }
    a{
        display: inline-block;
        color: #fff;
        text-decoration: none;
    }
    .confirm form{
        display: inline-flex;
    }
    .confirm input{
        font-size: 15px;
        background: #707070;
        padding:0 10px;
        color: #fff;
        width: 50px;
        height: 30px;
        cursor: pointer;    
        border: none;
        border-radius: 10px;
    }
    .confirm input[type='submit']{
        background: red;
    }
    .confirm input:hover{
        opacity: 0.8;
    }
</style>