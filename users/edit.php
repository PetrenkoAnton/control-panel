<?php require_once ('../core/config.php'); ?>

<?php
$usersArr = [
    [
        'full_name' => 'Константинопольский Николай',
        'email' => 'n.konstantinopolsky@microsoft.com',
        'permissions' => '1',
        'create_date' => '20.02.2017',
    ],
    [
        'full_name' => 'Воробьёв Мечислав',
        'email' => 'm.vorobev@microsoft.com',
        'permissions' => '0',
        'create_date' => '12.02.2017',
    ],
    [
        'full_name' => 'Усачёва Лия',
        'email' => 'l.uchaseva@microsoft.com',
        'permissions' => '0',
        'create_date' => '15.01.2017',
    ],
    [
        'full_name' => 'Шалдыбин Ипатий',
        'email' => 'i.shaldybin@microsoft.com',
        'permissions' => '1',
        'create_date' => '17.01.2017',
    ],
    [
        'full_name' => 'Филиппов Давид',
        'email' => 'd.fillipov@microsoft.com',
        'permissions' => '1',
        'create_date' => '05.01.2017',
    ],
];

$rand = rand(0,4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактирование пользователя | Муравей</title>

    <link href="<?= URL ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL ?>css/bootstrap-yeti.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>css/style.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once ('../blocks/comments.php');?>

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <a href="<?= URL ?>dashboard.php"><img src="<?= URL ?>images/logo_ru.png" alt="Logo" width="200px"></a>

            <?php require_once ('../blocks/navbar.php');?>

            <div class="page-header">
                <h1>Редактирование пользователя</h1>
            </div>

            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <p>Несколько раз обновите страницу.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3><?= $usersArr[$rand]['full_name']?></h3>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ФИО</label>
                                <input type="text" class="form-control" value="<?= $usersArr[$rand]['full_name']?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" class="form-control" value="<?= $usersArr[$rand]['email']?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Права доступа</label>
                                <select class="form-control">
                                    <?php if($usersArr[$rand]['permissions'] == 0) { ?>
                                        <option>Только к своим заказам</option>
                                        <option>Ко всем заказам</option>
                                    <?php } else { ?>
                                        <option>Ко всем заказам</option>
                                        <option>Только к своим заказам</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <a href="<?= URL ?>users.php" type="button" class="btn btn-success">Сохранить</a>
                                </div>
                                <div class="btn-group" role="group">
                                    <a href="<?= URL ?>users.php" type="button" class="btn btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= URL ?>js/bootstrap.min.js"></script>
</body>
</html>