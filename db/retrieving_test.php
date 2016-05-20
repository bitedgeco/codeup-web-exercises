<?php     

require_once 'db_connect.php';

// --1

// $stmt = $dbc->query('SELECT id, email, name FROM test');

// var_dump($stmt);

// --2

// $stmt = $dbc->query('SELECT * FROM test');

// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// echo "Rows: " . $stmt->rowCount() . PHP_EOL;

// var_dump($stmt);

// --3

// $stmt = $dbc->query('SELECT * FROM test');

// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// while ($row = $stmt->fetch()) {
//     print_r($row);
// }

// -4

// $stmt = $dbc->query('SELECT * FROM test');

// print_r($stmt->fetch());

// print_r($stmt->fetch(PDO::FETCH_ASSOC));

// print_r($stmt->fetch(PDO::FETCH_NUM));

// print_r($stmt->fetch(PDO::FETCH_BOTH));

// -5

// function getUsers()
// {
//     require_once 'db_connect.php';

//     $stmt = $dbc->query('SELECT * FROM test');

//     $rows = array();
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         $rows[] = $row;
//     }

//     // return $rows;
//     var_dump($rows);
// }

// getUsers();

// -6

// function getUsers()
// {
// 	require_once 'db_connect.php';

//     return $dbc->query('SELECT * FROM test')->fetchAll(PDO::FETCH_ASSOC);
// }

// var_dump(getUsers());

// -7 

$stmt = $dbc->query('SELECT count(*) FROM test');

echo 'There are ' . $stmt->fetchColumn() . ' users in our database' . PHP_EOL;