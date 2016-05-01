<?php include '../templates/header.php' ?>

<?php include 'items.php'; 

foreach ($books as $key => $value) 
{
    echo "{$value['title']} was writen by {$value['author']} in {$value['released']}.";
    echo "</p>";
}
?>

<?php include '../templates/footer.php' ?>