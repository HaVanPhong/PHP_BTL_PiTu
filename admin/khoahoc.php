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
<body>
  <div class="khoahoc" id="khoahoc">
    <ul>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
      <li onclick="clickKhoaHoc()">
          Lập trình front-end cơ bản
      </li>
    </ul>
    <button class="btnThemKhoaHoc" onclick="themKhoaHoc()">Thêm khóa học</button>
  </div>

  <div class="suavathem">
    <div class="chitietkhoahoc" id="chiTietKhoaHoc">
      <h3 class="thongtin">Thông tin khóa học</h3>
      <h3 class="makhoahoc">Mã khóa học: LT02</h3>
      <table>
        <tr>
          <td>
            Tên khóa học:
            <input type="text" name="" id="" value="Lập trình front-end cơ bản">
          </td>
          <td>
            Mô tả: 
            <input type="text" name="" id="" value="Học các ngôn ngữ cơ bản như HTML, CSS, JS...">
          </td>
        </tr>
        <tr>
          <td style="display: flex;">
            <p style="margin-right: 20px;">Ảnh:</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2cEC3G_7nWjRn6xCjiqiUoJaPuPM2Gnm5Kg&usqp=CAU" alt="">
            
            <input type="file" name="" id="">
          </td>
          <td>
            Giá:
            <input type="text" name="" id="" value="3.499.999đ">
          </td>
        </tr>
        <tr>
          <td>
            <button class="btnXong"><a href="">Xong</a></button>
            <button class="btnXong"><a href="">Back</a></button>
          </td>
          
          <td>
            <a class="btnXoaKhoaHoc" href="">Xóa khóa học</a>
          </td>
        </tr>
      </table>
    </div>
  
    <div class="themKhoaHoc" id="themKhoaHoc">
      <table>
        <tr>
          <td>
            <p>Tên khóa học:</p>
            <input type="text" name="" id="" >
          </td>
          <td>
            <p>Mô tả: </p>
            <input type="text" name="" id="" >
          </td>
        </tr>
        <tr>
          <td>
            <p>Ảnh:</p>
            <input type="file" name="" id="">
          </td>
          <td>
            <p>Giá:</p>
            <input type="text" name="" id="" >
          </td>
        </tr>
        <tr>
          <td>
            <button class="btnXong"><a href="">Thêm khóa học</a></button>
          </td>
          
          <td>
            <button class="btnXong"><a href="">Back</a></button>
          </td>
          
        </tr>
      </table>
    </div>
  </div>
</body>
<script>
  function clickKhoaHoc(){
    document.getElementById('khoahoc').style.display="none";
    document.getElementById('chiTietKhoaHoc').style.display="block";

  }
  function themKhoaHoc(){
    document.getElementById('khoahoc').style.display="none";
    document.getElementById('themKhoaHoc').style.display="block";
  }
</script>
</html>