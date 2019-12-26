<?php

namespace src\Model;

class Connection
{
    private static $instance;

    public static function getConnection()
    {
        $serverName = 'den1.mysql1.gear.host';
        $userName = 'phpcrud';
        $password = '';
        $dbName = 'phpcrud';

        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:$serverName; dbname=$dbName", $userName, $password);
        } 
        return self::$instance;
        
    }
}
