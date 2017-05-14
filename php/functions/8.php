<?php
	$message = "hello";
	$age = 10;
	$example = function($name)use(&$message,&$age){
		echo $message,",",$name,",",$age;
	};
	$message = 'Hi';
	$example("Jack");
	echo "<br>";

	function test_closure($name,Closure $clo) {
		echo "Hello,{$name}<br/>";
		$clo();
	}
	test_closure("jack",function(){
		echo "Welcome back home";
	});