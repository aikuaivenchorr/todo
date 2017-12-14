   <?php

if(!empty($_POST)){
    require 'db.php';
    if(empty($_POST["completed"])){
         $_POST["completed"] = '0';
    }

    $statement = $pdo->prepare(
      "INSERT INTO `todo`(`title`, `completed`, `priority`, `createdBy`) VALUES (:title,:completed,:priority,:createdBy)"
    );
    $statement->execute(array(
      ":title" => $_POST["title"],
      ":completed" => $_POST["completed"],
      ":priority" => $_POST["priority"],
       ":createdBy" => $_POST["createdBy"]
    ));

}
