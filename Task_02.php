<?php

session_start();

$jname = isset($_POST['jname']) ? ($_POST['jname']) : '';
$name = isset($_POST['name']) ? ($_POST['name']) : '';
$pass = isset($_POST['pass']) ? ($_POST['pass']) : '';
$repass = isset($_POST['rpass']) ? ($_POST['rpass']) : '';
$_SESSION['jname'] = $jname; 
$_SESSION['name'] = $name;
$_SESSION['pass'] = $pass;

$errors = [];

if (!empty($_POST)) {
	
	if (empty($name) || empty($jname) || empty($pass) || empty($repass)) {
		$errors[] = "All fields are mandatory.";
	}
	
	if ($pass !== $repass) {
		$errors[] = "Type the same passwords!";
	}

	if (!$errors) {
		header('Location:Task_02-submit.php');
		die;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task 2</title>
	<style type="text/css">
		fieldset {
			width: 350px;
		}
		
		div {
			margin: 15px 0;
		}
		
		label {
			display: inline-block;
			width: 120px;
			text-align: right;
		}
		
		legend, #btn, p {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Task 2</h1>
	<form action="" method="post">
		<fieldset>
			<legend>Confirm Your Data</legend>
				<?php foreach ($errors as $error):?>
				<p style="color: red;"><?= $error?> </p>
				<?php endforeach;?>
				<div>
					<label>name:</label>
					<input type="text" name="jname" value="<?= htmlentities(empty($_POST['jname']) ? '' : $_POST['jname']); ?>">
				</div>
				<div>
					<label>username:</label>
					<input type="text" name="name" value="<?= htmlentities(empty($_POST['name']) ? '' : $_POST['name']); ?>">
				</div>
				<div>
					<label>password:</label>
					<input type="password" name="pass" value="<?= htmlentities(empty($_POST['pass']) ? '' : $_POST['pass']); ?>">
				</div>
				<div>
					<label>repeat password:</label>
					<input type="password" name="rpass" value="<?= htmlentities(empty($_POST['rpass']) ? '' : $_POST['rpass']); ?>">
				</div>
				<div id="btn">
					<input type="submit" value="Submit">
				</div>
		</fieldset>
	</form>
</body>
</html>