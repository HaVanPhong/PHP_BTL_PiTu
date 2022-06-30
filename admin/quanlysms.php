<?php
    $sql = "SELECT * FROM chat INNER JOIN account ON chat.accountID = account.accountID ORDER BY chat.msgID DESC LIMIT 1"; 
        
    $query=mysqli_query($connect, $sql);
    
    // for($i = 0; $i<$row.size())
    // $arr = array();
    // while($row = mysqli_fetch_assoc($query)){
    
    // array_push($arr, $row);
    // }
    // foreach($arr as $x){
    //     if(in_array($x['useName'],$arr,true)){
    //         continue;
    //     }
        
    // }
    // do{
    //     echo $x['msgID'] ;
    //     echo $x['useName'] . '<br>';
    // }while(in_array($x['useName'],$arr,true));
?>
<div class="qlsms">
    <table>
        <tr>
            <td>ID</td>
            <td>Tên tài khoản</td>
            <td>Nội dung</td>
            <td>Thời gian</td>
            <td>Quản lý</td>
        </tr>
        <?php while($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $row['msgID'];?></td>
                <td><?= $row["useName"];?></td>
                <td><?= $row["msg"];?></td>
                <td><?=date('g : i A jS', $row['timestamp'])?></td>
                <td class="confirm">
                        <form action="acceptNap.php"  method="post">
                            <input type="submit" name="accept" value="Xem"/>
                            <input type="hidden" name="rechargeID" value="<?php echo $row['rechargeID'];?>"/>
                        </form>
                    </td>
            </tr>
        <?php 
         } ?>
    </table>
</div>