<?php
    class CasyRepository {
        
        private $db;
        
        function __construct(Database $db) {
            $this->db = $db;
        }
        
        function getCasy() {
            $sql = 'SELECT * FROM tbcasy';
            
            return $this->db->selectAll ($sql);
        }
        function getCasyById($id)
        {
            $sql = 'select * from tbcasy where Id=:id';
            return $this->db->selectOne ($sql,[':id'=>$id]);
        }
        function createCas($Datum, $Pocet)
        {
            $sql = 'INSERT INTO tbcasy VALUES(default,:datum,:pocet)';
            return $this->db->insert($sql,[':datum'=>$Datum,':pocet'=>$Pocet]);
        }
        function UpdateCas($Id,$Datum, $Pocet)
        {
            $sql = 'UPDATE tbcasy set Datum =:datum, Pocet=:pocet where Id=:id';
            return $this->db->insert($sql,[':id'=>$Id,':datum'=>$Datum,':pocet'=>$Pocet]);
        }
        function DeleteCas($id)
        {
            $sql='delete from tbcasy where Id=:id';
            return $this->db->delete ($sql,[':id'=>$id]);
        }
        function DeleteAllCasy()
        {
            $sql='TRUNCATE TABLE tbcasy';
            return $this->db->delete ($sql,[]);
        }
        function DeleteCasById($id)
        {
            $sql='delete from tbcasy where Id=:id';
            return $this->db->delete ($sql,[':id'=>$id]);
        }
    }