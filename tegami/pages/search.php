<?php

$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("otayori",$cn);
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO otayori(eyar,mooth,name,syumi,club) VALUE(\"$_POST[eyar]\",\"$_POST[mooth]\",\"$_POST[name]\",\"$_POST[syumi]\",\"$_POST[club]\")",$cn);
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>本登録リスト</title>
</head>
<body>
	<h1 align="center"></h1>
	
	<div align="left">
		
		</div>
		<div align="center">
			<br><br>
			<h1 style="font-family:'ＫＦひま字';">本登録リスト</h1>
			<!--<a href="../kako/toshi.php"><img src="../img/2016.png"width="100"></a>-->
			<img src="../img/2017_off.png"width="100">
			<a href="../kako/toshi20.php"><img src="../img/2018.png"width="100"></a>
			<a href="../kako/toshi30.php"><img src="../img/2019.png"width="100"></a><br><br>
			<a href="../kako/toshi40.php"><img src="../img/2020.png"width="100"></a>
			<a href="../kako/toshi50.php"><img src="../img/2021.png"width="100"></a>
			<a href="../kako/toshi60.php"><img src="../img/2022.png"width="100"></a>
			<!--<a href="../kako/toshi7.php"><img src="../img/2023.png"width="100"></a>　　
			<a href="../kako/toshi8.php"><img src="../img/2024.png"width="100"></a><br><br>
			<a href="../kako/toshi9.php"><img src="../img/2025.png"width="100"></a>-->

			<div class="toshi">
        		<a href="../letters.php"><img src="../img/m.png" alt=""></a>
    		</div>
		</div>

</body>
</html>