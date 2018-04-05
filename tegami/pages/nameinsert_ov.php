<?php
	
$cn=mysql_connect("localhost","root","zero21");
$db=mysql_select_db("meibo",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name) VALUE(\"$_POST[name]\")",$cn);
	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<title>入居者登録/削除</title>
	<script>
$(function(){
    $('#send').click(function() {
        $('#submit').attr('action','insert.php');
        $('#submit').submit();
    });
    $('#delete').click(function() {
        $('#submit').attr('action','ndelete.php');
        $('#submit').submit();
    });

});
function goServletB(){
 document.getElementById('form').action = 'insert.php ';
 }
function goServletC(){
 document.getElementById('form').action = 'ndelete.php';
 }
</script>
<style type="text/css">
 <!--
select.sizechange{
 font-size:100%;
 }
 -->
 </style>
</head>
<body bgcolor="#deb887"><br>
	<h1 align="center">入居者登録/削除</h1>
	<form method="post" action=""id="form">
	<div class="kako1">
	<div class="namelist" align="right">
			名前：<select  name="name" class="sizechange">
		<?php
		$result = mysql_query("SELECT * FROM meibo",$cn);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
		$id   = $row["id"];
		$name = $row["name"];
		?>
			<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
			<?php 
				$i++;
		} 
			?>

		</select><br><br>
			<input type="image" src="../img/sakujo.png"name="send" id="delete"width="160"onclick="goServletC();">
		</div>
	<div class="namelist1" align="left"> 
		<input type="text"name="name"size="15"style="width:150px;height:23px;" id="textbox"><br><br>
		<input type="image" src="../img/touroku.png"name="send" id="send"width="160"onclick="goServletB();">
	</div>
	</div>
	</form>
</body>
</html>