<?php
/**
 * Created by PhpStorm.
 * User: viet
 * Date: 31/07/2017
 * Time: 08:41
 */
include("connection.php");

$action = $_GET['action'];
$num = $_GET['num'];

$con = new Connection();
$connection = $con->getConnection();
function select($connection, $num)
{
    $sql = "SELECT * FROM news LIMIT $num";
    $arr = Array();
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
    } else {
        echo "error";
    }

    echo json_encode($arr);
}

if (isset($action) && isset($num)) {
    if ($action == "select") {
        select($connection, $num);
    }
}
?>
