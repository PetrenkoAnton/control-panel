<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание нового заказа | Муравей</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-yeti.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="/"><img src="/images/logo_ru.png" alt="Logo" width="200px"></a>

            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Кабинет пользователя</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">История заказов</a></li>
                        <li><a href="#">Документы</a></li>
                        <li><a href="#">Пользователи</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Настройки <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Изменить пароль</a></li>
                                <li><a href="#">Выйти</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="page-header">
                <h1>Создание нового заказа</h1>
            </div>

            <form>
                <?php require_once ('../blocks/order/main.php');?>

                <div class="row">
                    <div class="col-lg-6">
                        <?php require_once ('../blocks/order/adress_download.php');?>
                    </div>
                    <div class="col-lg-6">
                        <?php require_once ('../blocks/order/adress_upload.php');?>
                    </div>
                </div>

                <?php require_once ('../blocks/order/transpost-movers-ver1.php');?>

                <?php require_once ('../blocks/order/transpost-movers-ver2.php');?>

                <?php require_once ('../blocks/order/packaging.php');?>

                <a href="/dashboard.php" type="button" class="btn btn-success btn-block">Создать</a>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>