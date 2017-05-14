<?php
// 可变函数

function get_apple($num) {
	return "apple functions,we need ".$num." boxes";
}

function get_orange($num) {
	return "orange functions,we need ".$num." boxes";
}

/*$f1 = "get_apple";
echo $f1();
echo "<br>";
$f1 = 'get_orange';
echo $f1();*/

function fruit($fruit,$num) {
	$opt = "get_".$fruit;
	return $opt($num);
}
echo '<br>';
echo fruit('apple',5);

function fruit($fruit,$num) {
	$res = "";
	if ($fruit == "apple") {
		$res = get_apple();
	}elseif ($fruit == "orange") {
		$res = get_orange();
	}
	return $res;
}
echo get_fruit('apple',5);