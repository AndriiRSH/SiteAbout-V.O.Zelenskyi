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
        <h1>This is posts dashboard!</h1>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Posts ID</th>
                    <th>Posts Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($posts as $post){?>
                <tr>
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
