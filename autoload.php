<?php

spl_autoload_register(function ($class) {
    $file = str_replace('App\\', 'src\\', $class);
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file).'.php';
    // echo $file;
    if (file_exists($file)) {
        require $file;
        return true;
    }
    return false;
});