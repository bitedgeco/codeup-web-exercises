<?php

require_once 'db_credentials.php';
 
$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

