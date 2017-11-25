<?php 
echo "<hr><br><h1>ADD</h1><br>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">  
  Title: <input type="text" name="title" value="" required>
  <br><br>
  <input type="hidden" min="0" max="1" name="completed" value="0" required>
  <br><br>
  Priority: <input type="number" min="1" name="priority" value="" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<br><hr><br>

<?php 
if(!empty($_POST)){
  
require_once 'partials/insert_new_todo.php';
    echo 'Skapandet av todon lyckades! <br>';
    header("Refresh: 5; URL=index.php");
   
}

?>