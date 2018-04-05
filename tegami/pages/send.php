<?php
$path = "../img/photo/";
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

if(!$file){
  $filename = "../img/bg.jpg";
}


if(!$file1){
  $filename1 = "../img/bg.jpg";
}

if(!$file2){
  $filename2 = "../img/bg.jpg";
}

if(!$file3){
  $filename3 = "../img/bg.jpg";
}

$DBSERVER="localhost";
$DBUSER="root";
$DBPASSWORD="zero21";
$DBNAME="tegami";
$no = $_REQUEST["no"];
$name = $_REQUEST["name"];
$info = $_REQUEST["info"];
$yotei = $_REQUEST["yotei"];
$cap1 = $_REQUEST["cap1"];
$cap2 = $_REQUEST["cap2"];
$cap3 = $_REQUEST["cap3"];
$cap4 = $_REQUEST["cap4"];

$con=mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);
$sql="UPDATE tegami SET name=\"$name\",info=\"$info\",yotei=\"$yotei\",photo1=\"$filename\",photo2=\"$filename1\",photo3=\"$filename2\",photo4=\"$filename3\",cap1=\"$cap1\",cap2=\"$cap2\",cap3=\"$cap3\",cap4=\"$cap4\"";

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
url = "letter1.php"; // 移動するアドレス
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