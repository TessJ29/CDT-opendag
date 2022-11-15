<?php
    class Portfolio extends Controller
    {
        public function __construct()
        {
            $this->model = $this->model("PortfolioModel");
        }

        public function index()
        {
            $data = $this->model->getAll();

            $this->view("portfolio/index", $data);
        }


        public function details($id)
        {
            $data = $this->model->get($id);
            
            $this->view("portfolio/details", $data);
        }
    }
?>