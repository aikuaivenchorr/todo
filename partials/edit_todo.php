<?php  

$currentId =  $_POST['id'];
$title =  $_POST['editTitle'];

$statement = $pdo->prepare(

    "UPDATE `todo` SET `title`='$title' WHERE `id`= '$currentId' "

);

$statement->execute();