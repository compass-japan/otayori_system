<?php
$path = "../img/photo/";
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    //chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
  echo "";
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    //chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
  echo "";
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    //chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
  echo "";
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
  echo "";
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

$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO mikan(name,day,reader,name1,name2,info,yotei,photo1,photo2,photo3,photo4,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn);
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>未完者リスト</title>
  <style type="text/css">
.bt1{
  width:336px;
  margin:20px auto 0 auto;
  //margin-top: 10px;
  text-align:center;
}
      
</style>
</head>
<body>
	<h1 align="center" style="font-family: 'ＫＦひま字';">未完者リスト</h1>
	<form method="post" action="update.php" enctype="multipart/form-data">  
	<div align="center">
  <input type="hidden" name="photo1" value="$file">
  <input type="hidden" name="photo2" value="$file1">
  <input type="hidden" name="photo3" value="$file2">
  <input type="hidden" name="photo4" value="$file3">
		</div>
		<div align="center">
		<?php
			$result = mysql_query("SELECT * FROM mikan",$cn);

			$cnt = 0;
      while($array = mysql_fetch_array($result)) {
       if ($cnt === 0) { print '<table cellspacing="0" style=" border: 2px solid #bc372b;">' . PHP_EOL; }
        if ($cnt % 6 === 0) {
          if ($cnt !== 0) { print '</tr>' . PHP_EOL; }
          print '<tr style="border-bottom: 1px solid #bfa797;">';
        }
       print '<td align="center" bgcolor="fff8e3" width="150" style="border: 1px solid #bc372b;"><h2><a href="mletter.php?no='.$array["no"].'">'.$array["name"]. '</a></h2></td>';
        $cnt++;
      }
      if ($cnt !== 0) {
        while ($cnt % 6 !== 0) {
          print '<td>&nbsp;</td>';
          $cnt++;
        }
        print '</tr>' . PHP_EOL;
        print '</table>' . PHP_EOL;
      } else {

      }

    ?>
    <div class="bt1">
    <a href="../letters.php"><img src="../img/btn_back_edit.png" alt=""></a>
    </div>
		</div>
	</form>
</body>
</html>