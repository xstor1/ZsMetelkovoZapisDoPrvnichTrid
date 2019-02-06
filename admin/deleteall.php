<?php
require_once './restricted.php';
session_regenerate_id();
if(isset($_POST['delete']))
{
require_once '../Database/Database.php';
require_once '../Database/ZakRepository.php';
$db = new Database();
$zr = new ZakRepository($db);
$zr->deleteall();

}
header('Location: view.php');
?>
