<?php

require 'db.php';
    $statement = $pdo->prepare(
      "SELECT * FROM todo 
      ORDER BY id DESC;
      
      "
    );


$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);

//  "SELECT * FROM todo ORDER BY priority DESC"