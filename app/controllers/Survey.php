<?php

class Survey extends Controller
{
    private $surveyModel;

    public function __construct()
    {
        // var_dump($_POST);
        $this->surveyModel = $this->model('SurveyModel');
    }

    public function index()
    {
        $this->view('Survey');
    }

    public function SurveyMessage()
    {
        $this->view('SurveyMessage');
    }

    public function create()
    {
        $data = [
            'title' => '',
            'QuestionError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $result = $this->surveyModel->CreateAnswer($_POST);

            $data = [
                'title' => '',
                'QuestionError' => ''
            ];

            $data = $this->validateQuestionForm($data);

            if (empty($data['QuestionError'])) {
                // var_dump($result);
                if ($result) {
                    $data['title'] = "<p>Wij hebben uw antwoorden opgeslagen</p>";
                } else {
                    $data['QuestionError'] = "<p>Het opslaan van uw antwoorden is niet gelukt</p>";
                }
                header('Location: /index');
            } else {
                header('Location: /index');

            }
        }
        $this->view('Survey', $data);
    }

    public function validateQuestionForm($data)
    {
        if (empty($data['answer']) || empty($data['answer2']) || empty($data['answer3']) || empty($data['answer4']) || empty($data['answer5'])) {
            $data['QuestionError'] = 'U heeft nog niet alle vragen beantwoord.';
        } else {
            $data['QuestionError'] = 'Bedankt voor het invullen van deze vragenlijst.';
        }
        return $data;
    }
}
