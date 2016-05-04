<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>

	<!-- external css -->
	<link rel="stylesheet" href="includes.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>FAQ</h1>
			<?php 
			require_once 'includes_header.php';
			require_once 'includes_navbar.php';
			?>
		</div>
		<div id="content">
			<h2>How did you get the year to display in the footer? Did you just hard code it like a hack?</h2>

			<p>I am glad you asked, actualy I generate it dynamicaly with php like</p>

			<p><code>&lt;?= date ('Y') ?&gt;</code></p>
		</div>
	</div>
	<div id="footer">
		<?php require_once 'includes_footer.php';?>
	</div>
</body>
</html>

