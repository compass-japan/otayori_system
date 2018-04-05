<?php
	
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name) VALUE(\"$_POST[name]\")",$cn);
	}
	$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<SCRIPT src="../js/jquery-3.2.1.min.js" type="text/javascript"></SCRIPT>
	<script type="text/javascript" src="../js/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />
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
<script type="text/javascript">
  $(document).ready(function() {
      // 基本構成
      $('.fancybox').fancybox();
  });
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
       if ($cnt === 0) { print '<table cellspacing="0" style=" border: 2px solid #bc372b;">' . PHP_EOL; }
        if ($cnt % 3 === 0) {
          if ($cnt !== 0) { print '</tr>' . PHP_EOL; }

       print '<tr style="border-bottom: 1px solid #bfa797;">';
        }
       print '<td align="center" bgcolor="fae6cd" width="80"><h3 style="font-weight:normal;">'.$array["roomno"].'</h3></td>';
       print '<td align="center" bgcolor="fff8e3" width="180"><h3 style="font-weight:normal;"><a href="upname.php?id='.$array["id"].'">'.$array["name"].'様</a></h3></td>';
       print '<td align="center" bgcolor="fff8e3"  width="100"><div class="gallery"><a class="fancybox" href="../img/face/'.$array["face"].'" target="_blank"><img src="../img/face/'.$array["face"].'"class="" width="60" onclick="cmanImgPop(this,"../img/face/0ggtj.jpg")" style="cursor:pointer;"></a></div></td>';
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