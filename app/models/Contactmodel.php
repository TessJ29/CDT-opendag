<?php

class Contactmodel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createContactFormRow ()
    {
        $this->db->query('INSERT INTO `contactform` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Message`) VALUES (:FirstName, :LastName, :Email, :PhoneNumber, :Message)');
        $this->db->bind(':FirstName', $_POST['FirstName']);
        $this->db->bind(':LastName', $_POST['LastName']);
        $this->db->bind(':Email', $_POST['Email']);
        $this->db->bind(':PhoneNumber', $_POST['PhoneNumber']);
        $this->db->bind(':Message', $_POST['Message']);
        $this->db->execute();

        header('Location: ../views/contact');
    }
}