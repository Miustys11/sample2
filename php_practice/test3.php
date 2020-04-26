<?php

//1
function number($twice) {
    return $twice * 2;
}

echo number(100);


//2
function f($a, $b) {
    return $a + $b;
}

echo f(100,50);


//3
function ar($arr) {
    
    $result = $arr[0];
    
    for ($i = 1; $i < count($arr); $i++) {
        if ($i === 0) {
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    
    return $result;
}

echo ar(array(1, 3, 5 ,7, 9));


//4
 function max_array($arr) {

 $max_number = $arr[0];
 
 foreach($arr as $a) {
  if ($max_number < $a) {
    $max_number = $a;
  }
 }
 
 return $max_number;

}
 
echo max_array( array( 1, 3, 5, 7, 9 ) );


//5



//strip_tags
// - 文字列からHTMLおよびPHPをタグを取り除く
$text = '<p>Test Paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//<p>と<a>は許可する
echo strip_tags($text, '<p><a>');



//array_push
// - 末尾にデータを追加する
$data = array("A","B","C");
array_push($data, "D", "E");

print_r($data);




//array_merge
// - 配列の後ろに配列を追加
$members = array("nagasawa","kitagawa","nishina");
$members = array_merge($members, array("shinoda","sano","sakurada") );

print_r($members);




//time
// - UNIXタイムスタンプを取得

//現在のタイムスタンプを取得
echo "現在のUnixタイムスタンプを取得：".time();
echo "<br>";

//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo "3日後のUnixタイムスタンプを取得：".$nweek;



//mktime
// - UNIXタイムスタンプを取得する

date_default_timezone_set('Asia/Tokyo');

//指定した日時のタイムスタンプを取得
// $timestamp = mktime(0, 0, 0, 8, 1, 2017);
// echo $timestamp;




//date
// - UNIXタイムスタンプを日付にする
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date("Y年m月d日H時i分s秒", $timestamp);

print $next_week;