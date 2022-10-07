<?php
    class Register extends Controller
    {
        private RegisterModel $registerModel;
        public function __construct()
        {
            $this->registerModel = $this->model('RegisterModel');
        }

        public function index()
        {
            $this->view("register");
        }

        public function create()
        {   
           $this->registerModel->createRegister();   
        }
    }
?>