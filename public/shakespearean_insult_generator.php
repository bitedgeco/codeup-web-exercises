<?php 

require_once '../Insult.php';

function pageController()
{

	return ['insult' => Insult::outputInsult()];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shakespearean insult generator</title>
	<!-- Bootstrap CSS cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- external css -->
	<link rel="stylesheet" href="/css/shakespearean_insult_generator.css">
</head>
<body>
	<div class="container">  
		<h1>Shakespearean insult generator</h1>
		
		<img src="/img/shakespeare_cap.jpg">
			
		<h2 id="insult"><?= $insult;?></h2>
		
		<button class="btn btn-default btn-lg" onClick="window.location.reload()">New insult!</button>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

