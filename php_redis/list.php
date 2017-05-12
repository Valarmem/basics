<?php
	$redis = new \Redis();
	$redis->connect("127.0.0.1",6379);

	$redis->delete("list");
	$redis->lPush("list","A");
	$redis->lPush("list","hello");
	$redis->lPush("list","Atex");
	var_dump($redis->rPop("list"));
	var_dump($redis->lLen("list"));
	var_dump($redis->rPop("list"));
