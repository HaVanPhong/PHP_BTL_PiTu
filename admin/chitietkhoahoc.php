<style>
  .chitietkhoahoc{
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

  /* them css  */
  .makhoahoc{
    display: flex;
  }
</style>
<?php
   $sql= "select * from course where courseID=".$_GET['idCourse'];
   $result= mysqli_query($connect, $sql) or die("query error submit search");
   $row= mysqli_fetch_assoc($result);
    
     
?>
<div class="chitietkhoahoc" id="chiTietKhoaHoc">
  <h3 class="thongtin">Thông tin khóa học</h3>
  <h3 class="makhoahoc">Mã khóa học: <p id="idCourse"><?php echo $row['courseID']?></p></h3>
  <form action="khoahoc.php" method="POST">
    <table>
      <tr>
        <td>
          Tên khóa học:
          <input type="text" name="" id="courseName" value='<?php echo $row['courseName']?>'>
        </td>
        <td>
          Mô tả: 
          <input type="text" name="" id="courseDetail" value='<?php echo $row['courseDetail']?>' >
        </td>
      </tr>
      <tr>
        <td style="display: flex;">
          <p style="margin-right: 20px;">Ảnh:</p>
          <img src=<?php echo $row['img']?> id="img" alt="" class="imgDisplay">
          
          <input type="file" name="" id="fileImg">
        </td>
        <td>
          Giá:
          <input type="text" name="courseFee" id="courseFee" value=<?php echo $row['courseFee']?>>
        </td>
      </tr>
      <tr>
        <td>
          <button class="btnXong" type="submit"><a href="" id="btnCapNhatKhoaHoc">Cập nhật</a></button>
          <button class="btnXong"><a href="index.php?quanly=khoahoc">Back</a></button>
        </td>
        
        <td>
          <a class="btnXoaKhoaHoc" href=<?php echo "index.php?quanly=xoakhoahoc&idCourse=".$row['courseID']?> id="btnXoaKhoaHoc">Xóa khóa học</a>
        </td>
      </tr>
    </table>
  </form>
</div>
