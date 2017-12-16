<div id="not_completed">

<?php  
    
    //writes out all not completed tasks
    $_GET['sortByPriority'] = false;
    echo '<a href ="index.php?sortByPriority=true">Sort by priority</a> <br><br>';

        
        
    foreach($todoList as $todo){
            $id = $todo['id'];
            $title = $todo['title'];
           
            $editField = '<form name="form_edit" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type=""  name="editTitle" value="' . $title . '">
                    <input type="hidden"  name="id" value="' . $id . '">

                    <button type="submit" id="edit" name="editSubmit"  title="Edit" value="edit"><i class="fas fa-check"></i></button> 
                    </form> ';
        
             echo    $todo['priority']
                    . " " ;
        
             echo  '<form name="form_delete" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="deleteId" value="' . $id . '">

                    <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> 
                    </form> ' ;
                echo  " <strong>" . $title  . "</strong> ";   
              
          
               if($flagEdit == false)  {
                  
                    echo    '<form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="flagEdit" value="true">
                    <input type="hidden"  name="id" value="' . $id . '">
                    <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                    </form> ' ;

                 echo  '<form name="form_completed" method="POST" action="' . $_SERVER['PHP_SELF'] . '"> <input type="hidden" value="' . $id . '" name="id" id="title">
                  <input type="hidden" value="1" name="completed" id="completed">

                  <input type="submit" value="Done!">

                  </form> ' ;
                   
                   
 
               }
           if($flagEdit == true && !empty($_GET['id']) && $_GET['id'] == $id ){
                echo $editField . " ";
              

            }
        else if($flagEdit == true && !empty($_GET['id']) && $_GET['id'] != $id ){
                               echo    '<form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="flagEdit" value="true">
                    <input type="hidden"  name="id" value="' . $id . '">
                    <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                    </form> ' ;
        }
        
        
                 
                 
      
              
        
 
                  
                 
               $author =  $todo['createdBy']; 
               echo    $author 
   . " " ;

              echo "<hr>";

    }
?>       

</div> 