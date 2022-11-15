<?php

class SurveyModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getQuestions()
    {
        $this->db->query("SELECT *
                          FROM Question");

        $result = $this->db->resultSet();

        return $result;
    }

    public function createAnswer($post)
    {
        $this->db->query("INSERT INTO Answer
                                      (Id, Answer)
                          VALUES      (NULL, :Answer)");
                          
        $this->db->bind(':Answer', $_POST['Answer']);

        return $this->db->execute();
    }

}
