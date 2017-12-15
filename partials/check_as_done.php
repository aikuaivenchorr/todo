 <?php  

       $current =  $_POST['title'];
           //var_dump ($current);
      
         $statement = $pdo->prepare(
      "UPDATE `todo` SET `completed`='1' WHERE `title`= '$current' "
            
    );
    $statement->execute();


 // header('Location: index.php');
