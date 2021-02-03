<?php
	//---------------------
	//設定SQL連線參數,採用pdo連線設定方式
	//--------
	//----設定資料庫連線方式
	$dbStr = "mysql:host=localhost;dbname=wen;charset=utf8";
	$dbUser="root";
	$dbPass="u0551825";
	//
	try
    {
        $dbLink = new PDO($dbStr, $dbUser, $dbPass);
    }
    catch (PDOExctption $pdoe)
    {
        print "資料庫連線錯誤：".$pdoe->message();
        die();
    }
    //-----------------------------------------------------------
?>