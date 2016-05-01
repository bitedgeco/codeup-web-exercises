<?php 
var_dump($_GET);
var_dump($_POST);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First HTML Form</title>
</head>
<body>
	<h2>Submit a form</h2>
	<form method="POST" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="password"> 
	    </p>
	    <p>
	        <button type="submit">Login</button>
	    </p>
	</form>
	<hr>
	<h2>Compose an email</h2>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="to">To:</label>
			<input id="to" name="to" type="email" placeholder="to">
		</p>
		<p>
			<label for="from">From:</label>
			<input id="to" name="from" type="email" placeholder="from">
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input id="subject" name="subject" type="text" placeholder="subject">
		</p>
		<p>
			<label for="body">Message:</label>
			<textarea rows="5" cols="40" id="email_body" name="email_body" placeholder="Message here"></textarea>
		</p>
		
		<button type="submit">Send</button>

		<p>
			<label for="save">save email:</label>
			<input type="checkbox" id="save" name="save" value="yes" checked>
		</p>
	</form>
	<hr>
	<h2>Multiple Choice Test</h2>
	<form method="POST" action="/my_first_form.php">
		<p>Prefered currency</p>
		<label>
		 	<input type="radio" name="pc" value="Bitcoin">
		 	Bitcoin
		</label>
		<label>
		 	<input type="radio" name="pc" value="Gold">
		 	Gold
		</label>
		<label>
		 	<input type="radio" name="pc" value="USD">
		 	USD
		</label>
		<p>
		 	<button type="submit">Submit</button>
		</p>
	</form>
	<form>
		 <label for="pp">Prefered payment</label>
		 <select id="pp" name="pp[]" multiple> 
		 	<option value="Bitcoin">Bitcoin</option>
		 	<option value="Barter">Barter</option>
		 	<option value="Credit card">Credit card</option>
		 </select>
		 <p>
		 	<button type="submit">Submit</button>
		 </p>
	</form>
	<hr>
	<h2>What cryto currencies have you used?</h2>
	<form>
		<label>
			<input type="checkbox" id="cc1" name="cc[]" value="Bitcoin">Bitcoin
		</label>
		<label>
			<input type="checkbox" id="cc2" name="cc[]" value="Litecoin">Litecoin</label>
		<label>
			<input type="checkbox" id="cc3" name="cc[]" value="Dash">Dash
		</label>
		<p>
			<button type="submit">Submit</button>
		</p>
	</form>
	<hr>
	<h2>Select Testing</h2> 
	<form>
		<label for="cola">Select your cola: </label>
		<select id="cola" name="cola">
		    <option value="1">Coke</option>
		    <option value="0" selected>Pepsi</option>
		</select>
		<button type="submit">Submit</button>
	</form>
</body>
</html>

