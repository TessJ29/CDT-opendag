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
        $this->db->query("UPDATE `country`
                          SET Name = :Name,
                              CapitalCity = :capitalCity,
                              Continent = :continent,
                              Population = :population
                          WHERE Id = :id");

        $this->db->bind(':Name', $post["Name"], PDO::PARAM_STR);
        $this->db->bind(':capitalCity', $post["CapitalCity"], PDO::PARAM_STR);
        $this->db->bind(':continent', $post["Continent"], PDO::PARAM_STR);
        $this->db->bind(':population', $post["Population"], PDO::PARAM_INT);
        $this->db->bind(':id', $post["Id"], PDO::PARAM_INT);


        return $this->db->execute();
    }
}
