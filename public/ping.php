<?php  

// require_once '../functions.php';
require_once '../Input.php';

function pageController()
{
	if (!Input::has('rally')){
		$rally = 0;
	} else {
		$rally = Input::get('rally');
	}

	if (!Input::has('player1')){
		$player1 = 0;
	} else {
		$player1 = Input::get('player1');
	}

	if (!Input::has('player2')){
		$player2 = 0;
	} else {
		$player2 = Input::get('player2');
	}

	return ['rally' 	=> $rally,
			'player1' 	=> $player1,
			'player2' 	=> $player2];

}

extract(pageController());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ping Pong Player 1</title>
	<!-- external CSS -->
	<link rel="stylesheet" href="/css/ping.css">
</head>
<body>
	<div id="image">

		<img src="/img/ping_pong.jpg">

		<h1 id="playerNum">Player 1</h1>

		<h2 id="player1Score">Player 1 score <?= $player1 ?></h2>

		<h2 id="player2Score">Player 2 score <?= $player2 ?></h2>

		<p id="hit">
			<a href="http://codeup.dev/pong.php?rally=<?= $rally + 1 ?>&player1=<?= $player1 ?>&player2=<?= $player2 ?>">Hit</a>
		</p>
		<p id="miss">
			<a href="http://codeup.dev/pong.php?player2=<?= $player2 + 1 ?>&player1=<?= $player1 ?>">Miss</a>
		</p>

		<h3 id="rally">Rally <?= $rally ?></h3>
	</div>
</body>
</html>