<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'homestead');
define('PASSWORD', 'secret');
define('DB', 'g5');


$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB) or die();


function selectAll($conn, $table)
{
    $query = "SELECT * FROM $table";
    $db = mysqli_query($conn, $query);
    $results = [];
    while($row = mysqli_fetch_assoc($db)) {
        $results[] = $row;
    }

    return $results;
}

function selectOne($conn, $table, $id)
{
    $query = "SELECT * FROM $table WHERE id=$id";
    $db = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($db);
    return $result;
}

function deleteRow($conn, $table, $id)
{
    $query = "DELETE FROM $table WHERE id=$id";
    $db = mysqli_query($conn, $query);
    return $db;
}

function insertRow($conn, $table, $data)
{
    $keys = '';
    $values = '';
    foreach($data as $key => $value)
    {
        $keys .= $key. ', ';
        $values .= "'$value', ";
    }

    $keys = substr($keys, 0, -2);
    $values = substr($values, 0, -2);


    $query = "INSERT INTO $table ($keys) VALUES ($values)";
    $db = mysqli_query($conn, $query);
    return $db;
}


function updateRow($conn, $table, $data, $id)
{
    $set = '';
    foreach($data as $key => $value) {
        $set .= "$key='$value', ";
    }

    $set = substr($set, 0, -2);

    $query = "UPDATE $table SET $set WHERE id=$id";
    $db = mysqli_query($conn, $query);
    return $db;
}