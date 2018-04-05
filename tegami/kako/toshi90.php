<?php

$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO complet(name,day,reader,name1,name2,info,yotei,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn);

//$result = mysql_query("INSERT INTO otayori(eyar,mooth,name,syumi,club) VALUE(\"$_POST[eyar]\",\"$_POST[mooth]\",\"$_POST[name]\",\"$_POST[syumi]\",\"$_POST[club]\")",$cn);

	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="../css/home.css" />
</head>
<body"#deb887">
	<h1 align="center"></h1>
	<form method="post" action="update.php" enctype="multipart/form-data"> 
        <div class="kako">        	
            <div align="center">
                <a href="#"><img src="../img/1.png"width="100"></a>　　
                <a href="#"><img src="../img/2.png"width="100"></a>　　
                <a href="#"><img src="../img/3.png"width="100"></a><br><br>
                <a href="#"><img src="../img/4.png"width="100"></a>　　
                <a href="#"><img src="../img/5.png"width="100"></a>　　
                <a href="#"><img src="../img/6.png"width="100"></a><br><br>
                <a href="#"><img src="../img/7.png"width="100"></a>　　
                <a href="#"><img src="../img/8.png"width="100"></a>　　
                <a href="#"><img src="../img/9.png"width="100"></a><br><br>
                <a href="#"><img src="../img/10.png"width="100"></a>　　
                <a href="#"><img src="../img/11.png"width="100"></a>　　
                <a href="#"><img src="../img/12.png"width="100"></a><br><br>

            </div>
	   </div>
  <div class="toshi">
        <a href="../pages/search.php"><img src="../img/m.png" alt=""></a>
    </div>  
		
	</form>
</body>
</html>