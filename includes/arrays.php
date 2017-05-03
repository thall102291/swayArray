<?php
    
    // gallery sub menu items
    $galleries = array(
        "Activities", 
        //"Child Care", 
        "Galleries", 
        //"Boutiques",
        "Subterrarian", 
        //"Construction", 
        "Specialty Stores", 
        "Insurance", 
        //"Banking Services", 
        "Rental Properties", 
        "Realestate", 
        "venues/events/displays"
    );
    
    // nav menu items
    $navItems = array(
        array('slug' => "index.php", 'title' => "Home"),
        array('slug' => "", 'title' => "Gallery", 'submenu' => $galleries),
        array('slug' => "pricing.php", 'title' => "Pricing"),
        array('slug' => "about.php", 'title'   => "About us")
    );

    $showCases = array(
        $galleries[0] => "https://",
        
    );
?>