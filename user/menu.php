

<div class="menu" align="center">
        <ul >
            
            <li><a href="index.php?quanly=trangChu" >Trang chủ</a></li>
            <li><a href="index.php?quanly=gioiThieu" >Giới thiệu</a></li>
            <li><a href="index.php?quanly=khoaHoc" >Khoá học</a></li>
            <li><a href="index.php?quanly=blog" >Blog</a></li>
            <li><a href="index.php?quanly=lienHe" >Liên hệ</a></li>  
            <li>
                <a href="index.php?quanly=find" ><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>                                    
            <li>
            <?php
                    if(isset($_SESSION['id'])){
                ?>
                <a href="index.php?quanly=myCourse" ><i class="fa fa-folder-open" aria-hidden="true"></i></a>
                <?php   
                    }else{
                ?>
                  <li><a href="index.php?quanly=login" ><i class="fa fa-folder-open" aria-hidden="true"></i></a></li>
                  
                <?php
                    }
                ?>
           </li>
            <?php
                    if(isset($_SESSION['id'])){
                ?>
                   
                    <li><a href="index.php?quanly=thongtin"> <i class="fa fa-user" aria-hidden="true"></i></a></li>
                    <li> <a href="index.php?quanly=logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                <?php   
                    }else{
                ?>
                  <li><a href="index.php?quanly=login" ><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                  
                <?php
                    }
                ?>
        </ul>

    </div>
