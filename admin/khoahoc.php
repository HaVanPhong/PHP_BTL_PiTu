<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  *{
    margin: 0;
    padding: 0;

  }
  body{
    width: 100%;
  }
  .khoahoc {
    width: 80%;
    margin: 0 auto;
  }
  .khoahoc ul {
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  .khoahoc ul li{
    cursor: pointer;
    width: 33%;
    margin: 20px;
    padding: 50px;
    text-align: center;
    border: solid 1px black;
  }
  .khoahoc ul li:hover{
    background-color: #7CC242;
    color: white;
  }
  .khoahoc ul li{
    text-decoration: none;
    font-weight: 900;
  }
  .btnThemKhoaHoc{
    cursor: pointer;
    border-radius: 16px;
    float: right;
    padding: 10px;
    background-color: #7CC242;
    color: white;
  }
  .makhoahoc{
    display: flex;
  }
 /* chi tiết khóa học */
  .suavathem{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .chitietkhoahoc{
    display: none;
    width: 80%;
    margin: 0 auto;
  }
  .chitietkhoahoc .imgDisplay{
    width: 300px;
  }
  .themKhoaHoc{
    display: none;
    width: 80%;
    margin: 0 auto;
    
  }
  .chitietkhoahoc .thongtin{
    text-align: center;
  }
  .themKhoaHoc .thongtin{
    text-align: center;
  }
  .chitietkhoahoc table{
    width: 80%;
    margin: 0 auto;

  }

  /* -------- */
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
  .chitietkhoahoc input{
    padding: 10px;
    width: 300px;
  }
  .themKhoaHoc input{
    padding: 10px;
    width: 300px;
  }

  .btnXong{
    padding: 10px;
    background-color: #7CC242;
    border-radius: 16px;

  }
  .btnXong a{
    text-decoration: none;
    color: white;
    font-weight: 900;
  }
  .btnXoaKhoaHoc{
    color: red;
    font-weight: 900;
  }
  
/* thêm khóa học   */
</style>

<?php 
  include './connect.php';

?>
<body>
  <div class="khoahoc" id="khoahoc">
    <ul>
      <?php 
        $sql= "select * from course";
        $result= mysqli_query($connect, $sql) or die("query error submit search");
        while ($row= mysqli_fetch_assoc($result)){
          $line= "'".$row['courseID'].";".$row['courseName'].";".$row['courseDetail'].";".$row['courseFee'].";".$row['img']."'";
          echo '
            <li onclick="clickKhoaHoc('.$line.')">
              '.$row['courseName'].'
            </li>
          ';
        }
      ?>
      
    </ul>
    <button class="btnThemKhoaHoc" onclick="themKhoaHoc()">Thêm khóa học</button>
  </div>

  <div class="suavathem">
    <div class="chitietkhoahoc" id="chiTietKhoaHoc">
      <h3 class="thongtin">Thông tin khóa học</h3>
      <h3 class="makhoahoc">Mã khóa học: <p id="idCourse"></p></h3>
      <form action="khoahoc.php" method="POST">
        <table>
          <tr>
            <td>
              Tên khóa học:
              <input type="text" name="" id="courseName">
            </td>
            <td>
              Mô tả: 
              <input type="text" name="" id="courseDetail" >
            </td>
          </tr>
          <tr>
            <td style="display: flex;">
              <p style="margin-right: 20px;">Ảnh:</p>
              <img src="" id="img" alt="" class="imgDisplay">
              
              <input type="file" name="" id="fileImg">
            </td>
            <td>
              Giá:
              <input type="text" name="courseFee" id="courseFee" >
            </td>
          </tr>
          <tr>
            <td>
              <button class="btnXong" type="submit"><a href="">Cập nhật</a></button>
              <button class="btnXong"><a href="">Back</a></button>
            </td>
            
            <td>
              <a class="btnXoaKhoaHoc" href="">Xóa khóa học</a>
            </td>
          </tr>
        </table>
      </form>
    </div>
  
    <?php 
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
      }

    ?>
    <div class="themKhoaHoc" id="themKhoaHoc">
      <form action="khoahoc.php" method="POST" enctype="multipart/form-data">
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
              <button class="btnXong"><a href="">Back</a></button>
            </td>
            
          </tr>
        </table>
      </form>
    </div>
  </div>
</body>
<script>
  function clickKhoaHoc(line){
    let course= line.split(";");
    document.getElementById('khoahoc').style.display="none";
    document.getElementById('chiTietKhoaHoc').style.display="block";
    document.getElementById("idCourse").innerHTML= course[0];
    document.getElementById("courseName").value= course[1];
    document.getElementById("courseDetail").value= course[2];
    document.getElementById("courseFee").value= course[3];
    document.getElementById("img").src= course[4];
  }
  function themKhoaHoc(){
    document.getElementById('khoahoc').style.display="none";
    document.getElementById('themKhoaHoc').style.display="block";
  }
</script>
</html>