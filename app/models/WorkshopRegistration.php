<?php
    class WorkshopRegistration
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function create($data)
        {
            $this->db->query("INSERT INTO `workshopregistration` (`id`, `firstname`, `lastname`, `email`, `phone`, `workshop`) VALUES (NULL, :firstname, :lastname, :email, :phone, :workshop);");
            $this->db->bind(":firstname", $data["firstname"], PDO::PARAM_STR);
            $this->db->bind(":lastname", $data["lastname"], PDO::PARAM_STR);
            $this->db->bind(":email", $data["email"], PDO::PARAM_STR);
            $this->db->bind(":phone", $data["phone"], PDO::PARAM_STR);
            $this->db->bind(":workshop", $data["workshop"], PDO::PARAM_STR);

            $this->db->execute();
        }

        public function getAll()
        {
            $this->db->query("SELECT * FROM `workshopregistration`;");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>