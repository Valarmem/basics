<?php
	$arr_num = [2,43,452,34,42,12];
	$max = $arr_num[0];
	foreach ($arr_num as $num) {
		if ($num>$max) {
			$max = $num;
		}
	}
	echo $max;