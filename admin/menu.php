<style>
    * {
        padding: 0;
        margin: 0;
    }

    .menuadmin {
        justify-content: center;
        display: flex;
        width: 100%;
       font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-top: 10px;

    }
    .menuadmin div{
        
        padding: 15px;
        width: 20%;
        font-size: 20px;
        
        border: 2px solid #707070;
        
    }
    .menuadmin a{
        margin-left: 25%;
        text-decoration: none;
        color: #707070;
        
    }
    .menuadmin a:hover{
        color: #7CC242;
        font-weight: 600;
        

        
    }
    .menuadmin div:hover{
            border-bottom: none;
        }
</style>


<div class="menuadmin">
    <div>
        <a href="index.php?quanly=hocvien">Học viên</a>
    </div>
    <div>
        <a href="index.php?quanly=khoahoc">Khoá học</a>
    </div>
    <div>
        <a href="index.php?quanly=khoanthu">Khoản thu</a>
    </div>
    <div>
        <a href="index.php?quanly=thongkebaocao">Thống kê báo cáo</a>
    </div>
    <div>
        <a href="index.php?quanly=khac">Khác</a>
    </div>
</div>