<?php

$cn=mysql_connect("localhost","root","zero21");
$db=mysql_select_db("meibo",$cn);
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name) VALUE(\"$_POST[name]\")",$cn);
	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="#deb887">
	<h1 align="center">入居者変更</h1>
	<form method="post" action="update.php"enctype="multipart/form-data">  
	<div align="center">
		<?php
		$result = mysql_query("SELECT * FROM meibo ",$cn);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
		$name = $row["name"];
		?>
			　<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
			<?php echo $row["id"];?>　<input type="text"name="name"size="15"value="<?php echo $name; ?>"><br><br>
		<?php
		$i++;
	
		} 
		?>
		</div>
		<div align="center">
			<input type="image" src="../img/22.png"name="send" id="submit"wrap="hard">
		</div>
	</form>
</body>
</html>