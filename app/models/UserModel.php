<?php
    class UserModel
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function create($data)
        {
            $this->db->query("INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `role`) VALUES (NULL, :firstname, :lastname, :email, :password, :phone, :role);");
            $this->db->bind(":firstname", $data["firstname"], PDO::PARAM_STR);
            $this->db->bind(":lastname", $data["lastname"], PDO::PARAM_STR);
            $this->db->bind(":email", $data["email"], PDO::PARAM_STR);
            $this->db->bind(":password", $data["password"], PDO::PARAM_STR);
            $this->db->bind(":phone", $data["phone"], PDO::PARAM_STR);
            $this->db->bind(":role", 0, PDO::PARAM_INT);
            $this->db->execute();
        }

        public function getByEmail($email)
        {
            $this->db->query("SELECT * FROM `user` WHERE email = :email;");
            $this->db->bind(":email", $email);
            $result = $this->db->resultSet();
            return $result;
        }
        public function getAll()
        {
            $this->db->query("SELECT * FROM `user`;");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>