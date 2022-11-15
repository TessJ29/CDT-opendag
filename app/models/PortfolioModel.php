<?php

class PortfolioModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM `portfolio`;");
        $result = $this->db->resultSet();
        return $result;
    }
    
    public function get($id)
    {
        $this->db->query("SELECT * FROM `portfolio` WHERE id = :id;");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        $result = $this->db->resultSet();
        return $result;
    }

    public function delete($id) 
    {
        $this->db->query("DELETE FROM `portfolio` WHERE `id` = :id;");
        $this->db->bind(":id", $id, PDO::PARAM_INT);
        $this->db->execute();
    }
}
