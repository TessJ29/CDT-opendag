<?php
class Registrations extends Controller
{

    public function __construct()
    {
        $this->RegistrationsModel = $this->model('RegistrationsModel');
    }



    public function index()
    {
        $rows = $this->RegistrationsModel->getRegistrations();

        $data = [
            "rows" => $rows
        ];

        $this->view('Registrations', $data);
    }
}