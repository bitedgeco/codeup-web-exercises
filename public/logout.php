<?php 

session_start();

function clearSession()
{
    session_unset();
    session_regenerate_id(true);
    header('Location: login.php');
	exit;
}

clearSession();

?>

