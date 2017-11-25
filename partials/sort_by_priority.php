<?php

require 'db.php';

$statement = $pdo->prepare(
  "SELECT title, completed, priority, createdBy FROM todo ORDER BY priority ASC"
);
$statement->execute();
$todos = $statement->fetchAll(PDO::FETCH_ASSOC);