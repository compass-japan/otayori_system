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
    //chmod("files/" . $filename0, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename0 = $_POST["photo0"];
}

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
   // chmod("files/" . $filename, 0644);
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
if($file11){
  $style = "style=\"display:none;\"";
}
if(!$file11){
  $style1 = "style=\"display:none;\"";
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

$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
//前ページ、プレビューからとってきた名前を$namesに代入
	$names = $_POST["name"];
	$names = trim($names);

if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO mikan(name,day,day1,day2,reader,name1,name2,info,capc,photo0,photo1,photo2,photo3,photo4,photo11,cap1,cap2,cap3,cap4,cap11,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[day1]\",\"$_POST[day2]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[capc]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$filename11\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[cap11]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
  //入居者リストのDBをセレクト
	$result1 = mysql_query("select name from meibo ");
		}
			
		while ($row = mysql_fetch_array($result1)) {
			//$row['name']は入居者リストテーブルからとってきた全入居者
			$nameF = $row['name'];
			//もし入居者リストにある名前と仮登録前のプレビュー画面の名前が一致したものがあったらその入居者リストのflgを1にする
			if( $nameF == $names ){
				$result2 = mysql_query("update meibo SET flg=\"1\" WHERE name = \"$nameF\" ");
			}
	    }
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
		<title>保存画面</title>
		<link rel="stylesheet" href="../css/home.css" />
	<SCRIPT src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<SCRIPT>
	function saku(){
	var a="<?php 		
	$result = mysql_query("SELECT * FROM preview ORDER BY id DESC" ,$cn1);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$name = $row["name"];
			$day  = $row["day"];
			$day1  = $row["day1"];
			$day2  = $row["day2"];
			$reader=$row["reader"];
			$name1 = $row["name1"];
			$name2 = $row["name2"];
			$info = $row["info"];
			$capc = $row["capc"];
			$photo0 = $row["photo0"];
			$photo1 = $row["photo1"];
			$photo2 = $row["photo2"];
			$photo3 = $row["photo3"];
			$photo4 = $row["photo4"];
			$photo11 = $row["photo11"];
			$cap1 = $row["cap1"];
			$cap2 = $row["cap2"];
			$cap3 = $row["cap3"];
			$cap4 = $row["cap4"];
			$cap11 = $row["cap11"];
			$kg = $row["kg"];
			$mmhg = $row["mmhg"];
 			 
			 $yotei = nl2br($yotei);

				break;
		}
		 ?>";
			location.href="http://localhost:8080/deletefilel.php?photo0=<?php echo $photo0; ?> & photo1=<?php echo $photo1; ?> & photo2=<?php echo $photo2; ?> & photo3=<?php echo $photo3; ?> & photo4=<?php echo $photo4; ?> & photo11=<?php echo $photo11; ?>";
		};

			

	</SCRIPT>
	<SCRIPT>
	function saku1(){
	var ab="<?php 		
	$result = mysql_query("SELECT * FROM preview ORDER BY id DESC" ,$cn1);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			$name = $row["name"];
			$day  = $row["day"];
			$day1  = $row["day1"];
			$day2  = $row["day2"];
			$reader=$row["reader"];
			$name1 = $row["name1"];
			$name2 = $row["name2"];
			$info = $row["info"];
			$capc = $row["capc"];
			$photo0 = $row["photo0"];
			$photo1 = $row["photo1"];
			$photo2 = $row["photo2"];
			$photo3 = $row["photo3"];
			$photo4 = $row["photo4"];
			$photo11 = $row["photo11"];
			$cap1 = $row["cap1"];
			$cap2 = $row["cap2"];
			$cap3 = $row["cap3"];
			$cap4 = $row["cap4"];
			$cap11 = $row["cap11"];
			$kg = $row["kg"];
			$mmhg = $row["mmhg"];
 			 
			 $yotei = nl2br($yotei);

				break;
		}
		 ?>";
			location.href="http://localhost:8080/deletefiles.php?photo0=<?php echo $photo0; ?> & photo1=<?php echo $photo1; ?> & photo2=<?php echo $photo2; ?> & photo3=<?php echo $photo3; ?> & photo4=<?php echo $photo4; ?> & photo11=<?php echo $photo11; ?>";
		};

			

	</SCRIPT>
	</head>
	<body><br>
		<h1 style="text-align:center;font-family: 'ＫＦひま字';">仮登録をしました。</h1><br>
		<div align="center">
    <a href="#" onclick="saku();"><img align="center"src="../img/btn_hold_end.png" alt=""></a>
    <a href="#" onclick="saku1();"><img align="center"src="../img/btn_keizoku.png"></a>
    <p align="center"><b>※未完者リストに登録されました</b></p>
	</div>
	</body>
</html>