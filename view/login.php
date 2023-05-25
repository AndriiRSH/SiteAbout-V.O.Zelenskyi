<html lang="ua">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>
<body>


<!-- END HEADER -->
<!-- FORM -->
<div class="container">
    <div class="row">

        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" method="POST" action="?action=login">
                <span class="heading">Авторизація</span>
                <div class="form-group">
                    <input name="username" type="text" class="form-control" id="inputEmail" placeholder="Login">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="form-group">
                    <button name="LoginSubmit" type="submit">Вхід</button>
                </div>
                <div class="text-right" id="reg_link">
                    <a href="?action=register" class="text-info">Реєстрація</a>
                </div>
            </form>
        </div>

    </div><!-- /.row -->
</div><!-- /.container -->

</body>
</html>