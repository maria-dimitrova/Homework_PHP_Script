<?php
session_start();

/* $jname = isset($_SESSION['jname']) ? ($_SESSION['jname']) : '';
$name = isset($_POST['name']) ? ($_POST['name']) : '';
$pass = isset($_POST['pass']) ? ($_POST['pass']) : ''; */
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="Task_02.php" method="post">
	<p>Hello <?= $_SESSION['jname']?>,<br>your username is: <?= $_SESSION['name']?><br>
	and your password is: <?= md5($_SESSION['pass'])?></p>
	<button>Back</button>
	</form>
	
</body>
</html>