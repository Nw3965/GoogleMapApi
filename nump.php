<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHP数列</title>
</head>
<body>

<p>PHPフィボナッチ数列のテストです。</p>

<p>
<?php
//$a = 計算番号
//$b=2つ前の値
//$c=1つ前の値
//$d=計算結果
$b = 1;
$c = 1;
$d = 0;
for($a = 70; $a<=70; $a++){
        $d = $b + $c;
        echo $d . ' '; //$a番目の値
        $b = $c;
        $c = $d;
}
?>
</p>

</body>
</html>