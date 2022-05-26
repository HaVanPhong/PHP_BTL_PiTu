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
  .khoahoc ul li:hover a{
    cursor: pointer;
    color: white;
  }
  .khoahoc ul li{
    text-decoration: none;
    font-weight: 900;
  }
  .khoahoc ul li a{
    text-decoration: none;
    color: #7CC242;
    font-size: larger;
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
  .btnThemKhoaHoc a{
    text-decoration: none; 
    color: white;
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
              <a href="index.php?quanly=chitietkhoahoc&idCourse='.$row['courseID'].'">'.$row['courseName'].'</a>
            </li>
          ';
        }
      ?>
      
    </ul>
    <button class="btnThemKhoaHoc" ><a href="index.php?quanly=themkhoahoc">Thêm khóa học</a></button>
  </div>

</body>
<script>
  

</script>
</html>