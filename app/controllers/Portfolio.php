<?php
    class Portfolio extends Controller
    {
        public function __construct()
        {

        }

        public function index()
        {
            $this->view("portfolio/index");
        }


        public function details($id)
        {
            $data = [
                "id" => $id
            ];
            
            $this->view("portfolio/details", $data);
        }
    }
?>