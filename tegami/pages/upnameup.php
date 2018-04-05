<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
</head>

<body>

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
$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);

$result = mysql_query("UPDATE meibo SET name=\"$name\",roomno=\"$roomno\",gr=\"$gr\",flg=\"0\",face=\"$filename\" WHERE id = \"$id\"",$cn1);

?>
<SCRIPT language="JavaScript">
 <!--
// 一定時間経過後に指定ページにジャンプする
mnt = 0.1; // 何秒後に移動するか？
url = "namedelete_171011.php"; // 移動するアドレス
function jumpPage() {
   location.href = url;
}
 setTimeout("jumpPage()",mnt*1000)
 //-->
 </SCRIPT>
</body>
</html>
