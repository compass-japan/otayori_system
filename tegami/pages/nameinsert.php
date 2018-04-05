<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/home.css" />
	<SCRIPT src="../js/jquery-3.2.1.min.js" type="text/javascript"></SCRIPT>
	<title>入居者登録</title>
	<script type="text/javascript"><!--
		//　イメージポップアップ表示
		function ImageUp() {
		window.open("tenant.php","window1","width=800,height=650,scrollbars=1");
		}
		// -->
	</script>
		<script>
    $(function(){
        $("input"). keydown(function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });
    });
    
</script>
<style type="text/css">
 <!--
select.sizechange{
 font-size:100%;
 }
 .namelist1{
 	margin-top:30px;
 }
 -->
 </style>
</head>
<body bgcolor="#ff7f50"><br>
	<h1 align="center"></h1>
	<form method="post" action="insert.php" id="form" enctype="multipart/form-data">

	<div class="namelist1" align="center"> 
		<b>号室：</b><input type="text" name="roomno" size="15" style="width:150px;height:23px; ime-mode: disabled;" id="textbox" required aria-required="true"><br>
		<b>名前：</b><input type="text" name="name" size="15" style="width:150px;height:23px;" id="textbox" required aria-required="true"><br>
		
		<b>顔写真：</b> <input type="file" name="imgf" required aria-required="true" style="width:180px;"><br>
		<b>gno：</b><input type="text" name="gr" size="15" style="width:150px;height:23px;" id="textbox"><br><br>
		<input type="image" src="../img/submit.png" name="send" id="send" width="100">
	</div>
	</form>
	<!--<a href="javascript:ImageUp();"><img src="../img/submit.png" width="100" alt=""></a>-->
</body>
</html>