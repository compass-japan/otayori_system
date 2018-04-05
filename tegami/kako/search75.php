<?php
$path = "../img/photo/";
$file0 = $_FILES["imgup0"]["name"];
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];
$file1 = $_FILES["imgup11"]["name"];

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
  $filename = $_POST["photo1"];
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
    //chmod("files/" . $filename11, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  $filename11 = $_POST["photo11"];
}

$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO preview(name,day,day1,day2,reader,name1,name2,info,yotei,photo0,photo1,photo2,photo3,photo4,photo11,capc,cap1,cap2,cap3,cap4,cap11,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[day1]\",\"$_POST[day2]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$filename11\",\"$_POST[capc]\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
  }
$no = $_GET["no"];

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-type"content="text/html;charset=UTF-8">
    <title>プレビュー画面</title>
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="css/home.css" />
    <style type="text/css">

      body {
      width:1100px;
      margin: auto;
    }
    .titlep{
    //font-size:30px;
    font-family :
    'Yu Gothic',
    sans-serif;

    text-align:left;
    color:#155378;
    
  }
  .titlep1{
    font-family: "HGS創英角ゴシックUB";
    text-align:left;
    font-size: 55px;
    color:#155479;
  }
  .hk11{
  //width:360px;
  text-align:right;
  color:#155378;
  padding-right: 100px;
  font-size: 20px;
  }
  .homemes{
    padding-top: 50px;
    padding-left:35px;
    font-size: 25px;
    height: 400px;
  }
    .toptable{
   
  }
.small{
border: transparent 8px solid;
}
.big{
  
  table-layout: fixed;
}
.kenkoub{
  font-size: 20px;
  //padding-top: 1px;
    border: transparent 4px solid;
  table-layout: fixed;
}
      </style>
  </head>
  <body"f3f3f3">
  <form method="post" action="toshi1.php" id="form" name="s1" enctype="multipart/form-data">
  <?php
     $today = date("Y/m/d");
    //  echo $today;
      $str1 = substr($today, 5, 2);
      $str2 = substr($today, 8, 2);
    //    echo $str1;
    //  echo $str2;
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
        $s="../img/BG_spring.jpg";
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
    $result = mysql_query("SELECT * FROM complet WHERE name1 = 2017 and name2 = 5",$cn1);
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
      $yotei = $row["yotei"];
      $photo0 = $row["photo0"];
      $photo1 = $row["photo1"];
      $photo2 = $row["photo2"];
      $photo3 = $row["photo3"];
      $photo4 = $row["photo4"];
      $photo11 = $row["photo11"];
      $capc = $row["capc"];
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
      else
      {
        $style = "";
      }
      if(!$photo11){
      $style1 = "style=\"display:none;\"";
      }
      else
      {
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
      <input type="hidden" name="yotei" value="$yotei">
      <input type="hidden" name="photo0" value="$photo0">
      <input type="hidden" name="photo1" value="$photo1">
      <input type="hidden" name="photo2" value="$photo2">
      <input type="hidden" name="photo3" value="$photo3">
      <input type="hidden" name="photo4" value="$photo4">
      <input type="hidden" name="photo11" value="$photo11">
      <input type="hidden" name="capc" value="$capc">
      <input type="hidden" name="cap1" value="$cap1">
      <input type="hidden" name="cap2" value="$cap2">
      <input type="hidden" name="cap3" value="$cap3">
      <input type="hidden" name="cap4" value="$cap4">
      <input type="hidden" name="cap11" value="$cap11">
      <input type="hidden" name="kg" value="$kg">
      <input type="hidden" name="mmhg" value="$mmhg">
       <div id="print">コントロール(Ctrl)+sを押して名前を付けて保存してください</div>
       <div id="print"><a href="#" onclick="document.s1.submit(); return false;"><img src="../img/back_l.png"></a></div>
          
          <Table class="toptable" background="../img/back_spring.png" width="1100" height="553"style="border-style:solid;border-width:5px;
            border-color: rgba(200,100,20,0.0);table-layout: fixed;">
          <Tr>
           <Td width="600" height="10"></Td>
           <Td rowspan="8" width="30"></Td>
           <Td></Td>
           </Tr>
           <Tr>
           <Td width="600" height="10" class="titlep"style="font-size:30px;font-family :'Yu Gothic',sans-serif;"><b>$name1 $name2</b><b>号</b></Td>
           <Td></Td>
           </Tr>
           <Tr>
           <Td width="600" height="10" rowspan="2" class="titlep1">ラヴィーレ習志野台便り</Td>
           <Td class="hk11" style="font-family :'Yu Gothic',sans-serif;"><b>発行日　$day 年$day1 月$day2 日</b></Td>
           </Tr>
           <Tr>
           <Td  width="400" class="hk11"style="font-family :'Yu Gothic',sans-serif;"><b>編集責任者　$reader</b></Td>
           </Tr>
           <Tr>
           <Td height="10" rowspan="2" class="homemes" valign="top"style="font-family :'Yu Gothic',sans-serif;"><b>$info</b></Td>
           <Td height="300" valign="bottom" align="center"><img class="ivent1" src="$photo0"></Td>
           </Tr>
           <Tr>
           <Td height="90" align="center" valign="top" style="font-family :'Yu Gothic',sans-serif;"><Font size="5" color="" >$capc</Font></Td>
           </Tr>
           <Tr>
           <Td height="17"colspan="2"></Td>
           </Tr>
            <Tr>
           <Td align="center" border="5"  valign="top" colspan="3" bgcolor="#63584e"style="font-family :'Yu Gothic',sans-serif; font-size:29px; padding-top:14px;"><Font color="white" ><b>今月の$name 様のご様子</b></Font></Td>
           </Tr>
           </Table>
           <br>
            <table class="kenkoub"  width="1100">
               <Tr>
               <Td width="1000" height="12" align="center"style="font-family :'Yu Gothic',sans-serif;">体重：　$kg kg 　　血圧：　$mmhg mmHg</Td></Tr>
            </table>
            <br>
            <table $style class="small" width="1000" align="center"style="table-layout: fixed;"height="100%">
               <Tr>
               <Td width="500" height="10" align="left" valign="top"><img src="$photo1" class="pt"></Td>
               <Td width="500" height="10" align="right" valign="top"><img src="$photo2" class="pt"></Td>
               </Tr>
               <Tr>
               <Td height="50" valign="top" align="center" valign="top"><Font size="6" color=""style="font-family :'Yu Gothic',sans-serif;" >$cap1</Font></Td>
               <Td height="50" valign="top" align="center" valign="top"><Font size="6" color=""style="font-family :'Yu Gothic',sans-serif;" >$cap2</Font></Td>
               </Tr>
               <Tr>
               <Td width="500" height="10" align="left" valign="bottom"><img src="$photo3" class="pt1" ></Td>
               <Td width="500" height="10" align="right" valign="bottom"><img src="$photo4" class="pt1"></Td>
               </Tr>
               <Tr>
               <Td height="50" valign="top" align="center"><Font size="6" color=""style="font-family :'Yu Gothic',sans-serif;" >$cap3</Font></Td>
               <Td height="50" valign="top" align="center"><Font size="6" color="" style="font-family :'Yu Gothic',sans-serif;">$cap4</Font></Td>
               </Tr>
            </table>

          <table  $style1 class="big" width="1100" height="100%">
                <Tr>
                <Td align="center" height="auto"><img src="$photo11"class="photop"></Td>
                </Tr>
                <Tr>
                 <Td height="55" valign="top" align="center" style="font-family :'Yu Gothic',sans-serif;"><Font size="6" color="" >$cap11</Font></Td>
                </Tr>
          </table>
            <table class="kenkoub"  width="1100">
               
               <Tr rules="none">
                <Td height="6"></Td>
               </Tr>
               <Tr rules="none">
                <Td height="2"></Td>
               </Tr>
               <Tr>
                <Td height="23" bgcolor="#4169e1"></Td>
               </Tr>
            </table>
         

EOM;
}
?>

</form>
  </body>
</html>