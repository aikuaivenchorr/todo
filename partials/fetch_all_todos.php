<?php

require 'db.php';

    if($_GET['sortByPriority'] == true){
      $statement = $pdo->prepare(
      "SELECT * FROM todo 
      ORDER BY priority ASC;
      
      "
    );
        
    }
else
{    
    $statement = $pdo->prepare(
      "SELECT * FROM todo 
      ORDER BY id DESC;
      
      "
    );
}

$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);
