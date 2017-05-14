<?php
// 函数嵌套
function out($str_msg) {
	if (!function_exists('in')) {
		function in($msg) {
			echo "function in()".$msg."<br/>";
		}
	}
	echo 'function out():'.$str_msg."<br>";
	in($str_msg);
}
// in();
out("hello");
in("hi");
out("Good morning");

// 函数的多层嵌套
function f_out() {
	echo "out \n";
	function f_mid() {
		echo "mid \n";
		function f_in() {
			echo "in \n";
		}
	}
}
echo "<br/>";
f_out();
f_mid();
f_in();