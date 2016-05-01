<?php 

function pageController()
{
	$data = [];

	$data['favs'] = ['food', 'sleep', 'internet', 'sport', 'snow', 'juice'];

	return $data;

}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
	<!-- Bootstrap CSS cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- external CSS -->
	<link rel="stylesheet" href="/css/my_favorite_things.css">
</head>
<body>
	<div class="container">
		<table class="table table-striped table-bordered table-hover">
			<th>
				My Favorite Things
			</th>
			<?php foreach ($favs as $value): ?>
			<tr>
				<td>
					<?= $value;?> 
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<!-- Bootstrap JS cdn-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>