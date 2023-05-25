<?php

class MainModel
{
    public $db;

    public function getAllPostData(){
        $query = "SELECT * FROM posts";
        $stmt = $this->db->query($query);
        return $stmt;
    }
}