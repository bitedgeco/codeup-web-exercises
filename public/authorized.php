<?php 
session_start();

require_once '../functions.php';

function pageController()
{
	if (!isset($_SESSION['logged_in_user'])){
		header('Location: login.php');
		exit;
}

	$username = $_SESSION['logged_in_user'];

	return ['username' => $username];

}

extract(pageController());
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Authorized</title>
 </head>
 <body>
	<h1>Authorized</h1>

	<p> Welcome <?= escape($username) ?></p>

 	<button ><a href="logout.php">Logout</a></button>
 </body>
 </html>