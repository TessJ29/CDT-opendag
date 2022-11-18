<?php

class RegistrationsModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getRegistrations()
    {
        $this->db->query("SELECT * FROM `opendayregistration`;");
        return $this->db->resultSet();
    }
}