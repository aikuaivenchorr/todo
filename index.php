<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TODO LIST</title>
</head>
<body>
  
  
 
   <?php
    
    if(!empty($_POST)){
require 'partials/insert_new_todo.php';
        if($pdo){
            echo "Connected! ";
        }
        
        if($statement){
            echo "<br> Published!";
        }

}

    ?>
    
   
    
   <h1>TODO LIST</h1>
   
   <form name="todo_form" action="index.php" method="POST">
       <label for="title">Title</label>
       <input type="text" name="title" id="title">
       <label for="completed">Completed</label>
       <input type="text" name="completed" id="completed">
       <label for="priority">Priority</label>
       <input type="text" name="priority" id="priority">
       <label for="createdBy">Author</label>
       <input type="text" name="createdBy" value="Mariia"id="createdBy">
       <input type="submit" value="submit">
   </form>
  <?php  
    if(!empty($_POST)){
   var_dump($_POST);}
     ?>
 
</body>
</html>