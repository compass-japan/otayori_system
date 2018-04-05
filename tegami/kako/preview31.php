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
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
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
  echo "";
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
  echo "";
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
  echo "";
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
  echo "";
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO preview(name,day,day1,day2,reader,name1,name2,info,capc,yotei,photo0,photo1,photo2,photo3,photo4,photo11,cap1,cap2,cap3,cap4,cap11,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[day1]\",\"$_POST[day2]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$_POST[capc]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$filename11\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[cap11]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
	}
$no = $_GET["no"];

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<title>プレビュー画面</title>
		<link rel="stylesheet" href="../css/home.css" />
		<SCRIPT src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<SCRIPT>

	function goServletB(){
	 document.getElementById('form').action = '../letter.php';
	 }
	 </SCRIPT>
	</head>
	<body"f3f3f3">
	<form method="post" action="../pages/upletter.php?no=<?php echo $no ?>"id="form" name="s1" enctype="multipart/form-data">
	<?php
			$today = date("Y/m/d");
		//	echo $today;
			$str1 = substr($today, 5, 2);
			$str2 = substr($today, 8, 2);
		//		echo $str1;
		//	echo $str2;
			if(($str1 == "12")){
				$s="../img/tsubaki_original.png";
				$BG="wrap";
			}
			if(($str1 == "1")){
				$s="../img/tsubaki_original.png";
				$BG="wrap";
			}
			if(($str1 == "2")){
				$s="../img/tsubaki_original.png";
				$BG="wrap";
			}
			if(($str1 == "6")){
				$s="../img/sunflower_w120.png";
				$BG="wrap2";
			}
			if(($str1 == "7")){
				$s="../img/sunflower_w120.png";
				$BG="wrap2";
			}
			if(($str1 == "8")){
				$s="../img/sunflower_w120.png";
				$BG="wrap2";
			}
			if(($str1 == "3")){
				$s="../img/sakura_w120.png";
				$BG="wrap3";
			}
			if(($str1 == "4")){
				$s="../img/testbg.jpg";
				$BG="wrap3";
			}
			if(($str1 == "5")){
				$s="../img/sakura_w120.png";
				$BG="wrap3";
			}
			if(($str1 == "9")){
				$s="../img/cosmos_w120.png";
				$BG="wrap4";
			}
			if(($str1 == "10")){
				$s="../img/cosmos_w120.png";
				$BG="wrap4";
			}
			if(($str1 == "11")){
				$s="../img/cosmos_w120.png";
				$BG="wrap4";
			}
		$result = mysql_query("SELECT * FROM complet where no=\"$no\"" ,$cn1);
		$i=0;
		while($row = mysql_fetch_array($result))
		{

			$no = $row["no"];
			$name = $row["name"];
			$day  = $row["day"];
			$day1  = $row["day1"];
			$day2  = $row["day2"];
			$reader=$row["reader"];
			$name1 = $row["name1"];
			$name2 = $row["name2"];
			$info = $row["info"];
			$capc = $row["capc"];
			$yotei = $row["yotei"];
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
			if($photo11){
			  $style = "style=\"display:none;\""; 
			}
			else{
				$style = ""; 
			}
			if(!$photo11){
			  $style1 = "style=\"display:none;\"";
			 
			}
			else{
				$style1 = ""; 
			}
			 echo <<<EOM
			 	 
			<input type="hidden" name="name" value="$name">
			<input type="hidden" name="name1" value="$name1">
			<input type="hidden" name="name2" value="$name2">
			<input type="hidden" name="day" value="$day">
			<input type="hidden" name="day1" value="$day1">
			<input type="hidden" name="day2" value="$day2">
			<input type="hidden" name="reader" value="$reader">
			<input type="hidden" name="info" value="$info">
			<input type="hidden" name="capc" value="$capc">
			<input type="hidden" name="yotei" value="$yotei">
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
			<div class="contentpr">
			<div id=$BG>
				<!--ヘッダー-->
				<div id="header">
					<div id="seasonFlower">
					
					</div>
					<table id="headerInfo">
							<tr><th class="title1"><a name="name1">$name1</a> <a name="name2">$name2</a>号</th></tr>
							<tr><th class="title">ラヴィーレ習志野台便り</th><th class="hk1">発行日 $day 年$day1 月$day2 日<br>編集責任者 $reader</th></tr>
					</table>
				</div>
					<!--メッセージ及びホーム長写真-->
					
					<div class="homebox">
						<div class="boxa">
							<div id="kao">
							<img class="ivent" src="$photo0" align="">
							</div>
							<p id="outline">
EOM;
								echo nl2br($capc);
					echo <<<EOM
					</p>
						</div>
						<div class="boxb">
							<!--ここにホーム長メッセージを書く-->
							$info
						</div>		
					</div>
					<!--スケジュール-->
					<div class="schedule">
						<h6></h6>
						<div class="yotei">
							
						</div>
					</div>
					</div>
					
					<div class="namebox">
						<h3>今月の$name 様のご様子</h3>
					</div>
					<div class="kenkou"align="center">
						<p>体重：　$kg kg　　血圧：　$mmhg mmHg</p>
					</div>
					<div class="hader_bg1">
		            <table class="photobale"align="center"  >
							<tr><td width="70"></td><td align="left" valign="top"><img src="$photo1"class="photo"></td><td align="right" valign="top"><img class="photo"src="$photo2" alt=""></td><td width="70"></td></tr>
							<tr><td width="70"></td><td class="capv" align="center">$cap1</td><td class="capv"align="center">$cap2</td><td width="70"></td></tr>
							<tr><td width="70"></td><td align="left" valign="bottom"><img class="photo"src="$photo3" alt=""></td><td align="right" valign="bottom">　<img class="photo"src="$photo4" alt=""></td><td width="70"></td></tr>
							<tr><td width="70"></td><td class="capv"align="center">$cap3</td><td class="capv"align="center">$cap4</td><td width="70"></td></tr>
						</table>
		            <table class="photobalea1" align="center" >
		              <tr><td><img class="photo11" src="$photo11"></td></tr>
		            </table>
            <div align="center">$cap11</div>
          </div>
				<div class="foot"></div>
				</div>
EOM;
break;

}
?>

<div id="print"align="center">
	
	<input type="image" src="../img/back_s.png" name="send" id="form"wrap="hard" onclick="goServletB();">

	<?php 	echo'	<a href="#" onclick="document.s1.submit(); return false;"><img src="../img/back_t.png"></a>';?>
</div>

</form>
	</body>
</html>