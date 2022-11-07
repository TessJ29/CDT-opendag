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
        $this->db->query("SELECT * FROM `Question`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleQuestion($id)
    {
        $this->db->query("SELECT * FROM Question WHERE Id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateAnswer($post)
    {
        // var_dump($post);
        // exit();
        $this->db->query("UPDATE `User_answer`
                          SET Answer = :Answer,
                          WHERE Id = :id");

        $this->db->bind(':Answer', $post["Answer"], PDO::PARAM_STR);
        $this->db->bind(':id', $post["Id"], PDO::PARAM_INT);


        return $this->db->execute();
    }
}
