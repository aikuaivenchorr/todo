<?php

//creates notification of actions 

$notification = "";


if(!empty($_POST)){
    if(empty($_POST['completed']) && empty($_POST['deleteId'])  && empty($_POST['editTitle'])  ){
       $title = $_POST['title'];
        $doubleTitle = false;
        foreach($todoList as $todo){
                if($todo['title'] ==  $title ){

                     $notification = "Can't add 2 similar titles! Change name of todo, please!";
                     $doubleTitle = true;
                     break;
                }

            }
        
            if($doubleTitle != true){
              require 'insert_new_todo.php';
                  if($statement){
                      $published = "Published!";
                      $notification = $published;
                    }
        }

    
    }

    elseif(!empty($_POST["completed"]) && $_POST["completed"] == '1'){
        require 'check_as_done.php';
        
        if($statement){
           $done = "Done!";
           $notification =  $done;
          
        }
    }
    
    elseif(!empty($_POST['deleteId'])){
        require 'delete_todo.php';
        
        if($statement){
           $deleted = "Deleted!";
           $notification = $deleted;
         
        }
    }
    
        elseif(!empty($_POST['editTitle'])){
        require 'edit_todo.php';
        
        if($statement){
           $edited = "Edited!";
           $notification = $edited;
         
        }
    }
// shows notification according to relevant event (published, edited, done or deleted)

echo '<div class="notification"><p>' . $notification . '</p></div>';

}