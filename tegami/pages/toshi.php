<?php

$cn=mysql_connect("localhost","root","zero21");
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
<body bgcolor="#deb887">
	<h1 align="center"></h1>
	<form method="post" action="update.php"enctype="multipart/form-data"> 
        <div class="kako">
            <iframe src="" name="tuki"id="tuki"width="400" height="500"align="right" scrolling="yes"frameborder ="0"></iframe>
        	<div align="left">
                <h2><a href="search_view.php"target="tuki">1月</a></h2>
                <h2><a href=""target="tuki">2月</a></h2>
                <h2><a href=""target="tuki">3月</a></h2>
                <h2><a href=""target="tuki">4月</a></h2>
                <h2><a href=""target="tuki">5月</a></h2>
                <h2><a href=""target="tuki">6月</a></h2>
                <h2><a href=""target="tuki">7月</a></h2>
                <h2><a href=""target="tuki">8月</a></h2>
                <h2><a href=""target="tuki">9月</a></h2>
                <h2><a href=""target="tuki">10月</a></h2>
                <h2><a href=""target="tuki">11月</a></h2>
                <h2><a href=""target="tuki">12月</a></h2>
          </div>
	</div>
  <a href="../letter.php"><img src="../img/m.png" alt=""></a>
		
	</form>
</body>
</html>