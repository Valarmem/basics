<?php
// header("Content-Type:text/plain;charset=utf-8");
header("Content-Type:application/json;charset=utf-8");

$staff = [
	["name"=>"jack","number"=>"01","sex"=>"male","job"=>"manager"],
	["name"=>"Dan","number"=>"02","sex"=>"male","job"=>"sales"],
	["name"=>"Unix","number"=>"03","sex"=>"female","job"=>"cook"]
];


if ($_SERVER["REQUEST_METHOD"] == "GET") {
	search();
}elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
	create();
}

function search() {
	$jsonp = $_GET["callback"];
	if (!isset($_GET["number"]) || empty($_GET["number"])) {
		echo $jsonp.'({"success":false,"msg":参数错误"})';
		return;
	}

	global $staff;
	$number = $_GET["number"];
	$result = '{"success":false,"msg":"没有找到员工 "}';

	foreach ($staff as $value) {
		if ($value["number"] == $number) {
			$result = $jsonp.'({"success":true,"msg":"找到员工：员工编号：'.$value["number"].',员工姓名：'.$value["name"].',员工性别：'.$value["sex"].',员工职位：'.$value['job'].'"})';
			break;
		}
	}
	echo $result;
}

function create() {
	if (!isset($_POST["name"])||empty($_POST["name"])
		|| !isset($_POST["number"]) || empty($_POST["number"])
		|| !isset($_POST["sex"]) || empty($_POST["sex"])
		|| !isset($_POST["job"]) || empty($_POST["job"])
		) {
		echo '{"success":false,"msg":"参数错误，员工信息填写不全"}';
		return;
	}

	//TODO 获取POST表单数据
	
	echo '{"success":true,"msg":"员工：'.$_POST["name"].' 信息保存成功！"}'; 
}