<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TODO LIST</title>
</head>
<body>
  
  
  <?php
$servername = "localhost";
$username="root";
$password ="";
$pdo = new PDO(
  "mysql:host=localhost;dbname=todo;charset=utf8",
  "root",
  ""
);

//handling of error messages
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//defence against simulated queries
$pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

if($pdo){
    echo "Yeee! Connected!";
}

?>
   <?php
    
    if(!empty($_POST)){

        if($pdo){
            echo "Connected!";
        }
        
$statement = $pdo->prepare(
  "INSERT INTO `todo`(`title`, `completed`, `priority`, `createdBy`) VALUES (:title,:completed,:priority,:createdBy)"
);
$statement->execute(array(
  ":title" => $_POST["title"],
  ":completed" => $_POST["completed"],
  ":priority" => $_POST["priority"],
   ":createdBy" => $_POST["createdBy"]
));

}

    ?>
    
   
    
   <h1>TODO LIST</h1>
   
   <form name="todo_form" action="index.php" method="POST">
       <label for="title">Title</label>
       <input type="text" name="title" id="title">
       <label for="completed">Completed</label>
       <input type="text" name="completed" id="completed">
       <label for="priority">Priority</label>
       <input type="text" name="priority" id="priority">
       <label for="createdBy">Author</label>
       <input type="text" name="createdBy" value="Mariia"id="createdBy">
       <input type="submit" value="submit">
   </form>
  <?php  
    if(!empty($_POST)){
   var_dump($_POST);}
     ?>
 
</body>
</html>