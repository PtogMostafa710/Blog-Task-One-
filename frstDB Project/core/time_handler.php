<?php


function handle_time($time)
{
    return date("F-Y-d", strtotime($time));
}
