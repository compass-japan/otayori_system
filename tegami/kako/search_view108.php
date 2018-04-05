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
</head>
<body"#deb887">
<br>
<h1 align="center">完成者リスト</h1>
	<?php
	$result = mysql_query("SELECT * FROM complet WHERE name1 = 2020 and name2 = 8",$cn);
 //     $result = mysql_query("SELECT * FROM otayori WHERE eyar = 2020 and mooth = 8",$cn);

      $i=0;
      while($row = mysql_fetch_array($result))
      {
      $name = $row["name"];

      echo'<h2 align="center"><a href="preview3.php?no='.$row["no"].'"target="_top">'.$row["name"]. '様</h2></a><br>';
    
      $i++;
      }

?>



</body>
</html>

