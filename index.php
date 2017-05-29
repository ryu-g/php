
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
<h2>文字列</h2>
<p>出力について</p>
<ul>
	<li>echo - 出力文字列を複数指定できる。カンマ区切り。返値は持たない。</li>
	<li>print - 出力文字列は一種類のみ。カンマで区切るとError。返値を持つ。値は文字列ではなく1</li>
</ul>
<h4>ヒアドキュメント</h4>
こんな風に書きました。
<div class="code">
print <<< EOS
お元気ですか？&lt;br/&gt;<br>
いいお天気ですね。&lt;br/&gt;<br>
ではさようなら。
EOS;
</div>
<p>出力結果は以下。</p>
<div class="result">
<?php
print <<< EOS
お元気ですか？<br />
いいお天気ですね。<br />
ではさようなら。
EOS;
?>
</div>


<h4>文字列の連結</h4>
<p>文字列を連結する時は'String'+'String'はダメです</p>
<p>'String'.'String'で連結します。</p>

たとえば、名前の文字だけ変化するこういうテンプレ出力を作りたいときは
<div class="result">
<?php
	$nameA = '佐藤';
	$nameB = 'Sato';
	print $nameA.'さん。こんにちは。<br>';
	print 'wellcome,Mr.'.$nameB.'<br>';
?>
</div>

<p>こんなふうにかきます</p>
<div class="code">
&lt;?php <br>
	$nameA='佐藤';<br>
	$nameB='Sato';<br>
	print $nameA.'さん。こんにちは。';<br>
	print 'wellcome,Mr.'.$nameB;<br>
 ?&gt;<br>
</div>

<?php
	$timestamp = time() ;
	echo "time()がこれ<br>";
	echo $timestamp ;
	echo "<br><br>";
	echo "&#36;SERVER['REQUEST_TIME']がこれ<br>";
	echo $_SERVER['REQUEST_TIME'] ;
	echo "date()で日時を出力";

	echo date( "Y/m/d" , $timestamp );
	echo "<br>";
	echo date( "Y/m/d" ) ;
?>

</body>
</html>
