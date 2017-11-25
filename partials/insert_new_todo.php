<?php
if(isset($_POST['submit'])){
require 'db.php';

$statement = $pdo->prepare(
  "INSERT INTO `todo`(`title`, `completed`, `priority`, `createdBy`) VALUES (:title,:completed,:priority,:username)"
);
$statement->execute(array(
  ":title" => $_POST["title"],
  ":completed" => $_POST["completed"],
  ":priority" => $_POST["priority"],
  ":username" => $_POST["username"]
));
}