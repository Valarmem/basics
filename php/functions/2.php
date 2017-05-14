<?php
declare(strict_types=1);
function sum($a,$b) {
	return $a+$b;
}
var_dump(sum(1.5,3));

function sum2(int $a,int $b) {
	return $a+$b;
}
var_dump(sum2(1.5,3));