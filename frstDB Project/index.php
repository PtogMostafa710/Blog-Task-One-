<?php

include './inc/header.php';

include("./core/sql_handler.php");

include './core/get_pages.php';

include './core/time_handler.php';

$pages = [
    "home" => "./view/home.php",
    "about" => "./view/about.php",
    "contact" => "./view/contact.php",
    "post" => "./view/post.php"
];



//* fn ---> to get current page;  
get_pages($pages);


include './inc/footer.php';
