<?php

// ダウンロード元のファイルパス（絶対パス、ファイル名まで含む）を指定する
$fullpath = 'Mysite/home.html';
$fullpath = 'Mysite/css/style.css';

// 保存時のファイル名を設定
$filename = 'home.html';

// HTTPヘッダ送信。ローカルPCに保存するためのダイアログが出る。
header("Content-type: text/html"); //mp3の場合。ファイルの種類によって適宜変更
header("Content-Disposition: attachment; filename=$filename");
 // ファイルを読み込んで出力します。
readfile($fullpath);
 ?>

