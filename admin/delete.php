<?php
require_once './restricted.php';
session_regenerate_id();
if(isset($_POST['id'])&&isset($_POST['delete']))
{   
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
$zr->deleteZak($_POST['id']);
header('Location: view.php');
}

die();?>

