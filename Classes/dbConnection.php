<?php

class DataBase
{
    private $host = "localhost";
    private $dbname = "dbcafe";
    private $username = "root";
    private $password = "";
    private $db;

    public function __construct()
    {
        $connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
        try {
            $this->db = new PDO($connectionString, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Database connection failed" . $e->getMessage();
        }
    }


    public function getRow($query, $parameters)
    {
        return $this->db->query($query)->execute($parameters);
    }

    public function getRows($query)
    {
        return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query($query, $parameters = null)
    {
        $result = ($parameters) ? $this->db->prepare($query)->execute($parameters) : $this->db->prepare($query)->execute();
        return $result;
    }

    public function dbCount($tbname){
        return $this->query("SELECT COUNT(*) FROM {$tbname}");
    }

    public function insertQuery($tbname, $columns, $values){
        $placeholders = rtrim(str_repeat('?,', count($values)), ',');
        $query = "INSERT INTO $tbname ($columns) VALUES ($placeholders)";
        $statement = $this->db->prepare($query);
        return $statement->execute($values);
    }

    public function deleteQuery($tbname, $condition,$id){
        return $this->db->query("DELETE FROM {$tbname} WHERE $condition = ?")->execute([$id]);
    }

}

?>