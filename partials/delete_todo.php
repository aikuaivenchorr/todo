<?php  

       $id =  $_POST['deleteId'];
       
      
         $statement = $pdo->prepare(
      "DELETE FROM `todo` WHERE `todo`.`id` = '$id' "
            
    );
    $statement->execute();

