<?php
function dbconnect()
{
    static $connect = NULL;
    if($connect === NULL)
    {
        $connect = mysqli_connect('localhost', 'root', '', 'site_communautaire');
        if(!$connect)
        {
            die('Erreur de connexion a la database : '.mysqli_connect_error());
        }
        mysqli_set_charset($connect, 'utf8mb4');
    }
    return $connect;
}

?>