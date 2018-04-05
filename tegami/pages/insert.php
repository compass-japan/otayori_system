<?php
$path  = "../img/face/";
$file = $_FILES["imgf"]["name"];

$filename = $path .$file;
if (is_uploaded_file($_FILES["imgf"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgf"]["tmp_name"], $filename)) {
    //chmod("files/" . $filename, 0644);
    //echo "ファイルをアップロード";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename = $_POST["face"];
  //echo "ファイル";
}

$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(gr,name,roomno,flg,face) VALUE(\"$_POST[gr]\",\"$_POST[name]\",\"$_POST[roomno]\",0,\"$file\")",$cn);
	}
?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>メッセージ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<SCRIPT language="JavaScript">
 <!--
// 一定時間経過後に指定ページにジャンプする
mnt = 0.1; // 何秒後に移動するか？
url = "nameinsert.php"; // 移動するアドレス
function jumpPage() {
   location.href = url;
   parent.location.reload();
}
 setTimeout("jumpPage()",mnt*1000)
 //-->
 </SCRIPT>
</head>
  
<body>
</body>
</html>