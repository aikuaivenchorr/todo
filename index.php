<?php
    require 'partials/header.php';
?>
<body>
  
  
 
<?php
    
    
    //depending on value invariabl flagEdit shows button with pencil or editable title in input field
  require 'partials/show_title_or_edit_title.php';
    
    //initializing arrays for 2 lists of not completed and completed tasks 
    $todoList = array();
    $doneList = array();

if(!empty($_GET['sortByPriority']) && $_GET['sortByPriority'] == true){
     require 'partials/order_by_priority.php';

        }
else
{    
     require 'partials/fetch_all_todos.php';
   
}
    
    //creates 2 array for not completed and completed todos
    require 'partials/sorting_completed_and_not_completed_todos.php';
    

         
         
?>
<header>       
 
<h1><a href="index.php">TO DO LIST</a></h1>  

</header>

 <main>  
<?php
   
    require_once 'partials/add_new_task.php';
?> 
 
   
<?php
    require_once 'partials/todo_listing.php';
    
?> 
      



 
 <?php
//requires listing of completed tasks       
require 'partials/done_listing.php';
         
//requires script that processes forms       
require 'partials/actions.php';

?>  


 </main>
<?php
    require 'partials/footer.php';
?>
