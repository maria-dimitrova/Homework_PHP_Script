<?php

$number1 = isset($_GET['number1']) ? $_GET['number1'] : '';
$number2 = isset($_GET['number2']) ? $_GET['number2'] : '';
$select = isset($_GET['op']) ? $_GET['op'] : '';

function operation($number1, $number2, $select) {
	if (!is_numeric($number1) || !is_numeric($number2) || !isset($number1) || !isset($number2)) {
		$error = "Моля веведете 2 числа.";
		echo $error;
		die;
	}
	
	if ($select == '+') {
		$result = $number1 + $number2;
		echo "Резултат: $number1 + $number2 = $result";
	}
	if ($select == '-') {
		$result = $number1 - $number2;
		echo "Резултат: $number1 - $number2 = $result";
	}
	if ($select == '*') {
		$result = $number1 * $number2;
		echo "Резултат: $number1 * $number2 = $result";
	}
	if ($select == '/') {
		$result = $number1 / $number2;
		echo "Резултат: $number1 / $number2 = $result";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 1</title>
	<style type="text/css">
	
		div, h3, h1 {
			margin: 15px;
		}
		
		label {
			display: inline-block;
			width: 70px;
		}
		
		#число1, #число2 {
			width: 35px;
			height: 30px;
			text-align: center;
		}
		
		select {
			font-size: 20px;
		}
		
		#res {
			border: 1px solid black;
			width: 200px;
			text-align: center;
		}
			
	</style>
</head>
<body>
	<h1>Task 1</h1>
	<form action="" method="get">
	<h3>Въведете 2 числа и изберете<br>каква операция да се изпълни:</h3>
	<div>
		<label for="число1">Число 1:</label>
		<input id="число1" type="text" name="number1">
	</div>
	<div>
		<label for="число2">Число 2:</label>
		<input id="число2" type="text" name="number2">
	</div>
	<div>Операция:
		<select name="op">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
	</div>
	<div>
		<input type="submit" value="Изчисли">
	</div>
	<div id="res">
		<h4><?= operation($number1, $number2, $select);?></h4>
	</div>
	</form>
</body>
</html>