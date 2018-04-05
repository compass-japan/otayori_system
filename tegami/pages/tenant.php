<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("meibo",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(roomno,name) VALUE(\"$_POST[roomno]\",\"$_POST[name]\")",$cn);
	}
	$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<title>入居者一覧</title>
	
<style type="text/css">
 <!--
select.sizechange{
 font-size:100%;
 }
 -->
 </style>
</head>
<body bgcolor="#d1d1ff">
	<h1 align="center"　style="display:block;"></h1>
		<div class="namelist" align="center">
			<?php
			$result = mysql_query("SELECT * FROM meibo",$cn);

			$cnt = 0;
      while($array = mysql_fetch_array($result)) {
       if ($cnt === 0) { print '<table>' . PHP_EOL; }
        if ($cnt % 4 === 0) {
          if ($cnt !== 0) { print '</tr>' . PHP_EOL; }

       print '<tr>';
        }
       print '<td align="center"><h3>'.$array["roomno"].'</h3></td>';
       print '<td align="center" style="color:blue;"><h3>'.$array["name"].'様｜</h3></td>';
        $cnt++;
      }
      if ($cnt !== 0) {
        while ($cnt % 4 !== 0) {
          print '<td>&nbsp;</td>';
          $cnt++;
        }
        print '</tr>' . PHP_EOL;
        print '</table>' . PHP_EOL;
      } else {

      }

    ?>
			
		</div>
    <p align="center"><b><a href="#" onClick="window.close(); return false;">ウィンドウを閉じる</a></b></p>
</body>
</html>