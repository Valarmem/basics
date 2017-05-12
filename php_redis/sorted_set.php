<?php
	$redis = new \Redis();
	$redis->connect("127.0.0.1",6379);

	$redis->delete("students");
	$redis->zAdd("students",100,"小明");
	$redis->zAdd("students",80,"校花");
	$redis->zAdd("students",90,"大神");
	
	echo "从低到高排序:\n";
	var_dump($redis->zRange("students",0,-1));
	echo "从高到低排序:\n";
	var_dump($redis->ZREVRANGE("students",0,-1));
