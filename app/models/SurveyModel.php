<?php

class SurveyModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createAnswer($post)
    {
        $this->db->query("INSERT INTO User_answer
                                      (Id, UserId, Answer, Answer2, Answer3, Answer4, Answer5)
                          VALUES      (NULL, 2, :Answer, :Answer2, :Answer3, :Answer4, :Answer5)");

        $this->db->bind(':Answer', $post['Answer'], PDO::PARAM_STR);
        $this->db->bind(':Answer2', $post['Answer2'], PDO::PARAM_STR);
        $this->db->bind(':Answer3', $post['Answer3'], PDO::PARAM_STR);
        $this->db->bind(':Answer4', $post['Answer4'], PDO::PARAM_STR);
        $this->db->bind(':Answer5', $post['Answer5'], PDO::PARAM_STR);

        return $this->db->execute();
    }
}
