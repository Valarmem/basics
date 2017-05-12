<?php
	$redis = new \Redis();
	$redis->connect("127.0.0.1",6379);
	
	// string操作
	$redis->delete("string");
	$redis->set("string","Hello,World!");
	var_dump($redis->get("string"));

	$redis->set("string","4");
	$redis->incr("string",2);
	var_dump($redis->get("string"));
