<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/dataBaseConnection.php');
function inserOrder($model, $id)
{
    $connection = getConnection();
    $query = "INSERT INTO `Order`(`Model`, `CustomerID`) VALUES ('$model','$id');";
    mysqli_query($connection, $query);
}

function delete ($model)
{
    $connection = getConnection();
    $query = "DELETE FROM `Product` WHERE Model = '$model';";
    $connection = getConnection();
}
