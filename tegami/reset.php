<?php
$id = $_GET["id"];

 // データベースに接続
if(!$con=mysql_connect("localhost","root","root")){
 echo"接続エラー";
exit;
 } 

// データベースを選択
if(!mysql_select_db("tegami",$con)){
 echo"データベース選択エラー";
exit;
 }

// DELETE文を実行
$sql = "update meibo set flg= '0' ";
 if(!$res=mysql_query($sql)){
 echo "SQL実行時エラー";
exit;
 }

// データベースから切断
mysql_close($con);

// 登録完了メッセージの表示
echo "更新完了";
 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>update文</title>
<SCRIPT language="JavaScript">
 <!--
// 一定時間経過後に指定ページにジャンプする
mnt = 0.1; // 何秒後に移動するか？
url = "letter.php"; // 移動するアドレス
function jumpPage() {
   location.href = url;
}
 setTimeout("jumpPage()",mnt*1000)
 //-->
 </SCRIPT>
</head>
<body>
</body>
</html>