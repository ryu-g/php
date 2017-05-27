
<!DOCTYPE HTML>
<link rel="stylesheet" href="style.css">
<html lang="ja">
<title>PHPサンプル</title>
<body>

<?php
	$filename = 'counter.dat'; 	// counter.datというカウント数を書き込むテキストファイル
	$fp = fopen($filename, "r+"); // counter.datファイルを fopenで開く
	$count = fgets($fp,32);// fgets関数でcounter.datに書かれたカウント数を読み込
	$count++; // counter.datに書かれたカウント数を加算
	fseek($fp, 0); // fseek関数でcounter.datの読み書きを行う場所を先頭に戻す
	fputs($fp, $count); // fputs関数でカウントされた数をファイルに書き込む
	flock($fp, LOCK_UN); // flock関数でファイルを上書きされないようにロックする
	fclose($fp); // fclose関数でファイルを閉じる
	echo "<p>このページは";
	echo $count;
	echo "回開かれました</p>";// カウントされた数字を表示
 ?>


<?php
//1行コメント
echo "hello world from the php<br>";
echo "hello again<br>";
echo "これはechoを用いて記述しています。そのままだと改行されません。";
echo "<br>";
echo "しかし、HTMLタグを記述可能です。<h3>こんなふうに</h3>";
 ?>
<h1>Hello, World! <?php echo "from PHP"; ?></h1>
<h3>変数とデータ型</h3>
<ul>
	<li>-文字列： string</li>
	<li>-数値: integer float</li>
	<li>-真偽値: boolean/true false</li>
	<li>-配列</li>
	<li>-オブジェクト</li>
	<li>-null</ul>
</ul>
<p>毎回宣言しなくてもいい</p>
<p>var_dump(param);でparamの型を教えてくれる(よくつかう)</p>
<p>paramは中身に__LINE__,__FILE__,__DIR__をとる</p>
<p><?php echo "var_dump(__LINE__);は今いる行を返すよ -> ";var_dump(__LINE__); ?></p><!-- 今いる行 -->
<p><?php echo "var_dump(__FILE__);は自身が記述されているファイル名を返すよ -> "; var_dump(__FILE__); ?></p><!-- ファイル名 -->
<p><?php echo "var_dump(__DIR__);はこのファイルが置いてあるディレクトリを返すよ -> "; var_dump(__DIR__); ?></p><!-- このファイルのあるディレクトリ -->
<h3>定数</h3>
<p>define("MY_EMAIL","*********@gmail.com");</p>
<p>ehco MY_EMAIL</p>
<h3>文字列</h3>


<?php
	// UNIX TIMESTAMPを[$timestamp]という変数に格納する
	$timestamp = time() ;

	// 出力する
	echo "time()がこれ<br>";
	echo $timestamp ;
	echo "<br><br>";
	// $_SERVER['REQUEST_TIME']を出力する
	echo "&#36;SERVER['REQUEST_TIME']がこれ<br>";
	echo $_SERVER['REQUEST_TIME'] ;
	echo "date()で日時を出力"

	echo date( "Y/m/d" , $timestamp ) ;
	echo date( "Y/m/d" ) ;
?>

</body>
</html>
