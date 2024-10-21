<?php


function get_pages($pages) {
    if (isset($_GET['page'])) {
    
        if (isset($pages[$_GET['page']])) {
            $page = $pages[$_GET['page']];
    
            include($page);
        }
        
        else {
            include("./view/404.php");
        }
    } 
    
    else {
        include './view/home.php';
    }
    
}