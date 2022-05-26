<?php 
  include './connect.php';
  include '../uploadfile.php';
  
  if (isset($_POST['themkhoahoc'])){
    $img_link= upload($_FILES['img']);
    $tenKhoaHoc= $_POST['tenkhoahoc'];
    $mota= $_POST['mota'];
    $gia= $_POST['gia'];
    $video_id= $_POST['video_id'];
    $categoryID= $_POST['category_id'];
    $teacherID= $_POST['teacher_id'];

    $sql= "INSERT INTO `course` (`courseID`, `courseName`, `courseDetail`, `courseFee`, `img`, `videoDemo`, `categoryID`, `teacherID`) 
      VALUES (NULL, '".$tenKhoaHoc."', '".$mota."', '".$gia."', '".$img_link."', '".$video_id."', '".$categoryID."', '".$teacherID."')";
    mysqli_query($connect, $sql) or die("query error submit");
    header('location: index.php?quanly=khoahoc');
    
  }

?>
<style>
  .themKhoaHoc table{
    width: 80%;
    margin: 0 auto;

  }
  .chitietkhoahoc table td{
    padding: 20px;
    line-height: 100%;
    align-content: center;
    align-items: center;
  }
  .themKhoaHoc table td{
    padding: 20px;
    line-height: 100%;
    align-content: center;
    align-items: center;
  }

  .themKhoaHoc input{
    padding: 10px;
    width: 500px;
    max-width: 500px;
    min-width: 300px;
  }

  .btnXong{
    padding: 10px;
    background-color: #7CC242;
    border-radius: 16px;
    color: white;
    font-weight: 900;
  }
  .btnXong a{
    text-decoration: none;
    color: white;
  }
 
  .btnXoaKhoaHoc{
    color: red;
    font-weight: 900;
  }
  

</style>
<div class="themKhoaHoc" id="themKhoaHoc">
  <form action="themkhoahoc.php" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>
          <p>Tên khóa học:</p>
          <input type="text" name="tenkhoahoc" id="" >
        </td>
        <td>
          <p>Mô tả: </p>
          <input type="text" name="mota" id="" >
        </td>
      </tr>
      <tr>
        <td>
          <p>Ảnh:</p>
          <input type="file" name="img" id="">
        </td>
        <td>
          <p>Giá:</p>
          <input type="number" name="gia" id="" >
        </td>
      </tr>
      <tr>
        <td>
          
        </td>
        <td>
          <p>Video giới thiệu:</p>
          <input type="text" name="video_id" id="" >
        </td>
      </tr>
      <tr>
        <td>
          <p>Mã danh mục:</p>
          <input type="text" name="category_id" id="" >
        </td>
        <td>
          <p>Mã giáo viên giảng dạy: </p>
          <input type="text" name="teacher_id" id="" >
        </td>
      </tr>
      <tr>
        <td>
          <button type="submit" name="themkhoahoc" class="btnXong">Thêm khóa học</button>
        </td>
        
        <td>
          <button class="btnXong"><a href="index.php?quanly=khoahoc">Back</a></button>
        </td>
        
      </tr>
    </table>
  </form>
</div>