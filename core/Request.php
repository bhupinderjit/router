<?php

class Request
{
    public static function uri()
    {
        
        //echo '<pre>' . print_r($_SERVER, TRUE) . '</pre>';
        // var_dump($_SERVER['REQUEST_URI']);
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}