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
$statement = $pdo->prepare("CREATE TABLE todo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(64) NOT NULL,
completed BOOLEAN,
priority INT(6) UNSIGNED NOT NULL,
createdBy VARCHAR(64) NOT NULL
)");
$statement->execute();
$todos =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
?>    
</body>
</html>