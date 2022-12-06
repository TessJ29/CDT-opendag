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

        $data = [
            'title' => '',
            'QuestionError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'title' => '',
                'QuestionError' => ''
            ];

            $data = $this->validateQuestionForm($data);

            if (empty($data['QuestionError'])) {
                $result = $this->surveyModel->CreateAnswer($_POST);

                if ($result) {
                    $data['title'] = "<p>Wij hebben uw antwoorden opgeslagen</p>";
                } else {
                    echo "<p>Het opslaan van uw antwoorden is niet gelukt</p>";
                }
                // header('Refresh:3; url=' . URLROOT . '/survey');
            } else {
                // header('Refresh:3; url=' . URLROOT . '/survey');
            }
        }
        // try {

        //     $this->surveyModel->createAnswer($_POST);
        //     header("Location:" . URLROOT . "/index");


        // } catch (PDOException $e) {
        //     echo "Het inserten van het record is niet gelukt";
        //     header("Location:" . URLROOT . "/survey");

        // }

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
