<?php require_once ('../core/config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание нового заказа | Муравей</title>

    <link href="<?= URL ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>css/bootstrap-yeti.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="visible-lg-block visible-md-block">
            <a href="<?= URL ?>"><img src="<?= URL ?>images/logo_ru.png" alt="Logo" width="200px"></a>
            </div>

            <div class="visible-sm-block visible-xs-block">
                <a href="<?= URL ?>dashboard.php"><img src="<?= URL ?>images/logo_ru.png" alt="Logo" width="150px"></a>
            </div>

            <?php require_once ('../blocks/navbar.php');?>

            <div class="page-header">
                <h1>Создание нового заказа</h1>
            </div>

            <form>
                <?php require_once ('../blocks/order/main.php');?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php require_once ('../blocks/order/adress_download.php');?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php require_once ('../blocks/order/adress_upload.php');?>
                    </div>
                </div>

                <?php require_once ('../blocks/order/more-info.php');?>

                <?php require_once ('../blocks/order/transpost-movers-ver1.php');?>

                <?php require_once ('../blocks/order/transpost-movers-ver2.php');?>

                <?php require_once ('../blocks/order/packaging.php');?>

                <?php require_once ('../blocks/order/total-cost-ver1.php');?>

                <?php require_once ('../blocks/order/total-cost-ver2.php');?>

                <?php require_once ('../blocks/order/description.php');?>

                <a href="<?= URL ?>dashboard.php" type="button" class="btn btn-success btn-block">Создать</a>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= URL ?>js/bootstrap.min.js"></script>
</body>
</html>