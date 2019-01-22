<?php require 'db.php'; session_start(); ?>
<?php
if ($_SESSION['logged_in'] != 1) {
	echo '<script>alert("You must login before accessing this page!"); location.href="\index.php";</script>';
} else {
	$active = $_SESSION['active'];
	if ($active == 1) {
		$first = $_SESSION['fname'];
		$last = $_SESSION['lname'];
		$email = $_SESSION['email'];
		$birth = $_SESSION['bdate'];
		$contact = $_SESSION['contact'];
		$address = $_SESSION['address'];
		$username = $_SESSION['uname'];
	} else {
		echo '<script>alert("You must verify your email before accessing this page!"); location.href="\index.php";</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maintenance - <?php echo $first.' '.$last; ?></title>
	<link rel="shortcut icon" href="img/main.ico"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'navbar.php'; ?>
</body>
</html>