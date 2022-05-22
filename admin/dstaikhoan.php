<?php 
    include 'connect.php';
    $sql = "SELECT * FROM account ";
    $res = mysqli_query($conn, $sql);

?>
<div class="dssinhvien">
    <table align="center" border="1">
        <tr class="title">
            <th>ID Tài khoản</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Role</th>
            <th>Quản lý</th>
        </tr>
        <?php
            while($row=mysqli_fetch_assoc($res)){
                echo '
                    <tr>
                        <td><a href="">'.$row["accountID"].'</a></td>
                        <td><a href="">'.$row["useName"].'</a></td>
                        <td><a href="">'.$row["pass"].'</a></td>
                        <td><a href="">'.$row["role"].'</a></td>
                        <td class="confirm">'?>
                            <form method="post" action="xoataikhoan.php">
                                <input onclick="window.location = 'suataikhoan.php?id=<?php echo $row['accountID']; ?>'" type="button" value="Sửa"/>
                                <input type="hidden" name="idAccount" value="<?= $row['accountID']; ?>"/>
                                <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                            </form>  
                        </td>
                    </tr>
               <?php ;
            }
        ?>
    </table>
    <a href="themtaikhoan.php" class="indam">
        <span class="btn-themhv">Thêm tài khoản</span>
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
        padding: 20px;
        border-collapse: collapse;
        margin-left: 100px;
    }
    .dssinhvien .title{
        background: #7CC242;
    }
    
    table th{
        color: #fff;
        padding:10px 30px;
    }
    
    table td{
        padding:10px 30px;
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
    .confirm input{
        font-size: 15px;
        background: #707070;
        padding:0 10px;
        color: #fff;
        width: 60px;
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