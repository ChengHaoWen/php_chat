<?php
	session_start();
?>
<?php
	if(isset($_SESSION['is_login'])&&$_SESSION['is_login']==true):
?>
<?php
$con=mysqli_connect("localhost","root","u0551825","wen");
$sql="DELETE from user WHERE ID='".$_GET[id]."'";
 
mysqli_query($con,$sql); //執行sql語法

mysqli_close($con); //關閉資料庫連結

//print "<br><a href='index.php'>$sql</a>";
header("location:index.php");//回index.php
  
?>
<?php else:
	endif;
?>