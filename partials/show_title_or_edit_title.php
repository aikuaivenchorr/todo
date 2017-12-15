    <?php
    
    //depending on value invariabl flagEdit shows button with pencil or editable title in input field
    $flagEdit = false;
    
    //if "edit" button (with pencil symbol) was clicked - $flagEdit get value true through GET request
    if(!empty($_GET['flagEdit'])){
        
       $flagEdit  = $_GET['flagEdit'];
        
        if($flagEdit == true){
             $flagEdit = true;
        }
        else{
          $flagEdit = false;
        }
    }