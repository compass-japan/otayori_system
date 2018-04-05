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
    echo "";
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
    echo "";
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
    echo "";
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

$result = mysql_query("INSERT INTO complet(name,day,reader,name1,name2,info,yotei,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn);
      }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
      <meta charset="UTF-8">
      <title>Document</title>
</head>
<body"#deb887">
<br>
<h1 align="center">完成者リスト</h1>
<div align="center">
      <?php
      $result = mysql_query("SELECT * FROM complet WHERE name1 = 2017 and name2 = 12",$cn);

      $cnt = 0;
      while($array = mysql_fetch_array($result)) {
       if ($cnt === 0) { print '<table>' . PHP_EOL; }
        if ($cnt % 6 === 0) {
          if ($cnt !== 0) { print '</tr>' . PHP_EOL; }
          print '<tr>';
        }
       print '<td align="center"><h2><a href="preview3.php?no='.$array["no"].'"target="_top">'.$array["name"]. '</a>｜</h2></td>';
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
        print '';
      }

?>
<a href="toshi10.php"><img src="../img/m.png" alt=""></a>
</div>



</body>
</html>

