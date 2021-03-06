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
    echo "Jmeno;Příjmení;Datum narození;Bydliště dítěte;Spádová škola;Jméno Sourozence;Příjmení sourozence;Třída sourozence;Datum příchodu;Čas příchodu\r\n";
    foreach ($zak as $line)
    {
        $datmnull="";
        if(empty($cr->getCasyById ($line['IdCas'])))
        {
            $datmnull="vybrané datum bylo smazáno";
            echo $line['jmeno'].";".$line['prijmeni'].";".$datumnar->format ('d.m.Y').";".$line['ulice']." ".$line['obec']." ".$line['psc'].";".$line['spadovazs'].";".$line['jmenosourozence'].";".$line['prijmenisourozence'].";".$line['tridasourozence'].";".$datmnull.";Vybraný čas byl smazán\r\n";
        }
        else {
            $datetime = new DateTime($cr->getCasyById ($line['IdCas'])['Datum']);
            $datumnar = new DateTime($line['datumnar']);
            echo $line['jmeno'].";".$line['prijmeni'].";".$datumnar->format ('d.m.Y').";".$line['ulice']." ".$line['obec']." ".$line['psc'].";".$line['spadovazs'].";".$line['jmenosourozence'].";".$line['prijmenisourozence'].";".$line['tridasourozence'].";". $datetime->format ('d.m.Y').";".$datetime->format ("H:i")."\r\n";
        }
      
    }