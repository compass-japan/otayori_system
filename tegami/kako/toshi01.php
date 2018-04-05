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
	<title>Document</title>
    <link rel="stylesheet" href="../css/home.css" />
</head>
<body"#deb887">
<br>
<h1 align="center">完成者リスト</h1>
	<h1 align="center"></h1>
	<form method="post" action="update.php"enctype="multipart/form-data"> 
        <div class="kako">
            <iframe src="" name="tuki"id="tuki"width="400" height="500"align="right" scrolling="yes"frameborder ="0"></iframe>
        	<div align="left">
                <h3><a href="search_view1.php"target="tuki">1月</a></h3>
                <h3><a href="search_view2.php"target="tuki">2月</a></h3>
                <h3><a href="search_view3.php"target="tuki">3月</a></h3>
                <h3><a href="search_view4.php"target="tuki">4月</a></h3>
                <h3><a href="search_view5.php"target="tuki">5月</a></h3>
                <h3><a href="search_view6.php"target="tuki">6月</a></h3>
                <h3><a href="search_view7.php"target="tuki">7月</a></h3>
                <h3><a href="search_view8.php"target="tuki">8月</a></h3>
                <h3><a href="search_view9.php"target="tuki">9月</a></h3>
                <h3><a href="search_view10.php"target="tuki">10月</a></h3>
                <h3><a href="search_view11.php"target="tuki">11月</a></h3>
                <h3><a href="search_view12.php"target="tuki">12月</a></h3>
          </div>
          <a href="../letters.php"><img align="center"src="../img/m.png" alt=""></a>
	</div>
  
		
	</form>
</body>
</html>