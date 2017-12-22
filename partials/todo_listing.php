<div id="not_completed">

<?php  
     $_GET['sortByPriority'] = false;
    //sorts tasks by priority
   
    echo '<a href ="index.php?sortByPriority=true">Sort by priority</a> <br><br>';
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Priority</th>
      <th>Delete</th>
      <th>To do</th>
      <th>Edit</th>
       <th>Done</th>
    </tr>
  </thead>
  <tbody>
<?php
        //writes out all not completed tasks 
    foreach($todoList as $todo){
            $id = $todo['id'];
            $title = $todo['title'];
  
            $editField = '<form name="form_edit" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type=""  name="editTitle" value="' . $title . '">
                    <input type="hidden"  name="id" value="' . $id . '">

                    <button type="submit" id="edit" name="editSubmit"  title="Edit" value="edit"><i class="fas fa-check"></i></button> 
                    </form> ';
            echo '<tr>';
             echo   '<th scope="row">' . $todo['priority'] . '</th>' 
                    . " " ;
        
             echo  '<td><form name="form_delete" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="deleteId" value="' . $id . '">

                    <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> 
                    </form> </td>' ;
                
              
          
               if($flagEdit == false)  {
                    echo  " <td><strong>" . $title  . "</strong> </td>";  
                  
                    echo    '<td><form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '">  

                    <input type="hidden"  name="flagEdit" value="true">
                    <input type="hidden"  name="id" value="' . $id . '">
                    <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                    </form> </td>' ;

                     echo  '<td><form name="form_completed" method="POST" action="' . $_SERVER['PHP_SELF'] . '"> <input type="hidden" value="' . $id . '" name="id" id="title">
                      <input type="hidden" value="1" name="completed" id="completed">

                      <input type="submit" value="Done!">

                      </form> </td>' ;
                   
                   
 
               }
        
                 elseif($flagEdit == true && !empty($_GET['id'])) {
                   if($_GET['id'] == $id ){
                        echo '<td>' . $editField . "</td> ";


                    }
                    else if($_GET['id'] != $id ){
                              echo  " <td><strong>" . $title  . "</strong> </td>";  
                                echo    '<td><form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '">  

                                <input type="hidden"  name="flagEdit" value="true">
                                <input type="hidden"  name="id" value="' . $id . '">
                                <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                                </form> </td>' ;
                    }
         }
        
        
                 
                 
      
              
        
 
                  
                 
               $author =  $todo['createdBy']; 
               echo   '<td>' . $author . '</td>';
    echo '<tr>';
              echo "<hr>";

    }
      
?>   

      </tbody>
</table>    

</div> 