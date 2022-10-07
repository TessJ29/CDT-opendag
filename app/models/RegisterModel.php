<?php

class RegisterModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    //Register:
    public function createRegister()
    {
        $this->db->query('INSERT INTO `register` (`firstname`, `lastname`, `email`, `password`, `userrole`, `activated`) VALUES (:firstname, :lastname, :email, :password, :userrole, :activated)');
        $this->db->bind(':firstname', $_POST['firstname']);
        $this->db->bind(':lastname', $_POST['lastname']);
        $this->db->bind(':email', $_POST['email']);
        $this->db->bind(':password', $_POST['password']);
        $this->db->bind(':userrole', "customer");
        $this->db->bind(':activated', 1);
        $this->db->execute();
        header('Location: /login');
    }
    //login:
    public function loginRegister()
    {
        $this->db->query('SELECT * From `register` where `email` = :email And `password` = :password And `activated` = :activated');

        $this->db->bind(':email', 'email');
        $this->db->bind(':password', 'password');
        $this->db->bind(':activated', 'customer');
        $this->db->execute();
        
        
        header('Location: /admin');
    }

    //admin formulier laat zien, update, delete
    public function getAccount()
    {
        $this->db->query('SELECT * FROM register');
        $result = $this->db->resultSet();
        return $result;
    }
    public function deleteAccount($id)
    {
        $this->db->query("DELETE FROM register WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
    public function getSingleAccount($id)
    {
        $this->db->query("SELECT * FROM register WHERE id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }
    public function updateAccount($post)
    {
       $this->db->query("UPDATE `register` 
                         SET firstname = :firstname,
                             lastname = :lastname,
                             email = :email,
                             password = :password,
                             userrole = :userrole
                         WHERE id = :id");

        $this->db->bind(':firstname', $post["firstname"], PDO::PARAM_STR);
        $this->db->bind(':lastname', $post["lastname"], PDO::PARAM_STR);
        $this->db->bind(':email', $post["email"], PDO::PARAM_STR);
        $this->db->bind(':password', $post["password"], PDO::PARAM_STR);
        $this->db->bind(':userrole',$post["userrole"], PDO::PARAM_STR);
        $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
        return $this->db->execute();
    }
}