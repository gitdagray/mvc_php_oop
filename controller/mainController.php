<?php 
    // Database 
    require('config/Database.php');

    // Connect to Database 
    $database = new Database();
    $db = $database->connect();

    // Views
    include_once('view/head.php');
    include_once('view/citySearch.php');
    
    // Subcontroller
    if ($name) include_once('controller/cityController.php');

    // View
    include_once('view/foot.php');