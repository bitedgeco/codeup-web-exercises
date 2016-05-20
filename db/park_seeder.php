<?php 

require_once 'parks_db_connect.php'; 

$stmt = $dbc->prepare(
"TRUNCATE national_parks"
);
$stmt->execute();

$parks = [
['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919/02/26', 'area_in_km' => 191.8, 'description' => 'Trees and stuff.'],
['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988/10/31', 'area_in_km' => 36.4, 'description' => 'Sand and stuff.'],
['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929/04/12', 'area_in_km' => 309.7, 'description' => 'Rocks and stuff.'],
['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978/11/10', 'area_in_km' => 982.4, 'description' => 'Plants and stuff.'],
['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944/06/12', 'area_in_km' => 3242.2, 'description' => 'Caves and stuff.'],
['name' => 'Death Valley', 'location' => 'California', 'date_established' => '1994/10/31', 'area_in_km' => 13647.6, 'description' => 'Animals and stuff.'],
['name' => 'Grand Canyon', 'location' => 'Arizona', 'date_established' => '1919/02/26', 'area_in_km' => 4926.7, 'description' => 'Rivers and stuff.'],
['name' => 'Redwood', 'location' => 'California', 'date_established' => '1968/10/2', 'area_in_km' => 455.3, 'description' => 'Grass and stuff.'],
['name' => 'Sequoia', 'location' => 'California', 'date_established' => '1890/09/25', 'area_in_km' => 1635.1, 'description' => 'Water and stuff.'],
['name' => 'Yosemite', 'location' => 'California', 'date_established' => '1890/10/01', 'area_in_km' => 3080, 'description' => 'Waterfalls and stuff.']
];

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_km, description) VALUES (:name, :location, :date_established, :area_in_km, :description)');

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_km',  $park['area_in_km'],  PDO::PARAM_STR);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();
}

