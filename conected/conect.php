<?php
$host = 'localhost';
$db = 'to_do_list';
$user = 'root';
$pas = 'tac25879';

class conect
{

    public static function server($host, $db, $user, $pas)
    {
        $dns = "mysql: host=$host; dbname=$db; charset = UTF8";

        try {
            $pdo = new PDO($dns, $user, $pas);
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            return new PDO($dns, $user, $pas, $option);
        } catch (PDOException $e) {
            die($e->getmessage());
        }
    }
}
return $save =  conect::server($host, $db, $user, $pas);
