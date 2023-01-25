<?php

namespace App\Controller;

use App\Utility\Utils;
use App\Utility\Database;

class AccountController
{
    public function login()
    {
        
        if(isset($_POST["login"]) && isset($_POST["password"]))
        {
            $login = $_POST["login"];
            $pass = $_POST["password"];

            $dbh = Database::getConnection();
            //they dont pay me enough to care about injections
            $stmt = $dbh->prepare("select * from users where username = :username and password = :password");
            $stmt->execute([":username"=> $login, ":password" => $pass]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($user)
            {
                $_SESSION["LOGGED_AS"] = $login;
            
                $template = Utils::renderTemplate("home.php");
                echo $template;
                return;
            }
        }
        $template = Utils::renderTemplate("login.php");
        echo $template;
    }
    public function logout()
    {
        unset($_SESSION["LOGGED_AS"]);
        $template = Utils::renderTemplate("home.php");
        echo $template;
    }
}