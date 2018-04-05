<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("meibo",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name,roomno) VALUE(\"$_POST[name]\"\"$_POST[roomno]\")",$cn);
	}
	$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<title>入居者削除</title>
	<script>
	function kakunin(){
  ret = confirm("削除します。よろしいですか？");
  if (ret == true){
    location.href = "ndelete.php";
  }
}
function alt(){
  ret = confirm("削除します。よろしいですか？");
   if (ret == true){
   /*location.href = "namedelete.php";*/
   return true;
  }
  else{
  	return false;
  }

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
<body bgcolor="#c0c0c0">
	<h1 align="center"　style="display:block;"></h1>
	<form method="post" action="ndelete.php"id="form">

		<div class="namelist" align="center">
			<?php
			$result = mysql_query("SELECT * FROM meibo order by roomno ASC",$cn);

			$cnt = 0;
      while($array = mysql_fetch_array($result)) {
       if ($cnt === 0) { print '<table>' . PHP_EOL; }
        if ($cnt % 4 === 0) {
          if ($cnt !== 0) { print '</tr>' . PHP_EOL; }

       print '<tr>';
        }
       print '<td align="center"><h3>'.$array["roomno"].'</h3></td>';
       print '<td align="center"><h3><a href="ndelete.php?no='.$array["id"].'"onclick="return alt()">'.$array["name"].'様</a>｜</h3></td>';
        $cnt++;
      }
      if ($cnt !== 0) {
        while ($cnt % 4 !== 0) {
          print '<td>&nbsp;</td>';
          $cnt++;
        }
        print '</tr>' . PHP_EOL;
        print '</table>' . PHP_EOL;
      } else {

      }

    ?>
			
		</div>
	
	
	</form>
</body>
</html>