<?php
require_once 'partials/db.php';
require_once 'partials/fetch_all_todos.php';

echo "<br><h1>TO DO LIST</h1><br>";

require_once 'partials/add.php';


$completed_array = array();
    foreach($todos as $todo){
        
        if($todo["completed"] == 0){
            $id = $todo["id"];
            
            echo "Title: " . $todo["title"] . " Priority: ". $todo["priority"] . " Completed: " . $todo["completed"] . 
                '<form method="GET" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">  

                <input type="hidden" min="0" max="1" name="done" value="1">

                <button type="submit" name="completed" value="completed" title="Mark as completed"> ✔️ </button>  
                </form> '
                . 
                '<form method="GET" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">  

                <input type="hidden"  name="delete" value="' . $id . '">

                <button type="submit" name="deleteSubmit"  title="Delete" value="delete">❌</button>  
                </form><br>
                <a href="index.php?id=' . $id . '&deleteSubmit=delete">Delete</a> '

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




if(!empty($_GET['delete'] == $id) && $_GET['deleteSubmit'] == 'delete'){
    echo "DUMP ";
    var_dump($_GET['delete']);
    require_once 'partials/delete.php';
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
