<?php

include("core/env.php");


function connection()
{
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", "" . username . "", "");
    return $conn;
}

function get_data($table, $limit = '', ...$attr)
{
    $atr = implode(',', $attr);

    
    $get_data = "SELECT $atr FROM `$table` $limit";

    $stmt = connection()->query($get_data);

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

function show_post($pages)
{
    if ($pages['post'] && isset($_GET['id'])) {
        $get_post = "SELECT * FROM `posts` WHERE `id` = {$_GET['id']}";

        $stmt = connection()->query($get_post);

        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        return $post;
    }

    return [];
}
