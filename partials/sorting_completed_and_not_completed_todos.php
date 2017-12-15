<?php  
      //creates 2 array for not completed and completed todos
     foreach($todos as $todo){

         if($todo['completed'] == 0){   
             array_push($todoList, $todo);
         }

         elseif($todo['completed'] == 1) {
             array_push($doneList, $todo);
         }
     }