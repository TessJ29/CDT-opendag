<?php
    class Authentication extends Controller
    {

        private $userModel;

        public function __construct()
        {
            $this->userModel = $this->model("UserModel");
        }

        public function index()
        {
        }

        public function login()
        {
            // Sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Get user by email
            $data = $this->userModel->getByEmail($_POST["email"]);

            // Verify password
            if(!password_verify($_POST["password"], $data)) {
                return header("location: " . URLROOT);
            }
    
            var_dump($data);
        }

        public function register($callback = NULL)
        {
            // Sanitize
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Check if user already exists by finding email
            if($this->userModel->getByEmail($_POST["email"])) {
                return header("location: " . URLROOT . "?e=already-exists");
            }

            // Hash the password
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            // Create the user
            $this->userModel->create($_POST);

            // Redirect back 
            header("location: " . URLROOT);
        }
    }
?> 