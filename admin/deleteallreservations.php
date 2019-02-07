<?php
    require_once './restricted.php';
    session_regenerate_id();
    if(isset($_POST['delete']))
    {
        require_once '../Database/Database.php';
        require_once '../Database/CasyRepository.php';
        $db = new Database();
        $cr = new CasyRepository($db);
        $cr->DeleteAllCasy();
        header('Location: reservation.php');
    }
    
    die();?>

