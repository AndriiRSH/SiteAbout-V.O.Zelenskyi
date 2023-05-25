<?php

class FileModel
{
    public $db;
    public function save($data)
    {
        $title = $data['title'];
        $content = $data['content'];
        $image = $data['image'];

        $sql_about = "INSERT INTO `posts` (`title`, `content`, `image`) VALUES ('$title', '$content', '$image')";
        return $this->db->query($sql_about);

    }
}