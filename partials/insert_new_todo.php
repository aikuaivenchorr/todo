<?php
if(isset($_POST['submit'])){
require 'db.php';

$statement = $pdo->prepare(
  "INSERT INTO `todo`(`title`, `completed`, `priority`) VALUES (:title,:completed,:priority)"
);
$statement->execute(array(
  ":title" => $_POST["title"],
  ":completed" => $_POST["completed"],
  ":priority" => $_POST["priority"]
));


}
