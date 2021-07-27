<?php


class DBConnect
{
    private static $__connect = null;
    protected static function _connect(){
        $servername ='localhost:3306';
        $username ="root";
        $password ="123456";
        $dbname ="Book";

        $_connect= self::$__connect;

        // Create connection
        if ($_connect != null) {
            // code..
            return $_connect;
        }
        $_connect = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($_connect->connect_error) {
            die("Connection failed: " . $_connect->connect_error);
        }
        return $_connect;

    }
}