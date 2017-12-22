<?php

echo "<hr><h2>🏅 Done: </h2><br><br>";

foreach($completed_array as $done){
     echo "Title: " .  $done["title"] . " Priority: ".  $done["priority"] . " Completed: " .  $done["completed"] . "      <br><br><br>";
}

?>