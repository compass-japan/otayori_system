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
	<title>印刷用お便り</title>
</head>
<body>
	<h1 align="center"></h1>
	
	<div align="left">
		
		</div>
		<div align="center">
			<br><br>
			<h1 style="font-family:'ＫＦひま字';">印刷用お便り</h1>
			<!--<a href="../kako/toshi.php"><img src="../img/2016.png"width="100"></a>-->
			<a href="../kako/toshi1.php"><img src="../img/2017.png"width="100"></a>
			<a href="../kako/toshi2.php"><img src="../img/2018.png"width="100"></a>
			<a href="../kako/toshi3.php"><img src="../img/2019.png"width="100"></a><br>
			<a href="../kako/toshi4.php"><img src="../img/2020.png"width="100"></a>
			<a href="../kako/toshi5.php"><img src="../img/2021.png"width="100"></a>
			<a href="../kako/toshi6.php"><img src="../img/2022.png"width="100"></a>
			<!--<a href="../kako/toshi7.php"><img src="../img/2023.png"width="100"></a>　　
			<a href="../kako/toshi8.php"><img src="../img/2024.png"width="100"></a><br><br>
			<a href="../kako/toshi9.php"><img src="../img/2025.png"width="100"></a>-->
			<div class="toshi">
        		<a href="../letters.php"><img src="../img/m.png" alt=""></a>
    		</div>  　　
		</div>

</body>
</html>