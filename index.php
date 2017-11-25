<?php
//    require_once 'partials/head.php';
//    require_once 'partials/footer.php';
    require_once 'partials/db.php';
    require_once 'partials/fetch_all_todos.php';



    foreach($todos as $todo){
        echo $todo["title"] . $todo["priority"] . $todo["completed"] . "<br>";
//        foreach($todo as $onetodo){
//            echo "<br>" . $onetodo;
        }
//      require_once 'partials/todo_row.php';
    


echo "<hr><br><h1>TO DO LIST</h1><br>";


//$title = $completed = $priority = $username = "";

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
  Title: <input type="text" name="title" value="" required>
  <br><br>
  Completed: <input type="number" min="0" max="1" name="completed" value="0" required>
  <br><br>
  Priority: <input type="number" min="1" name="priority" value="" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 
require_once 'partials/insert_new_todo.php';
  

?>

    
   