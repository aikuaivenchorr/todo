<?php
if(!empty($_REQUEST)){
   header('Refresh: 3; URL=index.php');
   // header('Location:' . $_SERVER['PHP_SELF']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
     <title>TODO LIST</title>
     
     <style>
         form{
             display: inline-block;
         }
       
    
    </style>
</head>
<body>
  
  
 
<?php
    $flagEdit = false;
    if(!empty($_GET['flagEdit'])){
       $flagEdit  = $_GET['flagEdit'];
    if($flagEdit == true){
         $flagEdit = true;
    }
    else{
      $flagEdit = false;
    }
    }
    $todoList = array();
    $doneList = array();

?>
    
   
    
   <h1>TO DO LIST</h1>
   
  <h2>What to do: </h2>
   <form name="todo_form" action="index.php" method="POST">
        <fieldset>
            <legend>Add new todo:</legend>
               <label for="title">Title</label>
               <input type="text" name="title" id="title">
               
               <label for="priority">Priority</label>
               <input type="number" name="priority" id="priority">
               <label for="createdBy">Author</label>
               <input type="text" name="createdBy" value="Mariia"id="createdBy">
               <input type="submit" value="submit">
       </fieldset>
   </form>
   <br><br>
   
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
    
    foreach($todoList as $todo){
            $id = $todo['id'];
            $title = $todo['title'];
           // $editButtonCheck = '<i class="fas fa-check"></i>';
            $editField = '<form name="form_edit" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type=""  name="editTitle" value="' . $title . '">
                    <input type="hidden"  name="id" value="' . $id . '">

                    <button type="submit" id="edit" name="editSubmit"  title="Edit" value="edit"><i class="fas fa-check"></i></button> 
                    </form> ';
             echo  '<form name="form_delete" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="deleteId" value="' . $id . '">

                    <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> 
                    </form> ' 
                 
                    . $todo['priority'] 
                    . " " ;
                 
               if($flagEdit == false)  {
                    echo  " <strong>" . $title  . "</strong> ";
                    echo    '<form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="flagEdit" value="true">

                    <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                    </form> ' ;
               }
        else{
            echo $editField . " ";
        }
                 
                  
                 
                  echo  $todo['createdBy'] . 
                

                  '<form name="form_completed" method="POST" action="' . $_SERVER['PHP_SELF'] . '"> <input type="hidden" value="' . $id . '" name="id" id="title">
                  <input type="hidden" value="1" name="completed" id="completed">

                  <input type="submit" value="Done!">

                  </form> ' 

                . "<hr>";

    }
?>       

</div> 

 <hr>
 <h2>Done:</h2>
 
<div id="completed">

 <?php 
         //writes out all completed tasks
               
            foreach($doneList as $todo){
                  $id = $todo['id'];
                echo '<form name="form_delete_from_done" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  
 
                  <input type="hidden"  name="deleteId" value="' . $id . '">

                  <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> </form> ' 
                    
                  . $todo['priority'] . " <strong>" 
                  .  $todo['title'] . "</strong> " . 
                    ' <i class="fas fa-check"></i> '
                  .  $todo['createdBy'] . "<hr>";

            }
         
         
//requires script that processes forms       
require 'partials/actions.php';

?>  

</div>
 
</body>
</html>