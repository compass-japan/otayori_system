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
    echo "";
  }
} else {
	$filename0 = $_POST["photo0"];
}

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    //chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename = $_POST["photo1"];
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
   // chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename1 = $_POST["photo2"];
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    //chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename2 = $_POST["photo3"];
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename3 = $_POST["photo4"];
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename11)) {
   // chmod("files/" . $filename11, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename11 = $_POST["photo11"];
}

/*

	if($photo0)//画像の変更が無ければ既存の値を入れる
	{
		$file0 = $photo0;

	}
	if($photo1)//画像の変更が無ければ既存の値を入れる
	{
		$file = $photo1;
	}
	if($photo2)//画像の変更が無ければ既存の値を入れる
	{
		$file1 = $photo2;

	}
	if($photo3)//画像の変更が無ければ既存の値を入れる
	{
		$file2 = $photo3;

	}
	if($photo4)//画像の変更が無ければ既存の値を入れる
	{
		$file3 = $photo4;
	}


if(!$file0){
  $filename0 = NULL;
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
*/
$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
/*if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO mikan(name,day,reader,name1,name2,info,yotei,photo0,photo1,photo2,photo3,photo4,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
	}*/

$no = $_GET["no"];



?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
	<title>作成画面</title>
	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="../Drop/css/dropzone.css"/>
	<SCRIPT src="../js/jquery-3.2.1.min.js" type="text/javascript"></SCRIPT>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="../Drop/jquery.js"></script>
	<script src="../Drop/dropzone.js"></script>
	<script>

		 function goServletA(){
		 document.getElementById('form').action = 'saku.php ';
		 }
		  function goServletAA(){
		 document.getElementById('form').action = 'saku1.php ';
		 }
function goServletBB(){
 document.getElementById('form').action = 'list.php';
 }

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
<script language="JavaScript">
 <!--
window.document.onkeypress=lineCheck;
 function lineCheck(e){
 var ta=document.getElementById("TEXT");
 var row=ta.getAttribute("rows");
 var r=(ta.value.split("\n")).length;
 if(document.all){
 if(r>=row && window.event.keyCode==13){ //keyCode for IE
 return false; //入力キーを無視
}
 } else {
 if(r>=row && e.which==13){ //which for NN
 return false;
 }
 }
 }
 //-->
 </script>
<SCRIPT type="text/javascript" LANGAGE="JavaScript">
	$(function () {
	  $(document).on('drop dragover', function (e) {
	    e.stopPropagation();
	    e.preventDefault();
	  });
	});

	//写真1枚用
	$(function(){
		var oneAll= "";
		$('#image_drop_area').dropzone({
			url:'preview1.php',
			paramName:'imgup11',
			maxFilesize:10000, //MB
			addRemoveLinks:true,
			previewsContainer:'#preview_area',
			thumbnailWidth:100, //px
			thumbnailHeight:100, //px
			uploadprogress:function(_file, _progress, _size){
				_file.previewElement.querySelector("[data-dz-uploadprogress]").style.width = "" + _progress + "%";
			},
			success:function(_file, _return, _xml){
				_file.previewElement.classList.add("dz-success");
				oneAll = _file.name;
				document.getElementById("photo_file111").value=oneAll;
			},
			error:function(_file, _error_msg){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			removedfile:function(_file){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			previewTemplate: "<span class=\"dz-preview \">  <span class=\"redDrop\">仮登録済み</span><div class=\"dz-details\" style=\"display:none\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  </span>",
			dictRemoveFile:'',
			dictCancelUpload:''
		});
	});
	//写真4枚用_1
	$(function(){
		var oneAll= "";
		$('#image_drop_area1').dropzone({
			url:'preview1.php',
			paramName:'imgup',
			maxFilesize:10000, //MB
			addRemoveLinks:true,
			previewsContainer:'#preview_area1',
			thumbnailWidth:100, //px
			thumbnailHeight:100, //px
			uploadprogress:function(_file, _progress, _size){
				_file.previewElement.querySelector("[data-dz-uploadprogress]").style.width = "" + _progress + "%";
			},
			success:function(_file, _return, _xml){
				_file.previewElement.classList.add("dz-success");
				oneAll = _file.name;
				document.getElementById("photoFile_01").value=oneAll;
			},
			error:function(_file, _error_msg){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			removedfile:function(_file){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			previewTemplate: "<span class=\"dz-preview dz-file-preview\">\n <span class=\"redDrop\">仮登録済み</span><div class=\"dz-details\" style=\"display:none\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  </span>",
			dictRemoveFile:'',
			dictCancelUpload:''
		});
	});
	//写真4枚用_2
	$(function(){
		var oneAll= "";
		$('#image_drop_area2').dropzone({
			url:'preview1.php',
			paramName:'imgup1',
			maxFilesize:10000, //MB
			addRemoveLinks:true,
			previewsContainer:'#preview_area2',
			thumbnailWidth:100, //px
			thumbnailHeight:100, //px
			uploadprogress:function(_file, _progress, _size){
				_file.previewElement.querySelector("[data-dz-uploadprogress]").style.width = "" + _progress + "%";
			},
			success:function(_file, _return, _xml){
				_file.previewElement.classList.add("dz-success");
				oneAll = _file.name;
				document.getElementById("photoFile_02").value=oneAll;
			},
			error:function(_file, _error_msg){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			removedfile:function(_file){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			previewTemplate: "<span class=\"dz-preview dz-file-preview\">\n <span class=\"redDrop\">仮登録済み</span><div class=\"dz-details\" style=\"display:none\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  </span>",
			dictRemoveFile:'',
			dictCancelUpload:''
		});
	});
	//写真4枚用_3
	$(function(){
		var oneAll= "";
		$('#image_drop_area3').dropzone({
			url:'preview1.php',
			paramName:'imgup2',
			maxFilesize:10000, //MB
			addRemoveLinks:true,
			previewsContainer:'#preview_area3',
			thumbnailWidth:100, //px
			thumbnailHeight:100, //px
			uploadprogress:function(_file, _progress, _size){
				_file.previewElement.querySelector("[data-dz-uploadprogress]").style.width = "" + _progress + "%";
			},
			success:function(_file, _return, _xml){
				_file.previewElement.classList.add("dz-success");
				oneAll = _file.name;
				document.getElementById("photoFile_03").value=oneAll;
			},
			error:function(_file, _error_msg){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			removedfile:function(_file){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			previewTemplate: "<span class=\"dz-preview dz-file-preview\">\n <span class=\"redDrop\">仮登録済み</span><div class=\"dz-details\" style=\"display:none\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  </span>",
			dictRemoveFile:'',
			dictCancelUpload:''
		});
	});
	//写真4枚用_4
	$(function(){
		var oneAll= "";
		$('#image_drop_area4').dropzone({
			url:'preview1.php',
			paramName:'imgup3',
			maxFilesize:10000, //MB
			addRemoveLinks:true,
			previewsContainer:'#preview_area4',
			thumbnailWidth:100, //px
			thumbnailHeight:100, //px
			uploadprogress:function(_file, _progress, _size){
				_file.previewElement.querySelector("[data-dz-uploadprogress]").style.width = "" + _progress + "%";
			},
			success:function(_file, _return, _xml){
				_file.previewElement.classList.add("dz-success");
				oneAll = _file.name;
				document.getElementById("photoFile_04").value=oneAll;
			},
			error:function(_file, _error_msg){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			removedfile:function(_file){
				var ref;
				(ref = _file.previewElement) != null ? ref.parentNode.removeChild(_file.previewElement) : void 0;
			},
			previewTemplate: "<span class=\"dz-preview dz-file-preview\">\n <span class=\"redDrop\">仮登録済み</span><div class=\"dz-details\" style=\"display:none\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  </span>",
			dictRemoveFile:'',
			dictCancelUpload:''
		});
	});
</SCRIPT>
  <script>
   function goServletA(){
 document.getElementById('form').action = '../saku.php ';
 }
  function goServletAA(){
 document.getElementById('form').action = '../saku1.php ';
 }
	 
	 	function click0(){
		  $(".photo_file0").click();
		}
		function click1(){
		  $(".photo_file1").click();
		}
		function click2(){
		  $(".photo_file2").click();
		}
		function click3(){
		  $(".photo_file3").click();
		}
		function click4(){
		  $(".photo_file4").click();
		}
		function click11(){
		  $(".photo_file11").click();
		}

		$(function () {
	  	$(".photo_file0").change(function () {
	  	$("#photo_file0").text("仮登録済み");
	  	$("#photo_file0").css({
	  		"color":"red",
	  		"margin-left":'210px',
	  		"margin-top":'-31px',
	  		"vertical-align":'middle',
	  		});
		});
	  	$(".photo_file1").change(function () {
	  	$('#photo_delete1').val("0");
	  	$("#photofile01").text("仮登録済み");
	  	$("#photofile01").css({
	  		"color":"red",
	  		"margin-left":'398px',
	  		"margin-top":'-32px',
	  		});
		});

		  $(".photo_file2").change(function () {
		  	$("#photo_file02").text("仮登録済み");
		  	$("#photo_file02").css({
		  		"color":"red",
	  		"margin-left":'398px',
	  		"margin-top":'-16px',
		  		});
		  });
		  $(".photo_file3").change(function () {
		  	$("#photo_file03").text("仮登録済み");
		  	$("#photo_file03").css({
		  		"color":"red",
	  		"margin-left":'398px',
	  		"margin-top":'-16px',
		  		});

		  });
		  $(".photo_file4").change(function () {
		  	$("#photo_file04").text("仮登録済み");
		  	$("#photo_file04").css({
		  		"color":"red",
	  		"margin-left":'398px',
	  		"margin-top":'-16px',
		  		});
		  });
		$(".photo_file11").change(function () {
		  	$("#photofile11").text("仮登録済み");
		  	$("#photofile11").css({
		  		"color":"red",
	  		"margin-left":'400px',
	  		"margin-top":'-32px',
		  		});
		  });
		});
	</script>
</head>
<body>

<form method="post" action="preview1.php" id="form" name="form" enctype="multipart/form-data">

	<?php
$result = mysql_query("SELECT * FROM mikan WHERE no=$no ",$cn1);
$i=0;
while($row = mysql_fetch_array($result))
{
	$no   = $row["no"];
	$name = $row["name"];
	$day  = $row["day"];
	$day1  = $row["day1"];
	$day2  = $row["day2"];
	$reader=$row["reader"];
	$name1 = $row["name1"];
	$name2 = $row["name2"];
	$info = $row["info"];
	$capc = $row["capc"];
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
	$select = str_replace("<br>", " ", $name);
	$select1 = str_replace("<br>", " ", $name1);
	$select2 = str_replace("<br>", " ", $name2);

		if($photo0){

		$sz_txt = "写真登録済み";

		}
		if(!$photo0){

		$sz1_txt = "写真登録なし";

		}
		if($photo1){

		$s1_txt = "写真１";

		}
		if($photo2){

		$s2_txt = "写真２";

		}
		if($photo3){

		$s3_txt = "写真３";

		}
		if($photo4){

		$s4_txt = "写真４";

		}
		if($photo11){

		$s11_txt = "写真1";

		}
		if(!$photo1 and !$photo2 and !$photo3 and !$photo4){
			$sn_txt = "なし";
		}
		if(!$photo11){
			$sn1_txt = "なし";
		}


	echo <<<EOM
		<input type="hidden" name="id" value="$no">
		<input type="hidden" name="photo0" value="$photo0">
		<input type="hidden" name="photo1" value="$photo1">
		<input type="hidden" name="photo2" value="$photo2">
		<input type="hidden" name="photo3" value="$photo3">
		<input type="hidden" name="photo4" value="$photo4">
		<input type="hidden" name="photo11" value="$photo11">
		<div class="wrap">
				<!--ヘッダー-->
		    <Table align="center">
		      <Tr>
		      <Td width="400" align="left" style="font-family: 'ＫＦひま字'; font-size:20px; color:#e95464;"><b>お便りシステム　　</b></Td>
		       <Td width="400"></Td>
		       <Td width="378">
				</Td>
		       </Tr>
		       <Tr>
		       <Td width="400" align="left" style="font-family: 'ＫＦひま字'; font-size:33px; color:#e95464;"><b>ラヴィーレ習志野台</b></Td>
		       <Td width="400" colspan="2" align="right">
		       		
				</Td>
		       </Tr>
		       <Tr>
		       		<Td width="400"></Td>
		       </Tr>
				<Tr style="background-color:#ee827c;">
					<Td width="400" align="center" colspan="3">
						<h3>
							編集責任者：　<input type="text" name="reader" value="$reader" size="15">　　発行日：　<input type="text" size="5" name="day" value="$day" style="ime-mode: disabled;" maxlength="4">  年　<input type="text" size="3" name="day1" value="$day1" style="ime-mode: disabled;" maxlength="2">  月　<input type="text" size="3" name="day2" value="$day2"  style="ime-mode: disabled;" maxlength="2">  日　　年月
							<select  name="name1">
								<option value="$name1">$name1</option>
								<option value="2017年">2017年</option>
								<option value="2018年">2018年</option>
								<option value="2019年">2019年</option>
								<option value="2020年">2020年</option>
								<option value="2021年">2021年</option>
								<option value="2022年">2022年</option>
							</select>
							<select  name="name2">
								<option value="$name2">$name2</option>
								<option value="1月">1月</option>	
								<option value="2月">2月</option>
								<option value="3月">3月</option>
								<option value="4月">4月</option>
								<option value="5月">5月</option>
								<option value="6月">6月</option>
								<option value="7月">7月</option>
								<option value="8月">8月</option>	
								<option value="9月">9月</option>
								<option value="10月">10月</option>
								<option value="11月">11月</option>
								<option value="12月">12月</option>
							</select>
						</h3>
					</Td>
				</Tr>
				<Tr>
		       		<Td height="20"></Td>
		       </Tr>
		       <!--ヘッダー終了-->
		    </table>

			<div class="zentai">
				<h2>◇全体</h2>
				<p>全体に向けての情報を入れてください</p>
				<div class="zentai1">
					<h4>◆メッセージ（200文字まで）</h4>
					
					<p><textarea cols="40" id="info" maxlength="200" rows="10" name="info">$info</textarea></p>
					<div id="cool_upload">
				    <img class="cursor" src="../img/message.png" id="cool_upload_image"width="120"multiple>
				    <input type="file" id="cool_upload_form">
				  </div>
					<h4>◆全体でのイベント（$sz_txt $sz1_txt ）</h4>
					<p>全体のイベント写真とコメントを入れてください<br>（8文字まで）</p>
					<p><span id="photo_file0"></span></p>
					<p><img class="cursor" src="../img/photo_all.png" onclick="click0()"></p>
					<input type="file" name="imgup0" id="photo_file0" class="photo_file0" multiple="" src="$photo0">
					<p><input type="text" maxlength="8" name="capc" value="$capc" class="capc_tx"  placeholder="写真のコメントを入れて下さい"></p>
				</div>
			</div>
			
			<script>
				var file = document.querySelector('#cool_upload_form');
			file.onchange = function (){
			  var fileList = file.files;
			  //読み込み
			  var reader = new FileReader();
			  reader.readAsText(fileList[0],"Shift-JIS");

			  //読み込み後
			  reader.onload = function  () {
			    document.querySelector('#info').textContent = reader.result;
			  };
			};
			</script>


			<div class="name11">
				<h2>◇ご入居様(個人)</h2>
				<p>ご入居様(個人)の情報を入れてください</p>
				<div class="name1">
					<h4>◆お名前</h4>
					<select class="namez" name="name">
					<option value="$name" >$name</option>
EOM;
						$cn=mysql_connect("localhost","root","root");
						mysql_select_db("tegami",$cn);

						$result5 = mysql_query("SELECT name,roomno FROM meibo ",$cn);
						$i=0;
								while($row = mysql_fetch_array($result5))
								{
									$nameS[$i] = $row["name"];
									$roomnoS[$i] = $row["roomno"];
									var_dump( $nameS );
									$str1 = join(",",$nameS);
									var_dump( $str1 );
									var_dump( $roomnoS );
									$str2 = join(",",$roomnoS);
									var_dump( $str2 );
									$i++;
								}
						mysql_close($cn);
					?>
			</select>

<SCRIPT>
		var str1 = "<?php echo $str1; ?>";
		var ary1 = str1.split(",");
		var str2 = "<?php echo $str2; ?>";
		var ary2 = str2.split(",");
	function RunApp() {
		var str1 = "<?php echo $str1; ?>";
		var ary1 = str1.split(",");
		var str2 = "<?php echo $str2; ?>";
		var ary2 = str2.split(",");
		var nameselect = document.form.name.value;
		var roomnoSS = "";
		for(var i=0; i<ary1.length;i++){
			if(ary1[i] == nameselect){
				roomnoSS = ary2[i];
			}
		}
	//	var stt = "explorer.exe /n,/e,/root,C:\\Users\\Okada kazuo\\Desktop\\album\\" + roomnoSS;
		if(roomnoSS !=""){
			var stt = "explorer.exe /n,/e,/root,C:\\Users\\Okada kazuo\\Desktop\\album\\" + roomnoSS;
				new ActiveXObject("WScript.Shell").Run(stt)
			}
		}
</SCRIPT>
	</select>
						<div class="photo1">
							<h4>
								◆写真(1枚用)（各15文字まで）
							</h4>
							<p style="color:red; font-size:15px;">登録済み写真：<?php echo $s11_txt . $sn1_txt ?></p>
						</div>
						<input type="file" name="imgup11" id="photo_file11" class="photo_file11 delf">
 						<input type="hidden" name="imgup111" id="photo_file111"  value="">
						<p><img  src="../img/photo01.gif" alt="画像" class="mleft-10" onClick="RunApp();"><input class="" type="text" align="left"  maxlength="15" value="<?php echo $cap11;?>" size="35" name="cap11" placeholder="写真のコメントを入れて下さい"><img src="../img/human_icon.png" class="dop mleft-10" id="image_drop_area" ><span id="preview_area"></span></p><p id="photofile11"></p>
						<div class="photo1">
							<h4>
								◆写真(4枚用)（各15文字まで）
							</h4>
							<p style="color:red; font-size:15px;">登録済み写真：<?php echo $s1_txt . $s2_txt . $s3_txt . $s4_txt . $sn_txt ?></p>
						</div>
						<div class="photoBox">
							<input type="file" name="imgup" id="photo_file1" class="photo_file1 delf">
							<input type="hidden" name="imgup01" id="photoFile_01"  value="">
							<img class="mleft-10" src="../img/photo01.gif" alt="画像"  class="" onClick="RunApp();"><input type="text" align="left" size="35" name="cap1" maxlength="15" value="<?php echo $cap1;?>" placeholder="写真のコメントを入れて下さい"><img src="../img/human_icon.png" class="dop mleft-10" id="image_drop_area1" ><span id="preview_area1"></span></p><p id="photo_delete1"></p><p id="photofile01"></p>
							<input type="file" name="imgup1" id="photo_file2" class="photo_file2 delf">
							<input type="hidden" name="imgup02" id="photoFile_02"  value="">
							<img class="mleft-10" src="../img/photo02.gif" alt="画像"  class="" onClick="RunApp();"><input type="text" align="left" size="35" name="cap2" maxlength="15" value="<?php echo $cap2;?>" placeholder="写真のコメントを入れて下さい"><img src="../img/human_icon.png" class="dop mleft-10" id="image_drop_area2" ><span id="preview_area2"></span></p><p id="photo_file02"></p>
							<input type="file" name="imgup2" id="photo_file3" class="photo_file3 delf">
							<input type="hidden" name="imgup03" id="photoFile_03"  value="">
							<img  class="mleft-10" src="../img/photo03.gif" alt="画像"  class="" onClick="RunApp();"><input type="text" align="left" size="35" name="cap3" maxlength="15" value="<?php echo $cap3;?>" placeholder="写真のコメントを入れて下さい"><img src="../img/human_icon.png" class="dop mleft-10" id="image_drop_area3" ><span id="preview_area3"></span></p><p id="photo_file03"></p>
							<input type="file" name="imgup3" id="photo_file4" class="photo_file4 delf">
							<input type="hidden" name="imgup04" id="photoFile_04"  value="">
							<img class="cursor mleft-10" src="../img/photo04.gif" alt="画像" class="" onClick="RunApp();"><input type="text" align="left" size="35"  maxlength="15" value="<?php echo $cap4;?>" name="cap4" placeholder="写真のコメントを入れて下さい" ><img src="../img/human_icon.png" class="dop mleft-10" id="image_drop_area4" ><span id="preview_area4"></span></p><p id="photo_file04"></p>
						</div>
						<h4>◆健康状態</h4>
						<p>体重：　<input type="text" name="kg" align="left" size="10" style="ime-mode: disabled;" maxlength="3" value="<?php echo $kg; ?>">kg　　
						血圧：　<input type="text" name="mmhg" align="left" size="10" style="ime-mode: disabled;" maxlength="8" value="<?php echo $mmhg; ?>">mmhg</p>
				</div>
			</div>
		</div>
		<div class="bt">
			<input type="image" src="../img/finish_preview.png" width="150" name="send" id="form" onclick="goServletB();">
			<input type="image" src="../img/back_m.png" width="150" name="send" id="form" onclick="goServletBB();">
		</div>
<?php
$i++;
break;

}
?>
</body>
</html>
