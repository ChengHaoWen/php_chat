<?php
	session_start();
?>
<?php
$con=mysqli_connect("localhost","root","u0551825","wen");
$ID=$_POST['ID']??'';
$date=$_POST['date']??'';
$date2=$_POST['date2']??'';
$str_sec=explode("/",$date2);
@$date_int=(int)$str_sec[2];//有加小老鼠
$date_int1=$date_int+1;
$str_sec[2]=(string)$date_int1;
$data_string=implode("/",$str_sec);
$action_name=$_POST['action_name']??'';

if($ID!='' or$action_name!=''){	
//$sql="SELECT * FROM action WHERE ID='$ID'AND 動作名稱='$action_name'";
//$sql="SELECT ID,動作名稱,次數,日期 FROM action WHERE ID='$ID'AND 動作名稱='$action_name'";
$sql="SELECT * FROM action WHERE 日期 BETWEEN '$date' AND '$data_string' AND ID='$ID' AND 動作名稱='$action_name'";
$data = mysqli_query($con,$sql);
//print $sql;
//從contact資料庫中選擇所有的資料表
}else{
	$sql="SELECT action.ID, user.Name,action.動作名稱,action.次數,action.日期 FROM user CROSS JOIN action WHERE user.ID = action.ID";
	$data = mysqli_query($con,$sql);
}
?>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>動作列表</title>
    <link href="/Content/Site.css" rel="stylesheet" type="text/css">
    <link href="/Content/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="/Scripts/modernizr-2.6.2.js"></script>
	<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	
	<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
	} );
	</script>
</head>
<body style="">
	<?php
	if(isset($_SESSION['is_login'])&&$_SESSION['is_login']==true):
	?>
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
					<li><a href="logout.php">登出</a></li>					
                </ul>
            </div>
			
        </div>
    </div>

    <div class="container body-content">
        

<h2>動作列表</h2>
<form id="form1" name="form1" method="post" action="">
<!--<p>ID:
<input name="ID" type="text" id="ID" vlue="<php echo $ID?>"/>
</p>
<p>動作名稱:
<input name="action_name" type="radio" id="radio" value="" checked="checked"/>None
<input type="radio" name="action_name" id="radio3" value="30秒椅子坐立測量"/>30秒椅子坐立測量
<input type="radio" name="action_name" id="radio4" value="30秒手臂屈舉測量"/>30秒手臂屈舉測量
<input type="radio" name="action_name" id="radio5" value="2分鐘站立抬膝測量"/>2分鐘站立抬膝測量
<input type="radio" name="action_name" id="radio6" value="2.44秒坐立繞物測量"/>2.44秒坐立繞物測量
<input type="radio" name="action_name" id="radio7" value="30秒二頭肌手臂屈舉測量"/>30秒二頭肌手臂屈舉測量
<input type="radio" name="action_name" id="radio8" value="2分鐘單足立"/>2分鐘單足立
</p>
<p>日期:
<input name="date" type="text" id="date" vlue="<php echo $date?>"/>
到
<input name="date2" type="text" id="date2" vlue="<php echo $date2?>"/>
</p>

<p>
<input type="submit" name="button" id="button" value="搜尋"/>
</p>-->
</form>
<table class="table" id="myTable">
  <thead><tr>
    <td>ID</td>
	<td>NAME</td>
    <td>動作名稱</td>
    <td>次數</td>
    <td>日期</td>	
	<td></td>
  </tr></thead>
<tbody><?php
for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_row($data);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
	<td><?php echo $rs[4]?></td>
	
<td>
        <a onclick="return confirm('確定要生成嗎')" 
		href="testaction.php?actionid=<?php echo $rs[0]?>&actionname=<?php echo $rs[2]?>">生成圖表</a>
		 <a onclick="return confirm('確定要刪除嗎')" href="delaction.php?date=<?php echo $rs[3]?>">刪除</a>
    </td>
  </tr>
  
<?php
}
?></tbody>
</table>
<p>&nbsp;</p>
<?php else:
	endif;
?>
</body>
</html&gt