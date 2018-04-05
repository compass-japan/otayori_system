<?php

$path = "img/photo/";
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
	$filename = NULL;
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    //chmod("files/" . $filename1, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename1 = NULL;	
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    //chmod("files/" . $filename2, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename2 = NULL;	
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename3 = NULL;	
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename11)) {
    //chmod("files/" . $filename3, 0644);
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
	$filename11 = NULL;	
}     

	if($file11){
	$style = "style=\"display:none;\"";
	}
	
	if(!$file11){
	$style1 = "style=\"display:none;\"";


	}

$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);

if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO preview(name,day,day1,day2,reader,name1,name2,info,capc,photo0,photo1,photo2,photo3,photo4,photo11,cap1,cap2,cap3,cap4,cap11,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[day1]\",\"$_POST[day2]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[capc]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$filename11\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[cap11]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);

	}

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<title>エラー画面</title>
		<link rel="stylesheet" href="../css/home.css" />
	
	<SCRIPT src="../js/jquery-3.2.1.min.js" type="text/javascript"></SCRIPT>
	<SCRIPT>
		function saku(){
	var a = "<?php 		
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

			location.href="http://localhost:8080/deletefilel.php?photo0=<?php echo $photo0; ?> & photo1=<?php echo $photo1; ?> & photo2=<?php echo $photo2; ?> & photo3=<?php echo $photo3; ?> & photo4=<?php echo $photo4; ?> & ";
	//	location.href="http://localhost:8080/deletefile.php?photo0=<?php echo $photo0; ?> & photo1=<?php echo $photo1; ?> &photo2=<?php echo $photo2; ?> &photo3=<?php echo $photo3; ?> &photo4=<?php echo $photo4; ?>  ";

		}
	function oo(){
		//print(); 
		setTimeout("dd()",1000)		
	}
			
	function dd(){
		document.s1.submit(); 
	//	saku();
	}
			
	$(function(){
	    $('#back').click(function() {
	        $('#form').attr('action','letter_k1.php');
	        $('#form').submit();
	    });


	});
	</SCRIPT>
	
	</head>
	<body bgcolor="f3f3f3">
	<form method="post" action="touroku_s.php" id="form" name="s1" enctype="multipart/form-data">
	
	<?php

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
			 echo <<<EOM
			<input type="hidden" name="id" value="$no">
			<input type="hidden" name="name" value="$name">
			<input type="hidden" name="name1" value="$name1">
			<input type="hidden" name="name2" value="$name2">
			<input type="hidden" name="day" value="$day">
			<input type="hidden" name="day1" value="$day1">
			<input type="hidden" name="day2" value="$day2">
			<input type="hidden" name="reader" value="$reader">
			<input type="hidden" name="info" value="$info">
			<input type="hidden" name="capc" value="$capc">
			<input type="hidden" name="photo0" value="$photo0">
			<input type="hidden" name="photo1" value="$photo1">
			<input type="hidden" name="photo2" value="$photo2">
			<input type="hidden" name="photo3" value="$photo3">
			<input type="hidden" name="photo4" value="$photo4">
			<input type="hidden" name="photo11" value="$photo11">
			<input type="hidden" name="cap1" value="$cap1">
			<input type="hidden" name="cap2" value="$cap2">
			<input type="hidden" name="cap3" value="$cap3">
			<input type="hidden" name="cap4" value="$cap4">
			<input type="hidden" name="cap11" value="$cap11">
			<input type="hidden" name="kg" value="$kg">
			<input type="hidden" name="mmhg" value="$mmhg">
				 
			<div style="margin-top:55px;">
			<h1 align="center" style="color:red;">警告！！</h1>
			<h2 align="center">写真は１枚用か４枚用、どちらかを選択してください。</h2>
			<h1 align="center"><a href="letter_k.php" id="back"><img src="img/back_l.png"></a></h1>
		    </div>
EOM;
break;
}
?>
</form>
	</body>
</html>