<?php 

require_once 'parks_db_connect.php'; 

$dbc->exec(
"DROP TABLE IF EXISTS national_parks"
);

$dbc->exec(
"CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240),
    location VARCHAR(248),
    date_established DATE,
    area_in_km DOUBLE,
    description TEXT,
    PRIMARY KEY (id)
)"
);   