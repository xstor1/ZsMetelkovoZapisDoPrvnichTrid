<?php
require_once './restricted.php';
session_regenerate_id();
require_once '../Database/Database.php';
require_once '../Database/CasyRepository.php';
$db = new Database();
$casRepository = new CasyRepository($db);
if(isset($_POST['id'],$_POST['datetime'], $_POST['pocet']))
{

$casRepository->UpdateCas ($_POST['id'],$_POST['datetime'], $_POST['pocet']);
}
    header('Location: reservation.php');
die();

?>