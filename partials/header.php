<?php
//Redirect with getting new data from database. Prevents redirect while editing todo title
if(!empty($_REQUEST) && empty($_GET['flagEdit'])  && empty($_GET['sortByPriority'])){
  header('Refresh: 3; URL=index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <title>TODO LIST</title>

</head>