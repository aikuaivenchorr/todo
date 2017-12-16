<?php

require 'db.php';
    $statement = $pdo->prepare(
      "SELECT * FROM `todo` 
      ORDER BY `todo`.`priority` ASC;
      
      "
    );


$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);

