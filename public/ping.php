<?php  

require_once '../functions.php';

function pageController()
{
	if (!inputHas('rally')){
		$rally = 0;
	} else {
		$rally = inputGet('rally');
	}

	if (!inputHas('player1')){
		$player1 = 0;
	} else {
		$player1 = inputGet('player1');
	}

	if (!inputHas('player2')){
		$player2 = 0;
	} else {
		$player2 = inputGet('player2');
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