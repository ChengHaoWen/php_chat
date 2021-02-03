<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Highcharts Example</title>
<?php

$con=mysqli_connect("localhost","root","u0551825","wen");
//$sql="select ID,次數,日期 from action WHERE 動作名稱='".$_GET['action_name']."'";
$id=$_GET['actionid'];
$name=$_GET['actionname'];
$sql="select ID,次數,日期 from action WHERE ID='".$id."'AND 動作名稱='".$name."'order by 日期 Asc limit 5"; 
//$sql="select ID,次數,日期 from action WHERE ID='".$id."'AND 動作名稱='30秒椅子坐立測量'"; 
$data = mysqli_query($con,$sql);//從contact資料庫中選擇所有的資料表
while($row = mysqli_fetch_array($data))
          {
                $day[]=$row['日期'];
                $count[]=intval($row['次數']);
          }
        $day = json_encode($day);
       // print_r($day);
$data1 = array(array("name"=>"count","data"=>$count));
        $data1 = json_encode($data1);    //把獲取的資料物件轉換成json格式
       // print "$data1";
	   $name = json_encode($name);
?>
<script type="text/javascript" src="//cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
<script src="/Scripts/highcharts.js"></script>
<script src="/Scripts/exporting.js"></script>
<script type="text/javascript">
$(function () {
$('#container').highcharts({
title: {
text: <?php echo $name; ?>,
x: -20 //center
},
subtitle: {
text: 'write by:wen',
x: -20
},
xAxis: {
categories: <?php echo $day; ?>
},
yAxis: {
title: {
text: '次 數'
},
plotLines: [{
value: 0,
width: 1,
color: '#808080'
}]
},
tooltip: {
valueSuffix: ' 次'
},
legend: {
layout: 'vertical',
align: 'right',
verticalAlign: 'middle',
borderWidth: 0
},
series: <?php echo $data1; ?>
});
});
</script>

</head>
<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</body>
</html>
