<?php 

session_start();

$number = makeNumber();

function makeNumber()
{
	if (!isset($_SESSION['number'])){
		$number = $number = mt_rand(1, 10);
		$_SESSION['number'] = $number; 
		var_dump($number);
		return $number;
	} else{
		$number = $_SESSION['number'];
		var_dump($number);
		return $number;
	}
}

function evaluateGuess($number)
{
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$guess = $_POST['guess'];
		if ($guess < $number){
			return "Higher";
		} elseif ($guess > $number){
			return "Lower";
		} else {
		    session_unset();
		    session_regenerate_id(true);
		    header('Location: high_low_browser.php');
			return "Winner";
		} 
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>High Low</title>
</head>
<body>
	<p>Guess a number between 1 and 10</p>
	<form method="POST">
		<p>Guess<input name="guess"></input></p>
		<button type='submit'>Submit</button>
	</form>

	<p><?= evaluateGuess($number) ?></p>

</body>
</html>