<?php
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["role"]);
unset($_SESSION["isLogined"]);


header("Location:index.php?quanly=''");
?>