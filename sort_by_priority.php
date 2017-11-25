<?php 
require_once 'partials/db.php';
// fetch all the blogposts that will order the posts by date
$statement = $pdo->prepare("SELECT * FROM todo ORDER BY priority desc");
$statement->execute();
$blogposts =  $statement ->fetchAll(PDO::FETCH_ASSOC); 
?>