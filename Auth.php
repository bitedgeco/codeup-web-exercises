<?php

require_once 'Log.php';

class Auth
{

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password)
	{
		if ($username == 'guest' && password_verify($password, self::$password)){
			$_SESSION['logged_in_user'] = $username;
			Log::logInfo("User {$username} logged in.");
			return true;
		} else {
			Log::logInfo("User {$username} failed to log in");
			return false;
		}
	}

	public static function check() 
	{
		return isset($_SESSION['logged_in_user']);
	}

	public static function user()
	{
		return $_SESSION['logged_in_user'];
	}

	public static function logout()
	{
	$username = $_SESSION['logged_in_user'];
	Log::logInfo("User {$username} logged out");
    session_unset();
    session_regenerate_id(true);
    header('Location: login.php');
	exit;
	}


}