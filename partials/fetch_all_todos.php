<?php

require 'partials/db.php';
if(isset($GET['sortByPriority']) && $GET['sortByPriority'] == true){
    echo $GET['sortByPriority'];
      echo "Urra! <br>";
    $statement = $pdo->prepare(
      "SELECT * FROM todo"
    );
}
else{
      echo "Hej <br>";
$statement = $pdo->prepare(
  "SELECT * FROM todo"
);
}


$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);

//  "SELECT * FROM todo ORDER BY priority DESC"