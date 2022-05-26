

<div class="mainadmin">
        
        <?php /*lấy lấy giá trị quản lý từ menu*/

                if(isset($_GET['quanly'])){
                    $bientam=$_GET['quanly'];

                }else{
                    $bientam="hocvien";
                }
                if($bientam=='hocvien'){
                    include ("dssinhvien.php");

                }elseif ($bientam=='khoahoc'){
                    include("#");
                }elseif ($bientam=='khoanthu'){ 
                    include("khoanthu.php");
                }elseif ($bientam=='thongkebaocao'){ 
                    include("#");
                }elseif ($bientam=='khac'){ 
                    include("#");               
                }elseif ($bientam=='taokhoanthu'){ 
                    include("taokhoanthu.php");               
                }elseif($bientam=='themtk'){
                    include("themtaikhoan.php");
                }elseif($bientam=='themsv'){
                    include("themsinhvien.php");
                }elseif($bientam=='taikhoan'){
                    include("dstaikhoan.php");
                }elseif($bientam=='suasv'){
                    include("suasinhvien.php");
                }
                
                else{ ?>

                <?php              
                }
?>
</div>
