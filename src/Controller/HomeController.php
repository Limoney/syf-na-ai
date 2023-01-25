<?php

namespace App\Controller;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// require_once "../utils.php";
use App\Utility\Utils;

class HomeController
{
    public function index()
    {
        $template = Utils::renderTemplate("home.php",["" => ""]);
        echo $template;
    }
}
// $template = renderTemplate("index.php",[]);
// echo "do it with autoload like a real man";
// echo $template;