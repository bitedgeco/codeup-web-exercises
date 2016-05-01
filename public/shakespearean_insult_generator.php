<?php 

function randomElement($arrayName)
{
	return $arrayName[mt_rand(0, count($arrayName) - 1)];
}

function outputInsult($firstArray, $secondArray)
{	
	$first = randomElement($firstArray);
	$second = randomElement($secondArray);
	$firstchar = substr($first, 0, 1);

	if ($firstchar == 'a' || $firstchar == 'e' || $firstchar == 'i' || $firstchar == 'o' || $firstchar == 'u'){
		return "Thou art an {$first} {$second}.";
	} else {
		return "Thou art a {$first} {$second}.";
	}
}

function pageController()
{

	$firstWord = ['artless', 'bawdy', 'bootless', 'churlish', 'craven', 'dankish', 'fobbing', 'frothy', 'fusty', 'goatish', 'infectious' , 'jarring', 'lumpish', 'mangled', 'mewling', 'misbegotten', 'odiferous', 'paunchy', 'puking', 'rank', 'reeky', 'spleeny', 'spongy', 'tottering', 'unmuzzled', 'warped', 'wart-necked', 'weedy', 'wimpled', 'yeasty'];

	$secondWord = ['baggage', 'barnacle', 'bladder', 'boar-pig', 'bum-bailey', 'canker-blossom', 'clack-dish', 'clotpole', 'codpiece', 'flap-dragon', 'flax-wench', 'foot-licker', 'giglet', 'haggard', 'horn-beast', 'lewdster', 'lout', 'maggot-pie', 'malt-work', 'measle', 'minnow', 'miscreant', 'moldwarp', 'nut-hook', 'pignut', 'puttock', 'ratsbane', 'scut', 'varlot', 'vassal', 'whey-face', 'blind-worm', 'jolt-head', 'malcontent', 'devil-monk'];

	$insult = ['insult' => outputInsult($firstWord, $secondWord)];

	return $insult;
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

