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
        $questions = $this->surveyModel->getQuestions();

        $row = '';
        foreach ($questions as $value) {

            $row .= "<tr>
            <td>$value->Question</td>
            </tr>";
        }

        $data = [
            'Question' => $row
        ];

        $this->view('Survey', $data);
    }

    public function update($id = NULL)
    {
        var_dump($_SERVER);exit();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $this->surveyModel->updateAnswer($_POST);

            header("Location: " . URLROOT . "/survey");
        } else {
            $row = $this->surveyModel->getSingleQuestion($id);
            $data = [
                'row' => $row

            ];

            $this->view("survey/update", $data);
        }
    }
}