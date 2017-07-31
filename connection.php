<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 31/07/2017
 * Time: 08:27
 */
include("config.php");

class Connection
{
    var $connect;

    function __construct()
    {
        $this->connect = mysqli_connect(host, username, password, database) or die("error");
    }

    public function getConnection()
    {
        return $this->connect;
    }
}

?>