<?php
    
    class ZakRepository
    {
        
        private $db;
        
        function __construct (Database $db)
        {
            $this->db = $db;
        }
        
        function deleteall ()
        {
            $sql = 'DELETE FROM tbzak';
            return $this->db->delete ($sql, []);
        }
        
        function getZak ($id)
        {
            $sql = 'SELECT * FROM tbzak where id=:id ';
            
            return $this->db->selectOne ($sql, [':id' => $id]);
        }
        
        function getZaky ()
        {
            $sql = 'SELECT * FROM tbzak order by id desc ';
            
            return $this->db->selectAll ($sql);
        }
        
        function getZakbyRodne ($prijmeni)
        {
            $sql = 'Select * from tbzak where prijmeni=:prijmeni ';
            return $this->db->selectAll ($sql, [':prijmeni' => $prijmeni]);
        }
        
        function completeById ($id)
        {
            $sql = "update tbzak set completed=1 where id =:id";
            return $this->db->update ($sql, [":id" => $id]);
        }
        
        function uncompleteById ($id)
        {
            $sql = "update tbzak set completed=0 where id =:id";
            return $this->db->update ($sql, [":id" => $id]);
        }
        
        function updateZak ($id,$idCas, $jmeno, $prijmeni, $pohlavi, $datumnar, $ulice, $obec,  $psc,$spadovazs,$typz, $jmenoz, $prijmeniz, $ulicez, $obecz, $pscz, $telefon, $email, $obeczdor,$ulicezdor,$psczdor ,$typz2, $jmenoz2, $prijmeniz2, $ulicez2, $obecz2, $pscz2, $telefonz2,$emailz2,$obecz2dor,$ulicez2dor,$pscz2dor)
        {
            $datumnar = new DateTime($datumnar);
            $datumnar=$datumnar->format ("Y.m.d");
            
            $sql = 'UPDATE tbzak '
                . 'SET idCas=:idCas, jmeno = :jmeno, prijmeni = :prijmeni, pohlavi = :pohlavi,datumnar=:datumnar, '
                . 'ulice=:ulice,obec=:obec, psc=:psc, spadovazs=:spadovazs, typz=:typz, '
                . ' jmenoz=:jmenoz,'
                . ' prijmeniz=:prijmeniz, ulicez=:ulicez, obecz=:obecz, pscz=:pscz, telefon=:telefon, email=:email,obeczdor=:obeczdor,ulicezdor=:ulicezdor,psczdor=:psczdor, typz2=:typz2, jmenoz2=:jmenoz2,'
                . ' prijmeniz2=:prijmeniz2, ulicez2=:ulicez2, obecz2=:obecz2, pscz2=:pscz2,  telefonz2=:telefonz2,emailz2=:emailz2,obecz2dor=:obecz2dor,ulicez2dor=:ulicez2dor,pscz2dor=:pscz2dor ,completed=0 '
                . 'WHERE id = :id';
            
            return $this->db->update ($sql, [
                ':id' => $id,
                ':idCas'=>$idCas,
                ':jmeno' => $jmeno,
                ':prijmeni' => $prijmeni,
                ':pohlavi' => $pohlavi,
                ':datumnar' => $datumnar,
                ':ulice' => $ulice,
                ':obec' => $obec,
                ':psc' => $psc,
                ':spadovazs'=>$spadovazs,
                ':jmenoz' => $jmenoz,
                ':prijmeniz' => $prijmeniz,
                ':ulicez' => $ulicez,
                ':obecz' => $obecz,
                ':pscz' => $pscz,
                ':telefon' => $telefon,
                ':email'=>$email,
                ':obeczdor'=>$obeczdor,
                ':ulicezdor'=>$ulicezdor,
                ':psczdor'=>$psczdor,
                ':jmenoz2' => $jmenoz2,
                ':prijmeniz2' => $prijmeniz2,
                ':ulicez2' => $ulicez2,
                ':obecz2' => $obecz2,
                ':pscz2' => $pscz2,
                ':telefonz2' => $telefonz2,
                ':emailz2'=>$emailz2,
                ':obecz2dor'=>$obecz2dor,
                ':ulicez2dor'=>$ulicez2dor,
                ':pscz2dor'=>$pscz2dor,
                ':typz'=>$typz,
                ':typz2'=>$typz2
               
            ]);
        }
        
        function deleteZak ($id)
        {
            $sql = "DELETE FROM tbzak WHERE id= :id";
            return $this->db->delete ($sql, [':id' => $id]);
        }
        
        function addZak ($idCas, $jmeno, $prijmeni, $pohlavi, $datumnar, $ulice, $obec, $psc, $spadovazs,$typz, $jmenoz, $prijmeniz, $ulicez, $obecz, $pscz, $telefon, $email, $obeczdor, $ulicezdor, $psczdor ,$typz2, $jmenoz2, $prijmeniz2, $ulicez2, $obecz2, $pscz2, $telefonz2, $emailz2, $obecz2dor, $ulicez2dor, $pscz2dor)
        {
            $datumnar = new DateTime($datumnar);
            $datumnar=$datumnar->format ("Y.m.d");
            $sql = 'INSERT INTO tbzak VALUES(default,:idCas, :jmeno, :prijmeni, :pohlavi, :datumnar, '
                . ':ulice, :obec,  :psc, :spadovazs,'
                . ' :typz, :jmenoz, :prijmeniz, :ulicez, :obecz, :pscz,'
                . ' :telefon, :email, :obeczdor, :ulicezdor, :psczdor, :typz2, :jmenoz2, :prijmeniz2, :ulicez2, :obecz2, :pscz2, :telefonz2, :emailz2, :obecz2dor, :ulicez2dor, :pscz2dor,0)';
            return $this->db->insert ($sql, [
                
                ':idCas'=>$idCas,
                ':jmeno' => $jmeno,
                ':prijmeni' => $prijmeni,
                ':pohlavi' => $pohlavi,
                ':datumnar' => $datumnar,
                ':ulice' => $ulice,
                ':obec' => $obec,
                ':psc' => $psc,
                ':spadovazs'=>$spadovazs,
                ':jmenoz' => $jmenoz,
                ':prijmeniz' => $prijmeniz,
                ':ulicez' => $ulicez,
                ':obecz' => $obecz,
                ':pscz' => $pscz,
                ':telefon' => $telefon,
                ':email'=>$email,
                ':obeczdor'=>$obeczdor,
                ':ulicezdor'=>$ulicezdor,
                ':psczdor'=>$psczdor,
                ':jmenoz2' => $jmenoz2,
                ':prijmeniz2' => $prijmeniz2,
                ':ulicez2' => $ulicez2,
                ':obecz2' => $obecz2,
                ':pscz2' => $pscz2,
                ':telefonz2' => $telefonz2,
                ':emailz2'=>$emailz2,
                ':obecz2dor'=>$obecz2dor,
                ':ulicez2dor'=>$ulicez2dor,
                ':pscz2dor'=>$pscz2dor,
                ':typz'=>$typz,
                ':typz2'=>$typz2
            ]);
        }
        
        
        function getZakyByIdCas ($idcas)
        {
            $sql = 'select * from tbzak where IdCas=:idcas';
            return $this->db->selectAll ($sql, [':idcas' => $idcas]);
        }
        function getCountOfZakyByIdCas($idcas)
        {
    
            $sql = 'select Count(jmeno) as count from tbzak where IdCas=:idcas';
            return $this->db->selectOne  ($sql, [':idcas' => $idcas]);
        }
    }
