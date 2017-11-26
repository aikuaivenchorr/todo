<?php

require 'partials/db.php';
echo "qwert!";
$statement = $pdo->prepare(
  "DELETE FROM `todo` WHERE id = $id"
);
$statement->execute();
    
     if($statement){
         echo 'Succesfully deleted! <br>';
//    header("Refresh: 5; URL=index.php");
}

?>


  
  