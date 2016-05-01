<?php 

function pageController()
{
	if (!isset($_GET['count'])){
		$count = 0;
	} else {
		$count = $_GET['count'];
	}

	return ['count' => $count];
}

extract(pageController());

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Counter</title>
 </head>
 <body>
	<p>Count = <?= $count ?></p>
	<br>
	<a href="?count=<?= $count + 1 ?>">↑up↑</a>
	<br>
	<a href="?count=<?= $count - 1 ?>">↓down↓</a>
 </body>
 </html>