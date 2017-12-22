<?php
$notification = "";


if(!empty($_POST)){
    if(empty($_POST['completed']) && empty($_POST['deleteId'])  && empty($_POST['editTitle'])  ){
       $title = $_POST['title'];
        $doubleTitle = false;
        foreach($todoList as $todo){
                if($todo['title'] ==  $title ){

                     echo "Can't add 2 similar titles! Change name of todo, please!";
                     $doubleTitle = true;
                    break;
                }

            }
        
            if($doubleTitle != true){
              require 'insert_new_todo.php';
                  if($statement){
                      $published = "<br> Published!";
                      $notification = $published;
                    }
        }

    
    }

    elseif(!empty($_POST["completed"]) && $_POST["completed"] == '1'){
        require 'check_as_done.php';
        
        if($statement){
           $done = "<br> Done!";
           $notification =  $done;
          
        }
    }
    
    elseif(!empty($_POST['deleteId'])){
        require 'delete_todo.php';
        
        if($statement){
           $deleted = "<br> Deleted!";
           $notification = $deleted;
         
        }
    }
    
        elseif(!empty($_POST['editTitle'])){
        require 'edit_todo.php';
        
        if($statement){
           $edited = "<br> Edited!";
           $notification = $edited;
         
        }
    }

echo '<div class="notification">' . $notification . '</div>';

}