<div id="completed">
 
<table class="table table-striped" id="done" >
    
      <thead>
           
          <tr>  <th colspan="2" class="text-center"><h2>Done:</h2></th></tr>
            <tr>
               <th>Delete</th>
               <th>Task</th>
            </tr>
      </thead>
      <tbody>
 <?php 
         //writes out all completed tasks
               
foreach($doneList as $todo){
      $id = $todo['id'];
      echo '<tr>';
      echo '<td> <form name="form_delete_from_done" method="POST" action="' . $_SERVER['PHP_SELF'] . '">  
          <input type="hidden"  name="deleteId" value="' . $id . '">
          <button type="submit" id="delete" name="deleteSubmit"  title="Delete" value="delete"><i class="fas fa-times"></i></button> </form></td> ' ;

     //  echo $todo['priority']; 
      echo   " <td><strong> <strike>"  .  $todo['title'] . " </strike></strong></td>";

      echo '</tr>';


}
?>

      </tbody>
</table>  
</div>
         