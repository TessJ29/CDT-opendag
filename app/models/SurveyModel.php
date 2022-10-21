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
        $this->db->query("SELECT * FROM `Survey`");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleQuestion($id)
    {
        $this->db->query("SELECT * FROM Survey WHERE Id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateCountry($post)
    {
        // var_dump($post);
        // exit();
        $this->db->query("UPDATE `Survey`
                          SET Answer = :Answer,
                              Description = :Description,
                          WHERE Id = :id");

        $this->db->bind(':Answer', $post["Answer"], PDO::PARAM_STR);
        $this->db->bind(':Description', $post["Description"], PDO::PARAM_STR);
        $this->db->bind(':id', $post["Id"], PDO::PARAM_INT);


        return $this->db->execute();
    }
}
