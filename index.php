<?php
//1行コメント
echo "hello world from the php";
echo "hello again";
echo "これはechoを用いて記述しています。そのままだと改行されません。";
echo "<br>";
echo "しかし、HTMLタグを記述可能です。<h1>こんなふうに</h1>";
 ?>
<!DOCTYPE HTML>
<html lang="ja">
<title>PHPサンプル</title>
<body>
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
<p>define("MY_EMAIL","taguchi@gmail.com");</p>
<p>ehco MY_EMAIL</p>
<h3>文字列</h3>
<?php
$name ="ryuji";
$s1 ="hello $name \n hello again";
$s2 ="hello {$name} \n hello again";
$s3 ="hello ${name} \n hello again";
$s4 ='hello $name \n hello again';
var_dump($s1);
var_dump($s2);
var_dump($s3);
var_dump($s4);
$s = "hello"." world";
var_dump($s);
 ?>
</body>
</html>
