<?php include '../templates/header.php' ?>

<?php include '../items.php'; 

foreach ($books as $key => $value) {

    echo "book {$key} is {$value['author']}";
    echo "book {$key} is {$value['title']}";
    echo "book {$key} is {$value['released']}";
}


?>

<?php include '../templates/footer.php' ?>