<?php 
namespace Mvc\Controllers\Engine;

use League\Plates\Engine;

//Classe abstrata
abstract class EnginePlates
{
    public static $instance;

    //Renderizar a view(página)
    public static function view(string $view, array $data =[]): string {
        $source = dirname(__FILE__, 4)."/views/";
        self::$instance = new Engine($source);
        return self::$instance->render($view, $data);
    }
}

