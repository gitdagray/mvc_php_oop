<?php 
    // Model 
    require('model/City.php');

    // Instantiate model 
    // $city is an object based on City class
    $city = new City($db);
    
    // Set name property of $city object
    $city->name = $name; 
    
    // Call read method of $city object
    // Store resulting data in $cities
    $cities = $city->read();

    // Include View
    include('view/citiesList.php');