<?php
$path = "../img/photo/";
$file0 = $_FILES["imgup0"]["name"];
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];
$file11 = $_FILES["imgup11"]["name"];

$filename0 = $path . $file0;
if (is_uploaded_file($_FILES["imgup0"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup0"]["tmp_name"], $filename0)) {
   // chmod("files/" . $filename0, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename0 = $_POST["photo0"];
}
$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    //chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
		$filename = $_POST["photo1"];
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    //chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
		$filename1 = $_POST["photo2"];
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    //chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
		$filename2 = $_POST["photo3"];
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
		$filename3 = $_POST["photo4"];
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename11)) {
    //chmod("files/" . $filename3, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename11 = $_POST["photo11"];	
}

/*
if(!$file0){
  $filename0 = NULL;
}
if(!$file){
  $filename = NULL;
}


if(!$file1){
  $filename1 = NULL;
}

if(!$file2){
  $filename2 = NULL;
}

if(!$file3){
  $filename3 = NULL;
}
*/

$no = $_GET["no"];
$day = $_REQUEST["day"];
$day1  = $_REQUEST["day1"];
$day2  = $_REQUEST["day2"];
$reader = $_REQUEST["reader"];
$name = $_REQUEST["name"];
$name1 = $_REQUEST["name1"];
$name2 = $_REQUEST["name2"];
$info = $_REQUEST["info"];
$capc = $_REQUEST["capc"];
$cap1 = $_REQUEST["cap1"];
$cap2 = $_REQUEST["cap2"];
$cap3 = $_REQUEST["cap3"];
$cap4 = $_REQUEST["cap4"];
$cap11 = $_REQUEST["cap11"];
$kg = $_REQUEST["kg"];
$mmhg = $_REQUEST["mmhg"];
    


$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
if(!empty($_POST["name"])){
$result = mysql_query("UPDATE preview SET name=\"$name\",name1=\"$name1\",name2=\"$name2\",day=\"$day\",day1=\"$day1\",day2=\"$day2\",reader=\"$reader\",kg=\"$kg\",mmhg=\"$mmhg\",photo0=\"$filename0\",info=\"$info\",capc=\"$capc\",photo1=\"\",photo2=\"\",photo3=\"\",photo4=\"\",photo11=\"\",cap1=\"$cap1\",cap2=\"$cap2\",cap3=\"$cap3\",cap4=\"$cap4\",cap11=\"\"",$cn1);
	}
//$con=mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);
//$sql="UPDATE complet SET name=\"$name\",name1=\"$name1\",name2=\"$name2\",day=\"$day\",reader=\"$reader\",kg=\"$kg\",mmhg=\"$mmhg\",photo0=\"$filename0\",info=\"$info\",yotei=\"$yotei\",photo1=\"$filename\",photo2=\"$filename1\",photo3=\"$filename2\",photo4=\"$filename3\",cap1=\"$cap1\",cap2=\"$cap2\",cap3=\"$cap3\",cap4=\"$cap4\" WHERE no = $no ";

//$rst=mysql_query($con, $sql);

//mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<title>プレビュー画面</title>
		<link rel="stylesheet" href="../css/home.css" />
		<SCRIPT src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<SCRIPT language="JavaScript">
	 <!--
	// 一定時間経過後に指定ページにジャンプする
	mnt = 1; // 何秒後に移動するか？
	url = "mletter.php"; // 移動するアドレス
	function jumpPage() {
	   location.href = url;
	}
	 setTimeout("jumpPage()",mnt*1000)
	 //-->
	 </SCRIPT>
	</head>
	<body bgcolor="f3f3f3">
	 <h3>写真とコメントを削除しました。</h3>
	</body>
</html>