<?php

require_once '../Auth.php';
require_once '../Input.php';

session_start(); 

function pageController()
{
	$message = 'Please login';
	$username = 'Guest';

	if (Auth::check()){
		header('Location: authorized.php');
		exit;
	}
	if (!empty($_POST)){
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt($username, $password)){
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