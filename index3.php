<?php
	session_start();
?>
<?php
$con=mysqli_connect("localhost","root","u0551825","wen");
$sql="select * from user";

$data = mysqli_query($con,$sql);//從contact資料庫中選擇所有的資料表
?>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>人員列表</title>
    <link href="/Content/Site.css" rel="stylesheet" type="text/css">
    <link href="/Content/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/Scripts/modernizr-2.6.2.js"></script>
</head>
<body style="">
	<!------------------->
	<?php
	if(isset($_SESSION['is_login'])&&$_SESSION['is_login']==true):
	?>
	<!------------------->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">人員管理系統</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">人員列表</a></li>
                    <li><a href="Create.php">人員新增</a></li>
					<li><a href="action.php">動作查看</a></li>
					<li><a href="logout.php">登出</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">    
		<h2>人員列表</h2>
		<p>
			<a href="Create.php">新增一筆</a>
		</p>
		<table class="table">
			<tbody><tr>
				<td>ID</td>
				<td>Name</td>
				<td>Gender</td>
				<td>Age</td>	
				<td></td>
			</tr>
			
			<?php
				for($i=1;$i<=mysqli_num_rows($data);$i++){
				$rs=mysqli_fetch_row($data);
			?>
			<tr>
				<td><?php echo $rs[0]?></td>
				<td><?php echo $rs[1]?></td>
				<td><?php echo $rs[2]?></td>
				<td><?php echo $rs[3]?></td>
				<td>
					<a onclick="return confirm('確定要刪除嗎')" href="del.php?id=<?php echo $rs[0]?>">刪除</a>
				</td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		<p>&nbsp;</p>
	</div>
	<!------------------->
	<?php else:
	header('Location: index.php');
	endif;
	?>
	<!------------------->
</body>
</html&gt
