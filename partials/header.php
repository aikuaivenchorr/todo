<?php
//Redirect with getting new data from database. Prevents redirect while editing todo title
if(!empty($_REQUEST) && empty($_GET['flagEdit']) && empty($_GET['sortBEdit'])  && empty($_GET['sortByPriority'])){
  header('Refresh: 2; URL=index.php');
   // header('Location:' . $_SERVER['PHP_SELF']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
     <title>TODO LIST</title>
     
     <style>
         
         
         h1 {
             text-align: center;
            font-size: 4em;
            line-height: 1em;
             width: 100%;
             padding: 2em;
            background-color: cadetblue;
         }
         h1 a{
             color: azure;
         }
         h1 a:hover{
            color: firebrick;
         }
         
         form{
             display: inline-block;
         }
         
         #add_todo{
             margin: 1em;
         }
         
         #add_todo legend{
             padding: 1em;
             font-size: 2em;
             font-weight: 500;
             color: darkblue
            
         }
         
         button, input[type='submit']{
             cursor: pointer;
             color: firebrick;
         }
         

 a {
    color: firebrick;
}
         body{
             background-color: bisque;
             margin: 0;
          
         }
         
         main{
             padding: 0 3em;
         }
 
         
        th{
       
            font-size: 1.4em;
            color: azure;
         
            background-color: cadetblue;
         }
         
         td{
             color: cadetblue;
             font-size: 1.2em;
       
       }
         
         #completed  th{
 
            color: azure;
            background-color: dimgrey;
         }
         
        #completed td{
               color: forestgreen;
           }
         
        footer{
            width: 100%;
             text-align: center;
         }
         
         p.footer{
             display: inline-block;
             width: 100%;
             padding: 3em;
             height: 4em;
             line-height: 2em;
             font-size: 1.2em;
             background-color: cadetblue;
             text-decoration: underline;
         }
    </style>
</head>