<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
   
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        
    }
    .indam{
        font-weight: bold;
    }
    .gioithieu .menu-head{
        display: flex;
        background-color: #F1F1F1;
        padding: 30px;
        margin-top: 10px;
        box-shadow: #e2e2e2 2px 3px;
    }
    .text-head{
        padding-right: 100px;
        font-size: 20px;
        color: #707070;
    }
    .menu-head a:hover{
        color:#7CC242;
        text-decoration:underline;
    }
    .tieude{
        font-size: 40px !important;
        font-weight: bold;
        margin-bottom: 10px;
        color: #707070;
    }
    .margin20{
        margin: 20px;
    }
    .pad-bottom10{
        padding-bottom: 10px;
    }
    .innghieng{
        font-style: italic;
    }
    .gachchan-xanh{
        text-decoration: underline;
        color: #7CC242;
    }
    .red-color{
        color: red !important;
    }
    .soluoc{
        display: flex;
        margin: 50px;
    }
    
    .soluoc .soluoc-trai{
        width: 60%;
    }
    .soluoc-trai table{
        width: 100%;
        margin-top: 20px;
        
    }
    .soluoc-trai td{
        font-size: 18px;
        color: #707070;
    }
    .soluoc-phai img{
        width: 300px;
    }
    .soluoc-phai p{
        margin-left: 20px;
        width: 250px;
        padding:10px 50px;
        white-space: nowrap;
        background-color: #7CC242;
        text-align: center;
        border-radius: 25px;
    }
    .soluoc-phai a{
        color: #fff;
    }
    .noidung{
        margin: 50px;
        font-size: 20px;
        color: #707070;
    }
    .noidung .main{
        display: flex;
    }
    
    .main .text-trai{
        margin-right: 50px;
    }
    .text-trai ol{
        margin: 20px;
    }
    .noidung ol li{
        list-style: decimal;
    }
    .text-phai li{
        list-style: initial;
    }
    .text-trai li a{
        color: #7CC242;
    }   
</style>
<?php
    $sql_show ="SELECT * FROM course WHERE course.courseID ='$_GET[id]' ORDER BY courseName DESC";
    $query_show =mysqli_query($connect,$sql_show);
    $row_pro=mysqli_fetch_array($query_show);
?>
<body>
    <div class="gioithieu">
        <div class="menu-head">
            <p class="indam text-head" >Gi???i thi???u</p>
            <p><a href="index.php?quanly=danhgia&id= <?php echo $row_pro['courseID'];?>" class="text-head">????nh gi??</a></p>
        </div>
        <?php include 'soluoc.php'?>
    </div>
    <div class="noidung">
            <p class="tieude">V??? kh??a h???c n??y</p>
            <div class="main">
                <div class="text-trai">
                    <p>????y l?? kh??a h???c ?????u ti??n trong ch????ng tr??nh ????o t???o tr??nh ????? trung c???p, 
                        ?????i h???c t???o n??n ch????ng tr??nh Vi c??? nh??n l???p tr??nh v?? c???u tr??c d??? li???u l???n h??n. 
                        Ch??ng t??i khuy??n b???n n??n ch???n ch??ng theo th??? t???, tr??? khi b???n ???? c?? ki???n ??????th???c n???n v???
                         nh???ng l??nh v???c n??y v?? c???m th???y tho???i m??i khi b??? qua.</p>
                    <ol>
                        <li><a href="#">Gi???i thi???u v??? L???p tr??nh C++</a></li>
                        <li><a href="#">L???p tr??nh n??ng cao trong C++</a></li>
                        <li><a href="#">Gi???i thi???u v??? c???u tr??c d??? li???u</a></li>
                        <li><a href="#">C???u tr??c d??? li???u n??ng cao</a></li>
                    </ol>
                    <p class=""><a href="" class="gachchan-xanh">Xem nhi???u h??n</a></p>
                </div>
                <div class="text-phai">
                    <ul>
                        <li>T??? ch???c: PITU</li>
                        <li>Ch??? ?????: Khoa h???c m??y t??nh</li>
                        <li>Tr??nh ?????: Trung c???p</li>
                        <li>??i???u ki???n ti??n quy???t:
                            ????y l?? kh??a h???c ?????u ti??n trong ch????ng tr??nh ????o t???o tr??nh ????? trung c???p, ?????i h???c t???o n??n ch????ng tr??nh V
                            i c??? nh??n l???p tr??nh v?? c???u tr??c d??? li???u l???n h??n. Ch??ng t??i khuy??n b???n n??n ch???n ch??ng theo th??? t???, 
                            tr??? khi b???n ???? c?? ki???n ??????th???c n???n v??? nh???ng l??nh v???c n??y v?? c???m th???y tho???i m??i khi b??? qua.
                        </li>
                        <li>Ng??n ng???: ti???ng anh</li>
                        <li>B???n ghi video: Ti???ng Anh</li>
                    </ul>
                </div>
            </div>
    </div>
    <div class="noidung">
        <div class="tieude">
           <p>Nh???ng g?? b???n s??? h???c</p>
        </div>
        <ol class="margin20">
            <li>Ph??n t??ch c??c b??i t???p C ++ v?? ??p d???ng c??c th??nh ph???n c???a n?? trong ph??t tri???n ch????ng tr??nh</li>
            <li>??p d???ng c??c thao t??c nh???p / xu???t C ++ c?? b???n v???i c??c ki???u d??? li???u kh??c nhau</li>
            <li>
                Thi???t k??? c??c bi???u th???c C ++ b???ng c??ch s??? d???ng c??c ph??p to??n s??? h???c (bao g???m hi???u c??c h???n ch??? c???a ch??ng, 
                ch???ng h???n nh?? c???t b???t s??? nguy??n, l???i l??m tr??n, chia cho 0, chuy???n ?????i thu h???p v?? m??? r???ng, ??p ki???u, ??u 
                ti??n v?? c??c h??m th?? vi???n to??n h???c chu???n)
            </li>
            <li>Thi???t k??? c??c bi???u th???c C ++ b???ng c??ch s??? d???ng c??c to??n t??? quan h??? (bao g???m c??? hi???u b??nh ?????ng d???u ph???y ?????ng)</li>
            <li>Thi???t k??? c??c bi???u th???c C ++ b???ng c??ch s??? d???ng c??c to??n t??? quan h??? (bao g???m c??? hi???u b??nh ?????ng d???u ph???y ?????ng)</li>
            <li>Thi???t k??? c??c c??u l???nh l???a ch???n C ++ (bao g???m c??? l???a ch???n l???ng nhau)</li>
            <li>Thi???t k??? c??c c??u l???nh l???p l???i C ++ (bao g???m c??? ??i???u khi???n ?????m so v???i ??i???u khi???n s??? ki???n, ??i???u khi???n gi??m s??t)</li>
        </ol>
    </div>
</body>
</html>                                  