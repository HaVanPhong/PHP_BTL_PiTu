



<div class="login">

        <div class="nhapThuCong">
            <form action="" method="post">
                <h2>Đăng nhập</h2>

                <label for="tendangnhap"><b>Tên đăng nhập</b></label>
                <input class="nhap" type="text" name="taikhoan" required>

                <label for="psw"><b>Mật khẩu</b></label>
                <input class="nhap" type="password" name="pass" required>
                <div class="forgot">
                    <a href="#">Quên mật khẩu</a>
                </div>
                <div class="xacNhan">
                    <button type="submit" name="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
        <div class="login-connect">

            <a href="#" class="bt-facebook"><i class="fa fa-facebook"></i> Facebook</a>

            <a href="#" class="bt-google"><i class="fa fa-google"></i> Google</a>

        </div>

        <div class="noaccount">
            Bạn chưa có tài khoản? <a href="index.php?quanly=create">Đăng ký</a>
        </div>
    </div>
<?php
    if(isset($_POST['submit'])){
        if (!$_POST['taikhoan'] || !$_POST['pass'])
        {
            echo ' <script language="javascript">alert("Vui lòng nhập đầy đủ thông tin");</script>';
        }else{

        //lấy thông tin trong phần nhập
		$taikhoan = addslashes($_POST['taikhoan']);
		$matkhau = addslashes($_POST['pass']);

        // tìm kiếm tài khoản trong csdl
		$sql = "SELECT * FROM account WHERE account.useName='$taikhoan' AND account.pass='$matkhau'";
		$row = mysqli_query($connect,$sql);
         
        
    
        $count= mysqli_num_rows($row);
        //nếu có
        
		if($count>0){

			$row_data = mysqli_fetch_array($row);
            $_SESSION['id'] = $row_data['accountID'];
            $_SESSION['name']=$row_data['useName'];
            $_SESSION['role']=$row_data['role'];
            $_SESSION['isLogined']= true;
          
            if($row_data['role']==1){
                //user
                header("Location:index.php");
            }elseif($row_data['role']==2){
                //teacher
                header("Location:#");
            }else{
                //admin
                header("Location:admin/index.php");
            }
        }else{
			echo ' <script language="javascript">alert("Tài khoản không đúng, vui lòng nhập lại");</script>';
        }

        }

        
	} 
?>
