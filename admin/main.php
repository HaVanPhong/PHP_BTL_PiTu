

<div class="mainadmin">
        
        <?php /*lấy lấy giá trị quản lý từ menu*/

                if(isset($_GET['quanly'])){
                    $bientam=$_GET['quanly'];

                }else{
                    $bientam="hocvien";
                }
                if($bientam=='hocvien'){
                    include ("#");

                }elseif ($bientam=='khoahoc'){
                    include("khoahoc.php");
                }elseif ($bientam=='khoanthu'){ 
                    include("khoanthu.php");
                }elseif ($bientam=='thongkebaocao'){ 
                    include("#");
                }elseif ($bientam=='khac'){ 
                    include("#");               
                }elseif ($bientam=='taokhoanthu'){ 
                    include("taokhoanthu.php");               
                }elseif ($bientam=='logout'){
                    $_SESSION['isLogined']= false;
                    header("Location:http://localhost/PHP_BTL_PiTu/index.php?quanly=login");
                    
                }
                else { ?>

                <?php              
                }
?>
</div>
