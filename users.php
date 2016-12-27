<?php require_once ('core/config.php'); ?>

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пользователи | Муравей</title>

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
                <h1>Пользователи</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p><a href="<?= URL ?>users/edit.php" type="button" class="btn btn-success btn-block">Создать нового пользователя</a></p>

                    <h3>Список существующий пользователей <span class="badge"><?= count($usersArr) ?></span></h3>

                    <p><i>Выбор пользователя осуществляется по клику на строку таблицы.</i></p>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ФИО</th>
                            <th>E-mail</th>
                            <th>Права доступа</th>
                            <th>Дата создания</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach ($usersArr as $user) :?>
                        <tr class="tr-link" onclick="document.location = '<?= URL ?>users/edit.php';">
                            <td><?= $i++ ?></td>
                            <td><?= $user['full_name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['permissions'] == 1 ? 'Ко всем заказам' : 'Только к своим заказам'; ?></td>
                            <td><?= $user['create_date'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= URL ?>js/bootstrap.min.js"></script>
</body>
</html>