<?php

namespace App\Controller;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// require_once "../utils.php";

use App\Repository\LocationRepository;
use App\Repository\ProfessorRepository;
use App\Utility\Utils;

class SearchController
{
    public function index()
    {
        
        $template = Utils::renderTemplate("search.php",["" => ""]);
        echo $template;
    }
    public function search($lookfor = null)
    {
        $templateArgs = [];
        if($lookfor=="professor")
        {
            $professorRepository = new ProfessorRepository();
            $firstName = $_POST["fname"];
            $lasttName = $_POST["lname"];
            $templateArgs["professor"] = $professorRepository->findByFullName($firstName,$lasttName)[0] ?? false;
        }
        else if ($lookfor == "location")
        {
            $locationRepository = new LocationRepository();
            $templateArgs["locations"] = $locationRepository->findBy("roomNumber",$_POST["room_num"]);
        }
        $template = Utils::renderTemplate("search.php",$templateArgs);
        echo $template;
    }
}
// $template = renderTemplate("index.php",[]);
// echo "do it with autoload like a real man";
// echo $template;