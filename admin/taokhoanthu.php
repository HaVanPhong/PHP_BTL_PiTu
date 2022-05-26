<style>
    .taokhoanthu{
        padding: 0;
        margin: 0;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        justify-content: center;
    }

    .taokhoanthu{
        display: block;
        
        color: #707070;
    }
    .inputTaoTaiKhoan{
        
        display: flex;
        margin-left: 10%;
        margin-right: 10%;
    }

    .phan1{
        
        display: flex;
        width: 45%;

    }
    .phan2{
        margin-left: 10%;
        display: flex;
        width: 45%;
    }
    .label{
       
        display: block;
        padding: 10px;
        width: 30%;
        font-weight: 600;
        font-size: 16px;

    }
    .label div{
        padding: 10px;
        margin-top: 10px;
     
        
    }
    .inputTTK{
        
        margin-top: 10px;
        padding: 20px;
        width: 70%;
    }
    .inputTTK input{
        width: 100%;
        margin-top: 20px;
        border-radius: 5px;
        padding: 3px;
    }
    .btTaoKhoanThu{
        margin-left: 12%;
        
    }
    .btTaoKhoanThu button{
        border: none;
        border-radius: 5px;
        padding: 6px;
        width: 23%;
        font-size: 16px;
        background-color:#7cc242;
        margin-top: 20px;
        color: white;
        font-weight: 600;
    }
    .btTaoKhoanThu button:hover{
        opacity: 0.5;
    }

  
</style>

<?php

    $sql_KH="SELECT * FROM course ORDER BY courseName DESC";
    $query_KH =mysqli_query($connect,$sql_KH);
    $sql_HV="SELECT * FROM student ORDER BY studentName DESC";
    $query_HV = mysqli_query($connect,$sql_HV);    
    
?>
<form action="" method="post">
    <div class="taokhoanthu">
            <div class="inputTaoTaiKhoan">
                <div class="phan1">
                    <div class="label">
                        <div><label for="">Mã khoá học</label></div>
                        <div><label for="">Người nộp</label></div>
                        <div><label for="">Mô tả</label></div>
                    </div>
                    <div class="inputTTK">
                       
                        <select name="makhoahoc" id="" style="width: 100%; border-radius: 5px; padding: 3px;" aria-placeholder="Chọn mã khoá học">
                        <?php
                            while($row_KH=mysqli_fetch_array($query_KH)){
                        ?>     
                            <option value="<?php echo $row_KH['courseID']?>"><?php echo $row_KH['courseID']?></option>
                        <?php
                            }
                        ?>

                        </select>
                        <input class="inputTim" type="text" name="nguoinop" placeholder="Người nộp">
                        <input class="inputTim" type="text" name="mota" placeholder="Mô tả">
                    </div>
 
                </div>
                <div class="phan2">
                    <div class="label">
                        
                        <div><label for="">Mã học viên</label></div>
                        <div><label for="">Tổng số tiền</label></div>
                        <div><label for="">Ngày tháng</label></div>
                    </div>

                    <div class="inputTTK">
                        
                        <select name="mahocvien" id="" style="width: 100%; border-radius: 5px; padding: 3px;">
                            <?php
                                while($row_HV=mysqli_fetch_array($query_HV)){
                            ?>     
                                <option value="<?php echo $row_HV['studentID']?>"><?php echo $row_HV['studentID']?></option>
                            <?php
                                }
                            ?>
                        </select>
                        <input class="inputTim" type="number" min="1" name="tongsotien" placeholder="Nhập số tiền">

                        <input class="inputTim" type="date" name="ngaythang">
    
                    </div>
                </div>
            </div>
    
    
            <div class="btTaoKhoanThu">
                <button type="submit" name="bttaokhoanthu" id="bttaokhoanthu" >Tạo khoản thu</button>
            </div>
        </div>
    
   
</form>

<?php

if(isset($_POST['bttaokhoanthu'])){
    if(empty($_POST['makhoahoc'])||empty($_POST['mahocvien'])||empty($_POST['nguoinop'])||empty($_POST['mota'])||empty($_POST['tongsotien'])||empty($_POST['ngaythang'])){
        echo '<script language="javascript">alert("Nhập đầy đủ thông tin!");</script>';
    }else{
        $mahocvien=$_POST['mahocvien'];
        $makhoahoc=$_POST['makhoahoc'];
        $nguoinop=$_POST['nguoinop'];
        $mota=$_POST['mota'];
        $ngaythang=$_POST['ngaythang'];
        $tongsotien=$_POST['tongsotien'];
        $sql_taohoadon="INSERT INTO payment (paymentID, paymentFee, paymentTime,mota, studentID, courseID) VALUES (null, '$tongsotien', '$ngaythang', '$mota' , '$mahocvien', '$makhoahoc')";
        mysqli_query($connect,$sql_taohoadon);
        echo '<script language="javascript">alert("Thêm thành công!");</script>';
    }

        
}
?>