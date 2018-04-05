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

$id = $_GET["id"];
$result = mysql_query("SELECT * FROM meibo WHERE id = $id",$cn1);
$i=0;
while($row = mysql_fetch_array($result))
{
	$id   = $row["id"];
	$gr = $row["gr"];
	$name = $row["name"];
	$roomno  = $row["roomno"];
	$flg  = $row["flg"];
	$face =$row["face"];
	
	echo <<<EOM
		<input type="hidden" name="id" value="$id">
		<input type="hidden" name="face" value="$face">
	<h1 align="center"></h1>
	<form method="post" action="upnameup.php" id="form" enctype="multipart/form-data">

	<div class="namelist1" align="center"> 
		<b>号室：</b><input type="text" name="roomno" value="$roomno" size="15" style="width:150px;height:23px; ime-mode: disabled;" id="textbox" required aria-required="true"><br>
		<b>名前：</b><input type="text" name="name" value="$name" size="15" style="width:150px;height:23px;" id="textbox" required aria-required="true"><br>
		
		<b>顔写真：</b> <input type="file" name="imgf" required aria-required="true" style="width:180px;"><br>
		<b>gno：</b><input type="text" name="gr" value="$gr" size="15" style="width:150px;height:23px;" id="textbox"><br><br>
		<input type="image" src="../img/submit.png" name="send" id="send" width="100">
	</div>
	</form>
EOM;
$i++;
break;

}

?>

</body>
</html>
