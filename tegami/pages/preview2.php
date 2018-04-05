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
$sql="UPDATE tegami SET name=\"$name\",info=\"$info\",yotei=\"$yotei\",photo1=\"$filename\",photo2=\"$filename1\",photo3=\"$filename2\",photo4=\"$filename3\",cap1=\"$cap1\",cap2=\"$cap2\",cap3=\"$cap3\",cap4=\"$cap4\"WHERE id=$id";

$rst=mysqli_query($con, $sql);

if($rst) $m="";
else $m="";
mysqli_close($con);

?>
<?php
session_start();
try {
$pdo = new PDO('mysql:host=localhost;dbname=tegami;charset=utf8','root','zero21',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
mysql_query('SET NAMES utf8', $pdo );
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
		<title>プレビュー画面</title>
		<link rel="stylesheet" href="../css/home.css" />
	</head>
	<body>
	<?php
		$result = mysql_query("SELECT * FROM tegami ORDER BY no DESC" ,$cn1);
		$i=0;
		while($row = mysql_fetch_array($result))
		{

			$name = $row["name"];
			$day  = $row["day"];
			$reader=$row["reader"];
			$name1 = $row["name1"];
			$name2 = $row["name2"];
			$info = $row["info"];
			$yotei = $row["yotei"];
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
			 echo <<<EOM
			 
		<br><div class="contentpr"><br>
				<!--ヘッダー-->
				<header>
					<table class="header1">
						<div class="table">
							<tr><th class="title1">$name1 $name2 号</th></tr>
							<tr><th class="title">ラヴィーレ習志野台便り</th><th class="hk">発　行　日$no　　　　$day<br>編集責任者　$reader</th></tr>
						</div>
					</table>
				</header><br>
					<!--メッセージ及びホーム長写真-->
					<div class="homebox">
						<div class="boxa">
							<div id="kao">
							<img src="../img/kamakura.jpg" align="center"width="130">
							</div>
							<p id="outline">SOMPOケア ラヴィーレ習志野台<br>ホーム長 栗山　利幸</p>
						</div>
						<div class="boxb">
							<!--ここにホーム長メッセージを書く-->
							$info
						</div>		
					</div>
					<!--スケジュール-->
					<div class="schedule">
						<h3>来月のスケジュール</h3>
						<div>
							<!--ここに予定を書く-->
							$yotei
						</div>
					</div>
			
					<div class="namebox">
						<h3>今月の$name 様のご様子</h3>
					</div>
					<div class="kenkou"align="center">
						<p>体重：　　　　　　$kg kg 血圧：　　　　　　$mmhg mmHg</p>
					</div>
					<div class="hader_bg">
						<table clas="photobale"align="center">
							<tr><th><img src="$photo1"class="photo"width="300" alt=""></th><th >　<img class="photo"src="$photo2"width="300" alt=""></th></tr>
							<tr><th>$cap1</th><th>$cap2</th></tr>
							<tr><th><img class="photo"src="$photo3"width="300" alt=""></th><th >　<img class="photo"src="$photo4"width="300" alt=""></th></tr>
							<tr><th>$cap3</th><th>$cap4</th></tr>
						</table>
					</div>
				</div>
				

EOM;
break;
}
?>
<div id="print"align="center">
			<a href="#" onclick="window.print(); return false;"><img src="../img/familyHistory_print.png"></a>
			<a href="#" onclick="history.back(); return false;"><img src="../img/back_l.png"></a>
</div>	
<footer>SOMPO ケア　ラヴィーレ習志野台</footer>
	</body>
</html>