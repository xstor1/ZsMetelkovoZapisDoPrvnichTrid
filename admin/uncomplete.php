<?php
    require_once './restricted.php';
    session_regenerate_id();
if (isset($_GET['id'])) {
    require_once ".//..//Database//Database.php";
    require_once ".//..//Database//ZakRepository.php";
    $db = new Database();
    $zr = new ZakRepository($db);
    $zr->uncompleteById($_GET['id']);
    echo"OK";
}
die();