<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Document</title>
</head>
<body>
<nav class="nav nav-tabs nav-stacked">
    <a class="nav-link active" href="?action=dashboard">Dashboard</a>
    <a class="nav-link" href="?action=upload">Create</a>
    <a class="nav-link" href="?action=logout">LogOut</a>
</nav>
<div class="container">
<!--    --><?php //if (!empty($message)){?>
<!--    <div class="alert alert-primary" role="alert" id="msg">-->
<!--        --><?php //echo $message; ?>
<!--    </div>-->
<!--    --><?php //} ?>
    <div class="posts col-9">
        <div class="row title-table">
            <h2>Додавання допису</h2>
        </div>
        <div class="row add-post">
            <form action="?action=fileUpload" method="post" enctype="multipart/form-data">
                <div class="col mb-4">
                    <input value="" name="title" id="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Вміст допису</label>
                    <textarea name="content" id="content" class="form-control" rows="6"></textarea>
                </div>
                <div class="input-group col mb-4 mt-4">
                    <input name="image" type="file" class="form-control" id="image" required>
<!--                    <label class="input-group-text" for="uploadFile">Upload</label>-->
                </div>
                <div class="col col-6">
                    <button name="submit" class="btn btn-primary" type="submit">Додавання допису</button>
                </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>