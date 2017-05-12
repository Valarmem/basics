<?php
	$redis = new \Redis();
	$redis->connect("127.0.0.1",6379);

	$redis->delete("driver");
	$redis->hSet("driver","name","刘晓明");
	$redis->hSet("driver","age",25);
	$redis->hSet("driver","gender","男");
	var_dump($redis->hGet("driver","name"));
	var_dump($redis->hMGet("driver",["name","age","gender"]));
