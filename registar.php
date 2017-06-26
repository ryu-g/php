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

$result = mysqli_query($link,'SET NAMES utf8');
if (!$result) {
  exit('文字コードを指定できませんでした。');
  echo '<a href="index.php">戻る</a> ';
}
$userID 	= $_REQUEST['userID'];
$date		= $_REQUEST['date'];
$start		= $_REQUEST['start'];
$finish		= $_REQUEST['finish'];
//$worktime	= $finish - $start;

//仕事を開始したときに名前と仕事開始時間を記録・デフォルトの出勤アクションにより対処
	$result = mysqli_query($link , "INSERT INTO worktime(userID, start, finish) VALUES('$userID', '$start', '$finish')");
	if (!$result) {
	  exit('データを登録できませんでした。');
	}
	//作業した日の情報を作成
	$tmp = new DateTime($date.$start);

	//仕事を終了したときに終了時刻を追加・条件分け先
	$result = mysqli_query($link , "UPDATE worktime set finish = $finish where userID　=　$userID";
	if (!$result) {
	  exit('データを更新できませんでした。');
	}
	//作業時間を計算
	$date1 = new DateTime(SELECT start $start);
	$date2 = new DateTime($finish);
	$diff = $date1->diff($date2);
	$con = mysql_close($link);
	if (!$link) {
		exit('データベースとの接続を閉じられませんでした。');
	}
?>

<p>登録が完了しました。<br /><a href="index.html">戻る</a></p>
</body>
</html>
