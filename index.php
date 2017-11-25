<?php
//    require_once 'partials/head.php';
//    require_once 'partials/footer.php';
    require_once 'partials/db.php';
    require_once 'partials/fetch_all_todos.php';
//require_once 'partials/sort_by_priority.php';

echo "<br><h1>TO DO LIST</h1><br>";


require_once 'partials/add.php';






$completed_array = array();
    foreach($todos as $todo){
        if($todo["completed"] == 0){
        echo "Title: " . $todo["title"] . " Priority: ". $todo["priority"] . " Completed: " . $todo["completed"] . 
         '<form method="GET" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">  
 
  <input type="hidden" min="0" max="1" name="done" value="1">

  <button type="submit" name="completed" value="completed" title="Mark as completed"> ✔️ </button>  
</form> '
   . 
         '<form method="GET" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">  
 
  <input type="hidden" min="0" max="1" name="del" value="delete">

  <button type="submit" name="delete"  title="Delete" value="delete">❌</button>  
</form>'
            
             . 
         '<form method="GET" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">  
 
  <input type="hidden" min="0" max="1" name="update" value="edit">

  <button type="submit" name="edit"  title="Edit" value="edit">🖊️</button>  
</form><br>';
            
            
            
        }
        else{            
             array_push($completed_array, $todo);         
        }
    }

//Priority sorting

echo '<a href="index.php?sortByPriority=true">Sort by priority</a>';
//$title = $completed = $priority = $username = "";
if(!empty($_GET['sortByPriority'])){
//    echo $_GET['sortByPriority'];
//      echo "Yep! <br>";
  
    echo $_GET['sortByPriority'];
      echo "Yep! <br>";
     require_once 'partials/fetch_all_todos.php';
}

if(!empty($_GET)){
    echo "GET IT!";
    
}

require_once 'partials/done.php';


?>
    
   