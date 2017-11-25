<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To do list</title>
</head>
<body>
<?php 
require_once 'db.php';
// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("CREATE DATABASE todo");
$statement->execute();
$todos =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
?>    
</body>
</html>