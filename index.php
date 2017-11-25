<?php
//    require_once 'partials/head.php';
//    require_once 'partials/footer.php';
    require_once 'partials/db.php';
    require_once 'partials/fetch_all_todos.php';


    foreach($todos as $todo){
      require_once 'partials/todo_row.php';
    } ?>