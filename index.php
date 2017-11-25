<?php
//    require_once 'partials/head.php';
//    require_once 'partials/footer.php';
    require_once 'partials/db.php';
    require_once 'partials/fetch_all_todos.php';



    foreach($todos as $todo){
      require_once 'partials/todo_row.php';
    } 


echo "<hr><br><h1>TO DO LIST</h1><br>";


//$title = $completed = $priority = $username = "";

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
  Title: <input type="text" name="title" value="">
  <br><br>
  Completed: <input type="number" max="1" name="completed" value="">
  <br><br>
  Priority: <input type="number" name="priority" value="">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php 
require_once 'partials/insert_new_todo.php';

?>

    
   