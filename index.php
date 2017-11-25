<?php
//    require_once 'partials/head.php';
//    require_once 'partials/footer.php';
    require_once 'partials/db.php';
    require_once 'partials/fetch_all_todos.php';
//require_once 'partials/sort_by_priority.php';


$completed_array = array();
    foreach($todos as $todo){
        if($todo["completed"] == 0){
        echo "Title: " . $todo["title"] . " Priority: ". $todo["priority"] . " Completed: " . $todo["completed"] . "<br><br><br>";
        }
        else{
           echo "Else - completed " . $todo["completed"];
//            
             array_push($completed_array, $todo);
         
        }
    }
echo "<hr>Done: <br><br>";
//var_dump($completed_array);
foreach($completed_array as $done){
     echo "Title: " .  $done["title"] . " Priority: ".  $done["priority"] . " Completed: " .  $done["completed"] . "<br><br><br>";
}


echo "<hr><br><h1>TO DO LIST</h1><br>";
echo '<a href="index.php?sortByPriority=true">Sort by priority</a>';
//$title = $completed = $priority = $username = "";
if(!empty($_GET['sortByPriority'])){
//    echo $_GET['sortByPriority'];
//      echo "Yep! <br>";
  
    echo $_GET['sortByPriority'];
      echo "Yep! <br>";
     require_once 'partials/fetch_all_todos.php';
}
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
if(!empty($_POST)){
  
require_once 'partials/insert_new_todo.php';
       echo 'Skapandet av todon lyckades!';
    header("Refresh: 5; URL=index.php");
   
}

?>

    
   