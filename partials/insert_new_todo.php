   <?php


    require 'db.php';
    
    if(empty($_POST["completed"])){

        $statement = $pdo->prepare(
          "INSERT INTO `todo`(`title`, `priority`, `createdBy`) VALUES (:title,:priority,:createdBy)"
    );
    $statement->execute(array(
          ":title" => $_POST["title"],
          ":priority" => $_POST["priority"],
           ":createdBy" => $_POST["createdBy"]
    ));

}
    
       elseif($_POST["completed"] == '1'){
       $current =  $_POST['title'];
           var_dump ($current);
      
         $statement = $pdo->prepare(
      "UPDATE `todo` SET `completed`='1' WHERE `title`= '$current' "
            
    );
    $statement->execute();
           
   
        
        
    }
    


  header('Location: index.php');

