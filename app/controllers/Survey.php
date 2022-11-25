<?php

class Survey extends Controller
{
    private $surveyModel;

    public function __construct()
    {
        $this->surveyModel = $this->model('SurveyModel');
    }

    public function index()
    {
        $this->view('Survey');
    }

    public function create()
    {
        // var_dump($_POST);
        // var_dump($_SERVER);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {

                $this->surveyModel->createAnswer($_POST);
                header("Location:" . URLROOT . "/index");


            } catch (PDOException $e) {
                echo "Het inserten van het record is niet gelukt";
                header("Location:" . URLROOT . "/survey");

            }

            $this->view('Survey');
        }
    }
}
