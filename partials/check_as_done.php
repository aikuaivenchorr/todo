<?php  
    $currentId =  $_POST['id'];
      
    $statement = $pdo->prepare(
      "UPDATE `todo` SET `completed`='1' WHERE `id`= '$currentId' "
            
    );

    $statement->execute();
