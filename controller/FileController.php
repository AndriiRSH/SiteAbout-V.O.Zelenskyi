<?php
class FileController
{
    public $model;

    public function uploadAction(){
        $message = '';
        if(isset($_POST['submit'])){
//             Валідація даних форми
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_FILES['image']['name']; // отримуємо ім'я файлу зображення

            // Завантаження зображення
            $uploadDir =  "../assetsall//" . $image;; // шлях до директорії завантаження
            $imagePath = $uploadDir . basename($image); // повний шлях до зображення

            // Збереження нового поста в базу даних з посиланням на зображення
            $result = $this->model->save(['title' => $title, 'content' => $content, 'image' => $imagePath]);
        }
        return require_once('../view/upload.php');
    }

    public function addPostAction()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_FILES['image']['name'];

            $targetDir = "./assetsall/";
            $targetFile = $targetDir . basename($_FILES['image']['name']);

            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

            $imagePath = "./assetsall/" . $image;

            $this->model->save(['title' => $title, 'content' => $content, 'image' => $imagePath]);
        }
        return require_once('../view/upload.php');
    }

}