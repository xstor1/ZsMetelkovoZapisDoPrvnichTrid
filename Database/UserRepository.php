<?php
class UserRepository {

    private $db;

    function __construct(Database $db) {
        $this->db = $db;
    }

    function getUser($username) {
        $sql = 'SELECT * FROM tbuser where username=:username ';

        return $this->db->selectOne($sql, [':username' => $username]);
    }
}