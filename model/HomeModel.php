<?php

class HomeModel{
    public $db;

    public function getPostData(){
        $query = "SELECT * FROM posts";
        $stmt = $this->db->query($query);
        return $stmt;
    }

}
