<?php     

require_once 'db_connect.php';
require_once 'db_credentials.php';

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'vagrant', 'vagrant');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $query = 'CREATE TABLE test (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     email VARCHAR(240) NOT NULL,
//     name VARCHAR(240) NOT NULL,
//     PRIMARY KEY (id)
// )';

// Create INSERT query
// $query = "INSERT INTO test (email, name) VALUES ('ben@codeup.com', 'Ben Batschelet')";

// Execute Query
// $numRows = $dbc->exec($query);
// echo "Inserted $numRows row." . PHP_EOL;

// $dbc->exec($query);

$users = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($users as $user) {
    $query = "INSERT INTO test (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}







