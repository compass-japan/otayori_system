<?php

$cn=mysql_connect("localhost","root","zero21");
$db=mysql_select_db("otayori",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO otayori(eyar,mooth,name,syumi,club) VALUE(\"$_POST[eyar]\",\"$_POST[mooth]\",\"$_POST[name]\",\"$_POST[syumi]\",\"$_POST[club]\")",$cn);
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
      $result = mysql_query("SELECT * FROM otayori WHERE eyar = 2016 and mooth = 1",$cn);

      $i=0;
      while($row = mysql_fetch_array($result))
      {
      $name = $row["name"];

      echo'<h2><a href="mletter.php">'.$row["name"]. '様</h2></a><br>';
    
      $i++;
      }

?>
</body>
</html>

