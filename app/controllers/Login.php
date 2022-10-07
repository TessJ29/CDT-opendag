<?php
    class Login extends Controller
    {
        private RegisterModel $registerModel;
        public function __construct()
        {
           $this->registerModel = $this->model('RegisterModel');
        }

        public function index()
        {
            $this->view("login");
        }

        public function login()
        {
            $this->registerModel->loginRegister();
        }
    }
?>