<?php
	session_start();
	$db_user="wen0551825";
	$db_password='nkust0551825';		
	$Pass = $_POST['password'];

	if($_POST['username']==$db_user && $_POST['password'] == $db_password)
	{
			$_SESSION['is_login']=true;
			header("location:index3.php");
			
	}
	else
	{
			$_SESSION['is_login']=false;
			header('location:index.php?msg=登入失敗，請確認帳號密碼');
			
	}
	
?>