<div id="not_completed">

<?php  
     $_GET['sortByPriority'] = false;
    
 
?>
<table class="table table-striped" id="todo" >
    <thead>
        <tr>  
            <th colspan="6"><h2>What to do:</h2></th>
        </tr>
        <tr>
            <th id="priority">
            <?php 
            //sorts tasks by priority
            echo '<a href ="index.php?sortByPriority=true#priority">Sort by priority</a> <br>'; 
            ?>
            Priority   
            </th>
            <th>Delete</th>
            <th>To do</th>
            <th>Edit</th>
            <th>Done</th>
            <th>Whose task</th>
         </tr>
    </thead>
    <tbody>
<?php
  //shows list of todos according to priority if link "Sort by priority" was pressed
    if(!empty($_GET['sortByPriority']) && $_GET['sortByPriority'] == true){
        require 'partials/order_by_priority.php';
    }
    else {    
         require 'partials/fetch_all_todos.php';
    }
      
   //writes out all not completed tasks 
    foreach($todoList as $todo){
        $id = $todo['id'];
        $title = $todo['title'];
        //this input field shows after "Edit" button was pressed and confirmes changes in todo's title (writes changes into database)
        $editField = '<form id="edit" name="form_edit" method="POST" action="' . $_SERVER['PHP_SELF'] . '#edit">  

        <input type=""  name="editTitle" value="' . $title . '">
        <input type="hidden"  name="id" value="' . $id . '">

        <button type="submit" id="edit" name="editSubmit"  title="Edit" value="edit"><i class="fas fa-check"></i></button> 
        </form> ';
         echo '<tr>';
        
        //shows priority 
         echo   '<td>' . $todo['priority'] . '</td>' ;
        //shows delete button
         echo  '<td><form name="form_delete" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  

                <input type="hidden"  name="deleteId" value="' . $id . '">

                <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> 
                </form> </td>' ;


           //shows edit button - choice between 2 states  when edit button is pressed and when not pressed
           if($flagEdit == false)  {
                echo  " <td><strong>" . $title  . "</strong> </td>";  

                echo    '<td><form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '#edit">  

                <input type="hidden"  name="flagEdit" value="true">
                <input type="hidden"  name="id" value="' . $id . '">
                <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                </form> </td>' ;

           }
             
             //shows relevant title for editing
             elseif($flagEdit == true && !empty($_GET['id'])) {
                   if($_GET['id'] == $id ){
                        echo '<td>' . $editField . "</td> ";
                        echo '<td>' . '<- edit' . "</td> ";
                    }

                    elseif($_GET['id'] != $id ){
                        echo  " <td><strong>" . $title  . "</strong> </td>";  
                        echo    '<td><form name="form_editFlag" method="GET" action="' . $_SERVER['PHP_SELF'] . '#edit">  
                        <input type="hidden"  name="flagEdit" value="true">
                        <input type="hidden"  name="id" value="' . $id . '">
                        <button type="submit" id="editFlagSubmit" name="flagSubmit"  title="Edit" value="editFlag"><i class="fas fa-pencil-alt"></i></button> 
                        </form> </td>' ;
                    }
            }
            //shows "Done" button
            echo  '<td><form name="form_completed" method="POST" action="' . $_SERVER['PHP_SELF'] . '"> <input type="hidden" value="' . $id . '" name="id" id="title">
            <input type="hidden" value="1" name="completed" id="completed">
            <input type="submit" value="Done!">
            </form> </td>' ;
             
            
            $author =  $todo['createdBy']; 
            //shows author of the todo
            echo   "<td> ". $author . "'s</td>";
        
            echo '</tr>';         
    }
      
?>   

    </tbody>
</table>    

</div> 