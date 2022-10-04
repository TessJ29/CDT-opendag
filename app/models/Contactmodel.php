<?php

class Contactmodel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}