<?php

require 'partials/db.php';

$statement = $pdo->prepare(
    "DELETE FROM `todo` WHERE id = $id"
);

$statement->execute();


?>


  
  