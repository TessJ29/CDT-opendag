<?php
    class Authentication extends Controller
    {

        private $userModel;

        public function __construct()
        {
            $this->userModel = $this->model("UserModel");
            session_start();
        }

        public function index()
        {
        }

        public function message($code)
        {
            $message = match($code) 
            {
                "wrong-credentials" => "Je hebt foute gegevens gebruikt om in te loggen.",
                "success-login" => "Inloggen is gelukt!",
                "success-register" => "Account is aangemaakt, je kunt nu inloggen.",
                "already-exists" => "Er is al een account aangemaakt met dit mailadress.",
                "not-logged-in" => "Je moet voor deze pagina ingelogd zijn",
                "permission" => "Je hebt geen toegang tot deze pagina"
            };
            $this->view("authentication/message", $message);
        }

        public function login()
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                // Sanitize
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                // Get user by email
                $data = $this->userModel->getByEmail($_POST["email"])[0];
                
                // Verify
                if(!password_verify($_POST["password"], $data->password)) {
                    header("location: message/wrong-credentials");
                }

                // Session
                $_SESSION["data"] = [
                    "firstname" => $data->firstname,
                    "lastname" => $data->lastname,
                    "role" => $data->role,
                    "email" => $data->email
                ];

                var_dump($_SESSION);

                // Redirect back 
                header("location: message/success-login");
            } else {
                $this->view("authentication/login");
            }
    
        }

        public function register($callback = NULL)
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                // Sanitize
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                // Check if user already exists by finding email
                if($this->userModel->getByEmail($_POST["email"])) {
                    return header("location: message/already-exists");
                }

                // Hash the password
                $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

                // Create the user
                $this->userModel->create($_POST);

                // Redirect back 
                header("location: message/success-register");
            } else {
                $this->view("authentication/register");
            }
        }

        public function logout()
        {
            session_destroy();
        }
    }
?> 