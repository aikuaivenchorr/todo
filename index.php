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
$todoList = array();
$doneList = array();
    
//Adds new todo to database    
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
    
   
    
   <h1>TO DO LIST</h1>
  <h2>What to do: </h2>
   <form name="todo_form" action="index.php" method="POST">
        <fieldset>
            <legend>Add new todo:</legend>
               <label for="title">Title</label>
               <input type="text" name="title" id="title">
               <label for="completed">Completed</label>
               <input type="checkbox" value="1" name="completed" id="completed">
               <label for="priority">Priority</label>
               <input type="number" name="priority" id="priority">
               <label for="createdBy">Author</label>
               <input type="text" name="createdBy" value="Mariia"id="createdBy">
               <input type="submit" value="submit">
       </fieldset>
   </form>
  <?php  
    if(!empty($_POST)){
        //var_dump($_POST);
    }
  ?>    
   
  <?php 
     require 'partials/fetch_all_todos.php';
    
    //  var_dump($todos);
    
    //creates 2 array for not completed and completed todos
         foreach($todos as $todo){
             if($todo['completed'] == 0){
                 
                 array_push($todoList, $todo);
             
             }
             
             elseif($todo['completed'] == 1) {
                 array_push($doneList, $todo);
             }
         }
         
         
      ?> 
      
      
      <div id="not_completed">
        <?php  
            //writes out all not completed tasks
            //var_dump($todoList);
         foreach($todoList as $todo){
               echo $todo['priority'] . " " .  $todo['title'] . " " . $todo['completed'] . " " .  $todo['createdBy'] . "<hr>";
             
         }
         
      ?> 
         
         
     </div> 
      
     <hr>
     <h2>Done:</h2>
     <div id="completed">
         <?php 
         //writes out all completed tasks
            //var_dump($doneList);
         
         
            foreach($doneList as $todo){
                echo $todo['priority'] . " " .  $todo['title'] . " " . $todo['completed'] . " " .  $todo['createdBy'] . "<hr>";
             
         }
         ?>   
     </div>
 
</body>
</html>