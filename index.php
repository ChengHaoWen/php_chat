<?php
	session_start();
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<meta charset="utf-8">
		<title>登入介面</title>
		<link rel=stylesheet type="text/css" href="Content/login.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
	</head>
	<body>
		<div class="display-box">
			<!--<span class="glyphicon glyphicon-grain" style="font-size:50px" aria-hidden="true"></span>-->
			<div class="header-title">
				Sign in 
			</div>
			<!-- Latest compiled and minified JavaScript -->
			<?php
			if(isset($_SESSION['is_login'])&&$_SESSION['is_login']==true):
			header("location:index3.php");
			else:
			?>
			<!-- Latest compiled and minified JavaScript -->
			
			<div class="text-block">
			<form  method="post"  action="checkUser.php">
			<?php
			if(isset($GET['msg'])){
				echo "<p class='error'>{$_GET['msg']}</p>";
			}
			?>
				<div class="form-group">
					 <label for="username">Username</label>
					 <input type="text" class="form-control" name="username" >
				</div>
				<div class="form-group">
					 <label for="password">Password</label>
					 <input type="password" class="form-control" name="password" >
				</div>
				<input class="gitbuh-submit-button" type="submit" value="Sign in" >
				
			</form>
			<?php endif;?>
			</div>			
		</div>
		
	</body>
</html>
