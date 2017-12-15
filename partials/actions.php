<?php
$notification = "";


if(!empty($_POST)){
    if(empty($_POST['completed']) && empty($_POST['deleteId'])  && empty($_POST['editTitle'])  ){
        require 'partials/insert_new_todo.php';
   
       if($statement){
          $published = "<br> Published!";
          $notification = $published;
           
        }
    
    }

    elseif(!empty($_POST["completed"]) && $_POST["completed"] == '1'){
        require 'partials/check_as_done.php';
        
        if($statement){
           $done = "<br> Done!";
           $notification =  $done;
          
        }
    }
    
    elseif(!empty($_POST['deleteId'])){
        require 'partials/delete_todo.php';
        
        if($statement){
           $deleted = "<br> Deleted!";
           $notification = $deleted;
         
        }
    }
    
        elseif(!empty($_POST['editTitle'])){
        require 'partials/edit_todo.php';
        
        if($statement){
           $edited = "<br> Edited!";
           $notification = $edited;
         
        }
    }

echo $notification;

}