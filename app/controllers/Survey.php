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
        $result = $this->surveyModel->getQuestions();

        $row = '';
        $button = '';
        $i = 0;
        foreach ($result as $questions) {
            // var_dump($questions);
            $i++;

            $row = $questions->Question;

            $button = "<div class='buttons'>
                        <input type='submit' class='btn' data-set-step='3' value='Volgende'>
                       </div>
            ";
        }


        $data = [
            'Question' => $row
        ];

        $this->view('Survey', $data);
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $_POST = FILTER_INPUT_ARRAY(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $this->surveyModel->createAnswer($_POST);

            } catch (PDOException $e) {
                echo "Het inserten van het record is niet gelukt";
            }

            $this->view('Survey');
        }
    }
}
