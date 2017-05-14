<?php
	// include('9/test1.php');
	// include('9/test2.php');
	// include('9/test3.php');
	// include('9/test4.php');
// set_include_path(get_include_path().PATH_SEPARATOR.'9');
// set_include_path(get_include_path().PATH_SEPARATOR.'9_1');

ini_set('include_path',get_include_path().PATH_SEPARATOR.'9');
ini_set('include_path',get_include_path().PATH_SEPARATOR.'9_1');
restore_include_path();
include('test1.php');
include('test2.php');
include('test3.php');
include('test4.php');
include('test5.php');
	echo "124<br>";
	test1();echo "<br>";
	test2();echo "<br>";
	test3();echo "<br>";
	test4();echo "<br>";
	test5();echo "<br>";
	