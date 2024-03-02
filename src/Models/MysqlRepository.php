<?php 
namespace Mvc\Models;
use PDO;
use PDOException;

abstract class MysqlRepository
{
    private static $connet = null;

    public static function getConect($servername, $username, $password, $dbname)
    {
        if(!is_null(self::$connet)){
            return self::$connet;
        }
        self::$connet = new PDO("mysql:host={$servername};dbname={$dbname}",
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return self::$connet;
    }
}