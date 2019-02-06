<?php
   
    if(isset($_POST['id'])) {
        require_once '../Database/Database.php';
        require_once '../Database/ZakRepository.php';
        require_once '../Database/CasyRepository.php';
        $db = new Database();
        $zr = new ZakRepository($db);
        $cr = new CasyRepository($db);
        $count= $zr->getCountOfZakyByIdCas ($_POST['id']);
       $pocet= $cr->getCasyById ($_POST['id']);
      $volno= $pocet['Pocet']- $count['count'];
        echo $volno;
    }
    