<?php
$con=mysqli_connect("localhost","root","","wen");
$sql="select * from user";

$data = mysqli_query($con,$sql);//從contact資料庫中選擇所有的資料表
?>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產品列表 - 大才全資訊科技股份有限公司</title>
    <link href="/Content/Site.css" rel="stylesheet" type="text/css">
    <link href="/Content/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/Scripts/modernizr-2.6.2.js"></script>
</head>
<body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">產品管理系統</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">產品列表</a></li>
                    <li><a href="Create.php">產品新增</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container body-content">    

<h2>產品列表</h2>

<p>
    <a href="Create.php">新增一筆</a>
</p>

		<table class="table">
	<tbody><tr>
        <th>
            ID 
        </th>
        <th>
            Name
        </th>
        <th>
            Gender
        </th>
        <th>
            Age
        </th>
        <th></th>
    </tr
    <tr>
        <td>
            P02
        </td>
        <td>
            XBox one
        </td>
        <td>
            12000.00
        </td>
        <td>
              65
        </td>
        <td>
            <a href="edit.php?fId=P02">編輯</a> |
            <a onclick="return confirm('確定要刪除嗎')" href="/Home/Delete?fId=P02">刪除</a>
        </td>
    </tr>
	<?php
    include "dbConfig.php";
    //--------------------------------------------
    // 以下開始擷取來自表單資料進行資料庫搜尋動作
    //--------------------------------------------

    //--------------------------------------------
    // 學號 => sno
    // 姓名 => name
    // 住址 => phone
    // 電話 => address
    // 以下根據來自表單之下拉式清單選項內容來決定
    // 對資料庫哪個欄位來進行搜尋動作
    //-------------------------------------------

    //-------------------------------------------------------------------------
    // 以下查詢字串的格式，請利用 like 搭配 % 敘述來做萬用字元比對
    // 
    //-------------------------------------------------------------------------
    $queryString = "select * from user";
    //-------------------------------------------------------------------------
    try
    {
        $recordSet = $dbLink->query($queryString);
        $recordRow = $recordSet->fetchAll();
        //
        if (count($recordRow) != 0)
        {       
            // print $queryString;
            print "<table border=1>";
            print "<tr><td>ID</td><td>姓名</td><td>性別</td><td>年齡</td></tr>";
            for ($i=0; $i<count($recordRow); $i++)
            {
				print"<tobody>";
                print "<tr>";
                print "<td>".$recordRow[$i]["ID"]."</td>";
                print "<td>".$recordRow[$i]["Name"]."</td>";
                print "<td>".$recordRow[$i]["Gender"]."</td>";
                print "<td>".$recordRow[$i]["Age"]."</td>";
				
				
				
                print "</tr>";
				print"</tobody>";
            }
            print "</table>";
            print "</kaiText>";
        }
        else
        {
            print "<kaiText>搜尋不到任何符合條件的紀錄<kaiText>";
        }

    }
    catch (PDOException $pdoe)
    {
        print "查詢錯誤：".$pdoe->getMessage();
    }
    //------------------------------------------------
  
	?> 

</tbody></table>
        <hr>
        <footer>
            <p>老人資料管理</p>
        </footer>
    </div>

    <script src="/Scripts/jquery-1.10.2.min.js"></script>
    <script src="/Scripts/bootstrap.min.js"></script>
	

</body>

</html>