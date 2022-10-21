<?php
    class RegisterWorkshop extends Controller
    {

        private $model;

        public function __construct()
        {
            $this->model = $this->model("WorkshopRegistration");
        }

        public function index()
        {
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $this->model->create($data);
                $this->view("register_workshop/success");
            }
                else
            {
                $this->view("register_workshop/index");
            }
        }
    }
?>