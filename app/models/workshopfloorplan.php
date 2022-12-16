<?php

class workshopfloorplan
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function workshopClasses()
    {
        $this->db->query("SELECT * FROM `opendayinfo`;");
        return $this->db->resultSet();
    }
}