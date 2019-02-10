<?php
    require_once './restricted.php';
    session_regenerate_id();
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename=export.csv;');
    require_once '../Database/Database.php';
    require_once '../Database/ZakRepository.php';
    require_once '../Database/CasyRepository.php';
    $db = new Database();
    $zr = new ZakRepository($db);
    $cr = new CasyRepository($db);
    $zak = $zr->getZaky ();
    echo "Jmeno;Příjmení;Datum narození;Bydliště dítěte;Spádová škola;Datum příchodu\r\n";
    foreach ($zak as $line)
    {
        $datmnull="";
        if(empty($cr->getCasyById ($line['IdCas'])))
        {
            $datmnull="vybrané datum bylo smazáno";
            echo $line['jmeno'].";".$line['prijmeni'].";".$datumnar->format ('d.m.Y').";".$line['ulice']." ".$line['obec']." ".$line['psc'].";".$line['spadovazs'].";".$datmnull."\r\n";
        }
        else {
            $datetime = new DateTime($cr->getCasyById ($line['IdCas'])['Datum']);
            $datumnar = new DateTime($line['datumnar']);
            echo $line['jmeno'].";".$line['prijmeni'].";".$datumnar->format ('d.m.Y').";".$line['ulice']." ".$line['obec']." ".$line['psc'].";".$line['spadovazs'].";". $datetime->format ('d.m.Y H:i')."\r\n";
        }
      
    }