<?php

    class Database
    {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;
        private $dbHandler;

        public function __construct()
        {
            $conn = "mysql:host=$this->dbHost;dbname=$this->dbName";

            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            } catch(PDOException $e) {
               echo $e->getMessage();
            } 
        }

        public function query($sql)
        {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        public function bind($param, $value, $type = null)
        { 
            if(is_null($type))
            {
                if(is_int($value))
                {
                    $type = PDO::PARAM_INT;
                }
                    else if(is_bool($value))
                {
                    $type = PDO::PARAM_BOOL;
                }
                    else
                {
                    $type = PDO::PARAM_STR;
                }
            } 
            $this->statement->bindValue($param, $value, $type);
        }

        public function execute()
        {
            return $this->statement->execute();
        }
        public function resultSet()
        {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        public function single()
        {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        public function rowCount()
        {
            return $this->statement->rowCount();
        }
    }