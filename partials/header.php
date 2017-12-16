<?php
//Redirect with getting new data from database. Prevents redirect while editing todo title
if(!empty($_REQUEST) && empty($_GET['flagEdit']) && empty($_GET['sortByPriority'])){
  header('Refresh: 7; URL=index.php');
   // header('Location:' . $_SERVER['PHP_SELF']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
     <title>TODO LIST</title>
     
     <style>
         form{
             display: inline-block;
         }
         
         button, input[type='submit']{
             cursor: pointer;
         }
       
    
    </style>
</head>