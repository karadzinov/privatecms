<?php

require_once "functions.php";

$id = $_GET['id'];

$blog = selectOne($conn, 'blogs', $id);

$path = $_SERVER['DOCUMENT_ROOT'].'/uploads/'. $blog['image'];
unlink($path);

deleteRow($conn, 'blogs', $id);

header('Location: /blogs.php');