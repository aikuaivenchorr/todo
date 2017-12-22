<!--  Adds new task to do -->
   <form id="add_todo" name="todo_form" action="index.php" method="POST">
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