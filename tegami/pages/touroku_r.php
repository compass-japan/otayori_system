<?php
	/*
$path = "../img/photo/";
$file0 = $_FILES["imgup0"]["name"];
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];

$filename0 = $path . $file0;
if (is_uploaded_file($_FILES["imgup0"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup0"]["tmp_name"], $filename0)) {
    chmod("files/" . $filename0, 0644);
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
    chmod("files/" . $filename, 0644);
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
    chmod("files/" . $filename1, 0644);
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
    chmod("files/" . $filename2, 0644);
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
    chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  $filename3 = $_POST["photo4"];
}

if(!$file){
  $filename = NULL;
}
if(!$file0){
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



$cn1=mysql_connect("localhost","root","zero21");
$db=mysql_select_db("tegami",$cn1);
	$names = $_POST["name"];
	$names = trim($names);
$no = $_GET["no"];
$no1= $_POST["no"];
echo $no . "no";
echo $no1 . "no1";
if(!empty($_POST["name"])){
//	$result = mysql_query("UPDATE complet SET name=\"$name\",name1=\"$name1\",name2=\"$name2\",day=\"$day\",reader=\"$reader\",kg=\"$kg\",mmhg=\"$mmhg\",photo0=\"$filename0\",info=\"$info\",yotei=\"$yotei\",photo1=\"$filename\",photo2=\"$filename1\",photo3=\"$filename2\",photo4=\"$filename3\",cap1=\"$cap1\",cap2=\"$cap2\",cap3=\"$cap3\",cap4=\"$cap4\" WHERE no = \"$no\"",$cn1);

//$result = mysql_query("INSERT INTO complet(no,name,day,reader,name1,name2,info,yotei,photo0,photo1,photo2,photo3,photo4,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$no\",\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$_POST[photo0]\",\"$_POST[photo1]\",\"$_POST[photo2]\",\"$_POST[photo3]\",\"$_POST[photo4]\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
//$result1 = mysql_query("select name from mikan ");
	}
	
//	while ($row = mysql_fetch_array($result1)) {
		
//		if( $row['name'] === $names){

//			$result2 = mysql_query("delete from mikan where name = \"$row[name]\" ");
//		}
 //   }
    
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="UTF-8">
	<title>登録</title>
	<SCRIPT src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<SCRIPT>
		$(function(){
	var a = "<?php 		
	$result = mysql_query("SELECT * FROM complet where no=$no " ,$cn1);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
			echo "0: ".$row["photo0"];
			echo "1: ".$row["photo1"];
			echo "2: ".$row["photo2"];
			echo "3: ".$row["photo3"];
			echo "4: ".$row["photo4"];
			$name = $row["name"];
			$day  = $row["day"];
			$reader=$row["reader"];
			$name1 = $row["name1"];
			$name2 = $row["name2"];
			$info = $row["info"];
			$yotei = $row["yotei"];
			$photo0 = $row["photo0"];
			$photo1 = $row["photo1"];
			$photo2 = $row["photo2"];
			$photo3 = $row["photo3"];
			$photo4 = $row["photo4"];
			$cap1 = $row["cap1"];
			$cap2 = $row["cap2"];
			$cap3 = $row["cap3"];
			$cap4 = $row["cap4"];
			$kg = $row["kg"];
			$mmhg = $row["mmhg"];
 			 
			 $yotei = nl2br($yotei);
			
			 	 
				
				break;
		}
		 ?>";

			location.href="http://localhost:8080/deletefile.php?photo0=<?php echo $photo0; ?> & photo1=<?php echo $photo1; ?> & photo2=<?php echo $photo2; ?> & photo3=<?php echo $photo3; ?> & photo4=<?php echo $photo4; ?> & ";
		});	
	</SCRIPT>

</head>
<body>
	
</body>
</html>