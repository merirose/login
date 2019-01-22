<?php require 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Maintenance</title>
	<link rel="shortcut icon" href="img/main.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset ($_POST['login'])) {
		require 'verify.php';
	}
}
 ?>
<body style="background-color: #f5f0f0;">
	<?php include 'login.php'; ?>
</body>
</html>