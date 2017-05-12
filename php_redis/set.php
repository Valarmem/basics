<?php

	$redis = new \Redis();
	$redis->connect("127.0.0.1",6379);

	$redis->delete("set");
	$redis->sAdd("set","A");
	$redis->sAdd("set","B");
	$redis->sAdd("set","C");
	$redis->sAdd("set","C");
	var_dump($redis->sCard("set"));
	var_dump($redis->sMembers("set"));
