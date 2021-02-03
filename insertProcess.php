<?php
	session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <style>
        kaiText
        {
            font-family : 標楷體;
            font-size : 30px;
            line-height : 36px;
        }
    </style>
</head>
<body>

<?php
	if(isset($_SESSION['is_login'])&&$_SESSION['is_login']==true):
?>
<?php
    include "dbConfig.php";
    //--------------------------------------------
    // 以下開始擷取來自表單資料進行資料庫插入作業
    //--------------------------------------------
    $ID = $_POST["ID"];
    $Name = $_POST["Name"];
    $Gender = $_POST["Gender"];
    $Age = $_POST["Age"];
	
    //--------------------------------------------
    $queryString = "insert into user (ID, Name, Gender, Age, Pid) values ('$ID', '$Name', '$Gender', '$Age', '$Pid')";
    try
    {
        $dbLink->exec($queryString);
        print "<kaiText>";
        print "新增人員成功";
        print "</kaiText>";
    }
    catch (PDOException $pdoe)
    {
        print "新增人員失敗：".$pdoe->getMessage();    
    }
    //----------------------------------------------------
	header("location:index.php");
?>
<?php else:
	endif;
?>
</body>
</html>