<?php
/**
 * 可变参数列表
 * @return [type] [description]
 */
	function get_sum() {
		$args_num = func_num_args();
		$sum = 0;
		if ($args_num==0) {
			return $sum;
		}else{
			for ($i=0; $i < $args_num ; $i++) { 
				$sum += func_get_arg($i);
			}
			return $sum;
		}
	}

	echo get_sum();
	echo get_sum(1,2,3);

	/**
	 * PHP5.5及更早
	 * func_num_args()
	 * func_get_arg()
	 * func_get_args()
	 */
function sum(...$nums) {
	$sum=0;
	if (!$nums) {
		return $sum;
	}else{
		foreach ($nums as $num) {
			$sum += $num;
		}
		return $sum;
	}
}
echo sum(1,2,4);