<?php

$con=mysqli_connect("localhost","root","u0551825","wen");
$sql="DELETE from action WHERE 日期='".$_GET[date]."'";
 
mysqli_query($con,$sql); //執行sql語法

mysqli_close($con); //關閉資料庫連結

//print "<br><a href='index.php'>$sql</a>";
header("location:action.php");//回index.php
  

?>