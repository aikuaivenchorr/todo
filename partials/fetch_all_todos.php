<?php

require 'partials/db.php';
if(isset($GET['sortByPriority']) && $GET['sortByPriority'] == true){
    echo $GET['sortByPriority'];
      echo "Urra! <br>";
    $statement = $pdo->prepare(
      "SELECT title, completed, priority, createdBy FROM todo ORDER BY priority ASC"
    );
}
else{
      echo "Hej <br>";
$statement = $pdo->prepare(
  "SELECT title, completed, priority, createdBy FROM todo ORDER BY priority DESC"
);
}


$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);