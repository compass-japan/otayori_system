<?php

$DBSERVER="localhost";
$DBUSER="root";
$DBPASSWORD="zero21";
$DBNAME="meibo";

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
 
$con=mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);
$sql="UPDATE meibo SET name=\"$name\" ";

//$sql=("DELETE FROM meibo WHERE id = $id");
$rst=mysqli_query($con, $sql);

if($rst) $m="";
else $m="";
mysqli_close($con);

?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>メッセージ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<SCRIPT language="JavaScript">
 <!--
// 一定時間経過後に指定ページにジャンプする
mnt = 1; // 何秒後に移動するか？
url = "../letter.php"; // 移動するアドレス
function jumpPage() {
   location.href = url;
}
 setTimeout("jumpPage()",mnt*1000)
 //-->
 </SCRIPT>
</head>
  <h1 align="center">Now Loading...</h1>
<body>
</body>
</html>