 <?php  

       $currentId =  $_POST['id'];
           //var_dump ($current);
      
         $statement = $pdo->prepare(
      "UPDATE `todo` SET `completed`='1' WHERE `id`= '$currentId' "
            
    );
    $statement->execute();


 // header('Location: index.php');
