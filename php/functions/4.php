<?php

$g_name = "Lily";

function show_name() {
	// global $g_name;
	// echo $g_name;
	echo $GLOBALS['g_name'];
}
show_name();
echo "<br>";

$v1 = 1;
$v2 = 2;
function test_global() {
/*	global $v1,$v2;
	$v2 = &$v1;
*/
	$GLOBALS['v2'] = &$GLOBALS['v1'];
}
test_global();
echo $v2;

//static 赋值不能是函数表达式