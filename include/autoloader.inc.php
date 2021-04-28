<?php

spl_autoload_register('AutoLoader');

//setting up file path for importing everything once
function AutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    //if error happens, sends cleaner errer msg
    if(!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}