<?php
$username = $mysqli->escape_string($_POST['user']);
$password = $mysqli->escape_string($_POST['pass']);
$result = $mysqli->query("SELECT * FROM users where username = '$username'");

try {
	if ($result->num_rows == 0) {
		echo '<script>alert("User does not exist!"); location.href="\index.php";</script>';
	} else {
		$user = $result->fetch_assoc();
		if ($password == $user['password']) {
			$_SESSION['email'] = $user['email'];
			$_SESSION['fname'] = $user['firstname'];
			$_SESSION['lname'] = $user['lastname'];
			$_SESSION['bdate'] = $user['birth_date'];
			$_SESSION['contact'] = $user['contact_number'];
			$_SESSION['address'] = $user['address'];
			$_SESSION['uname'] = $user['username'];
			$_SESSION['active'] = $user['active'];

			$_SESSION['logged_in'] = true;
			echo '<script>alert("Welcome!");
			location.hrey="\main.php";</script>';

		} else {
			echo '<script>alert{"Incorrect Password!"); location.href="\index.php";</script>';
		}
	}
} catch (Exception $e) {
	echo '<script>window.alert('.$e->getMessage().');</script>';
}


?>