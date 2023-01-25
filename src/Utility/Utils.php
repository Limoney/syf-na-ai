<?php
namespace App\Utility;
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Utils
{
    private static $TEMPLATES_PATH = __DIR__."..\\..\\..\\templates\\";
    private static $CONTROLLERS_PATH = "/src/controllers/";
    private static $CSS_PATH = "/assets/css/";
    private static $JS_PATH = "/assets/js/";
    private static $IMG_PATH = "/assets/images/";
    public static function renderTemplate(string $templateName, ?array $params = []): string
    {
        ob_start();
        extract($params);
        require self::$TEMPLATES_PATH.$templateName;
        return ob_get_clean();
    }

    public static function redirect(string $path): string
    {
        $noExt = str_replace(".php","",$path);
        return "/index.php/".$noExt;
    }

    public static function asset(string $name): string
    {
        $ext = strtolower(pathinfo($name)["extension"]);
        $js = ["js","ts"];
        $css = ["css","scss","less"];
        $img = ["png","jpg","jpeg","gif","webp"];

        if(in_array($ext,$css))
            return self::$CSS_PATH.$name;
        if(in_array($ext,$img))
            return self::$IMG_PATH.$name;
        if(in_array($ext,$js))
            return self::$JS_PATH.$name;
    }

    public static function pprint($obj): void
    {
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

}

