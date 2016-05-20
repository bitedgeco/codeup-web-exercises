<?php 

require_once "../db/parks_db_connect.php";
require_once '../lib/Input.php';
require_once '../lib/functions.php';

function pageController($dbc)
{
	$stmt = $dbc->prepare('SELECT count(*) FROM national_parks');
	$stmt->execute();
	$numParks = $stmt->fetchColumn();


	$offset = 0;
	$page = 0;
	$pageLimit = 4;


	if (isset($_REQUEST['offset'])){
		if ($_REQUEST['offset'] < 0 || $_REQUEST['offset'] > $numParks || !is_numeric($_REQUEST['offset'])){
			$offset = 0;
		} else {
		$offset = ($_REQUEST['offset']);
		}
	}

	$data = [];
	$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT {$pageLimit} OFFSET {$offset}");
	$stmt->execute();
	$data['parks'] = $stmt->fetchAll(PDO::FETCH_ASSOC);



	if (!empty($_POST)){
		$name = Input::getString('name');
		$location = Input::getString('location');
		$date_established = Input::getDate('date_established')->format('Y-m-d');
		$area_in_km = Input::getNumber('area_in_km');
		$description = Input::getString('description');

		$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_km, description) VALUES (:name, :location, :date_established, :area_in_km, :description)');

	    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
	    $stmt->bindValue(':location', $location,  PDO::PARAM_STR);
	    $stmt->bindValue(':date_established', $date_established,  PDO::PARAM_INT);
	    $stmt->bindValue(':area_in_km', $area_in_km,  PDO::PARAM_STR);
	    $stmt->bindValue(':description', $description,  PDO::PARAM_STR);

	    $stmt->execute();
	}

	
	return ['data' => $data,
			'offset' => $offset,
			'numParks' => $numParks,
			'pageLimit' => $pageLimit
			];
}

extract(pageController($dbc));

?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	 <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
  	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- external css -->
	<link rel="stylesheet" href="/css/national_parks.css">

</head>
<body>
    <div class="container">
    	<h1>National Parks</h1>
		<?php 
		$i=1;  
		foreach ($data['parks'] as $park):?>
			<h2><?= escape($park['name']);?></h2>
			<p>Location: <?= escape($park['location']);?></p>
			<p>Date established: <?= escape($park['date_established']);?></p>
			<p>Area in km: <?= escape($park['area_in_km']);?></p> 
			<p><?= $park['description'];?></p>
			<?php if ($i != count ($data['parks'])): ?>
			<hr> 
			<?php endif; 
			$i++; ?>

		<?php endforeach; ?>

		<div id="next" class="card-panel teal lighten-2">
			<?php if ($offset >= $pageLimit){?>
			<a href="national_parks.php?offset=0">First </a>|
			<?php } ?>
			<?php if ($offset > 0){?>
				<a href="national_parks.php?offset=<?= $offset - $pageLimit ?>">Previous </a>
				<?php if ($offset < $numParks - ($pageLimit - 1)){?>
					 |
				<?php } ?>
			<?php } ?>
			<?php if ($offset < $numParks - ($pageLimit - 1)){?>
			<a href="national_parks.php?offset=<?= $offset + $pageLimit ?>">Next </a>|
			<?php } ?>
			<?php if ($offset < $numParks - ($pageLimit - 1)){?>
			<a href="national_parks.php?offset=<?= $numParks - ($pageLimit - 1)?>">Last </a>
			<?php } ?>
		</div>

		<form method="POST">  
			<h2>Add a national park</h2>
		    <input name="name" placeholder="Park name" required>
		    <input name="location" placeholder="State" required>
		    <input type="date" name="date_established" placeholder="Estabished YYYY/MM/DD" required>
		    <input type="number" name="area_in_km" placeholder="Area in km" required>
		    <input name="description" placeholder="Description" required>
  			<button class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">add</i></button>
		</form>  

	</div>

	<!-- Compiled and minified JavaScript -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>

