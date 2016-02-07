<?php
//@todo add in PHPUnit tests if time permits.

namespace DAO;

use \PDO;

abstract class BaseDAO
{
    public $connection;

    //@todo check if connection connection already exists
    public function __construct()
    {
        $this->dbConnect();
    }

    //@todo credentials could be handled more securely
    private function dbConnect() {
        try {
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=test',
                'root',
                ''
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (\PDOException  $e) {
            die("Connection to DB failed: " . $e->getMessage());
        }
    }


    //@todo support for 'fields' if time permits.
    //@todo "User" stuff - There might be a neater way to deal with models
    //@todo PDO binding instead of variable substitution if possible
    public function find($key, $value)
    {
        try {
            $stmt = $this->connection->prepare("
                SELECT *
                 FROM {$this->_tableName}
                 WHERE $key = '{$value}'
                 LIMIT 1
        ");
            //$stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException  $e) {
            die("Failed to execute query: " . $stmt->query() . " for reasons: " . $e->getMessage());
        }
    }

    //@todo this is all vulnerable to sqli.  Fix up before submission if time permits.
    public function findAll($orderby, $offset, $limit = 10)
    {
        try {
            $stmt = $this->connection->prepare("
                SELECT *
                 FROM {$this->_tableName}
                 ORDER BY $orderby
                 LIMIT $limit
                 OFFSET $offset
        ");
            //$stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException  $e) {
            die("Failed to execute query: " . $stmt->query() . " for reasons: " . $e->getMessage());
        }
    }


}