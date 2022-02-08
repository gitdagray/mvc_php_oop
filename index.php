<?php 
    // Get Parameters 
    $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
    
    require('controller/mainController.php');