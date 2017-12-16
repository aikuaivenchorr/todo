 <h2>Done:</h2>
 
<div id="completed">

 <?php 
         //writes out all completed tasks
               
            foreach($doneList as $todo){
                  $id = $todo['id'];
                echo '<form name="form_delete_from_done" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  
 
                  <input type="hidden"  name="deleteId" value="' . $id . '">

                  <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> </form> ' ;
                    
                //  echo $todo['priority']; 
                  echo   " <strong> <strike>"  .  $todo['title'] . " </strike></strong> ";
                 //   echo ' <i class="fas fa-check"></i> ';
                // echo  $todo['createdBy'];
                echo "<hr>";

            }
?>
</div>
         