<?php

session_start(); 

require_once '../functions.php';

function pageController()
{
	$message = 'Please login';
	$username = 'Guest';

	if (isset($_SESSION['logged_in_user'])){
		header('Location: authorized.php');
		exit;
	}
	if (!empty($_POST)){
		$username = inputGet('username');
		$password = inputGet('password');
		if ($password == 'password'){
			$_SESSION['logged_in_user'] = $username;
			header('Location: authorized.php');
			exit;
		} else {
			$message = 'login failed';
			$username = 'Guest';
		}
	}
	return ['message' => $message,
			'username' => $username];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <form method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>

    <p><?= $message ?></p>

	<p> Welcome Guest</p>
</body>
</html>