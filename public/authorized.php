<?php 

require_once '../Auth.php';
require_once '../Input.php';

session_start();

function pageController()
{
	if (!Auth::check()){
		header('Location: login.php');
		exit;
}
	return ['username' => Auth::user()];
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

	<p> Welcome <?= Input::escape($username) ?></p>

 	<button ><a href="logout.php">Logout</a></button>
 </body>
 </html>