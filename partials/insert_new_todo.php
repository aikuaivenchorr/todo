<?php
    require 'db.php';
        $statement = $pdo->prepare(
          "INSERT INTO `todo`(`title`, `priority`, `createdBy`) VALUES (:title,:priority,:createdBy)"
    );

    $statement->execute(array(
          ":title" => $_POST["title"],
          ":priority" => $_POST["priority"],
          ":createdBy" => $_POST["createdBy"]
    ));
 
