<?php
function recursive($i) {
	$res = 1;
	echo "recursive()当前参数\$i值为：{$i}<br>";
	if (1==$i) {
		echo "\$i={$i};\$res={$res}<br>";
		return 1;
	}else{
		$res = $i*recursive($i-1);
	}
	echo "\$i={$i};\$res={$res}<br>";
	return $res;
}
echo recursive(4);