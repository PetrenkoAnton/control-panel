<?php require_once ('core/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кабинет пользователя | Муравей</title>

    <link href="<?= URL ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>css/bootstrap-yeti.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once ('blocks/comments.php');?>

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <a href="<?= URL ?>dashboard.php"><img src="<?= URL ?>images/logo_ru.png" alt="Logo" width="200px"></a>

            <?php require_once ('blocks/navbar.php');?>

            <div class="page-header">
                <h1>Кабинет пользователя</h1>
            </div>

            <p><a href="<?= URL ?>order/new.php" type="button" class="btn btn-success btn-block">Создать заказ</a></p>

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= URL ?>js/bootstrap.min.js"></script>
</body>
</html>