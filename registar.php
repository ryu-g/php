<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>アドレス登録</title>
</head>
<body>
<?php

$link = mysqli_connect("localhost", "root", "root");
if (!$link) {
  exit('データベースに接続できませんでした。');
}

$result = mysqli_select_db($link, "999sample");
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysqi_query('SET NAMES utf8', $link);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$name   = $_REQUEST['no'];
$name = $_REQUEST['name'];
$tel  = $_REQUEST['tel'];

$result = mysql_query("INSERT INTO address(no, name, tel) VALUES('$no', '$name', '$tel')", $link);
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
</body>
</html>