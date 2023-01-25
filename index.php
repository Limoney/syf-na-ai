<?php
session_start();
require_once "autoload.php";
use App\Controller\HomeController;
use App\Controller\MapController;
use App\Controller\AccountController;
use App\Controller\SearchController;
use App\Utility\Utils;

/*
             ___     _                                                _              _                                                                          ___     _  _              __                    _  _  
    o O O   | _ \   | |     ___    __ _     ___     ___      o O O   | |     ___    | |_      o O O  _  _     ___      o O O  _  _     ___     ___      o O O  / __|   | || |  _ __      / _|   ___    _ _     | || | 
   o        |  _/   | |    / -_)  / _` |   (_-<    / -_)    o        | |    / -_)   |  _|    o      | +| |   (_-<     o      | +| |   (_-<    / -_)    o       \__ \    \_, | | '  \    |  _|  / _ \  | ' \     \_, | 
  TS__[O]  _|_|_   _|_|_   \___|  \__,_|   /__/_   \___|   TS__[O]  _|_|_   \___|   _\__|   TS__[O]  \_,_|   /__/_   TS__[O]  \_,_|   /__/_   \___|   TS__[O]  |___/   _|__/  |_|_|_|  _|_|_   \___/  |_||_|   _|__/  
 {======|_| """ |_|"""""|_|"""""|_|"""""|_|"""""|_|"""""| {======|_|"""""|_|"""""|_|"""""| {======|_|"""""|_|"""""| {======|_|"""""|_|"""""|_|"""""| {======|_|"""""|_| """"|_|"""""|_|"""""|_|"""""|_|"""""|_| """"| 
./o--000'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-' 
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// use App\Repository\ScheduleRepository;
// use App\Utility\Utils;
// $repo = new ScheduleRepository();
// Utils::pprint($repo->findAll());
// die();


$pathData = parse_url($_SERVER['REQUEST_URI']);
$route = $pathData["path"];
$query = $pathData["query"] ?? [];
$route = str_replace("/index.php","",$route);
//print_r($pathData);
// echo $path;
switch($route)
{
    case "":
    case "/":
    case "/home":
        $controller = new HomeController();
        $controller->index();
        break;
    case "/map":
        $controller = new MapController();
        if(empty($query))
            $controller->index();
        else
            $argument;
            parse_str($query,$argument);
            if(isset($argument["building"]))
                $controller->viewBuilding($argument["building"]);
        break;
    case "/account":
        $controller = new AccountController();
        $argument;
        parse_str($query,$argument);
        if($argument["action"] == "login")
            $controller->login();
        if($argument["action"] == "logout")
            $controller->logout();
        break;
    case "/admin":
        $template = Utils::renderTemplate("admin.php",["" => ""]);
        echo $template;
        break;
    case "/search":
        $controller = new SearchController();
        if(empty($query))
            $controller->index();
        else
            $argument;
            parse_str($query,$argument);
            if(isset($argument["lookfor"]))
                $controller->search($argument["lookfor"]);
        break;
}
die();