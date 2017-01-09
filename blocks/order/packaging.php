<?php
$packagingArr = [
    [
        'name' => 'Коробка для маленьких речей',
        'unit' => 'шт.',
    ],
    [
        'name' => 'Коробка для середніх речей',
        'unit' => 'шт.',
    ],
    [
        'name' => 'Коробка для великих речей',
        'unit' => 'шт.',
    ],
    [
        'name' => 'Коробка для гардеробу',
        'unit' => 'шт.',
    ],
    [
        'name' => 'Картонний лист',
        'unit' => 'шт.',
    ],
    [
        'name' => 'Бульбашкова плівка 120см/100м',
        'unit' => 'м. п.',
    ],
    [
        'name' => 'Стрейч-плівка',
        'unit' => 'м. п.',
    ],
    [
        'name' => 'Пакувальний папір',
        'unit' => 'м. п.',
    ],
    [
        'name' => 'Скотч',
        'unit' => 'шт.',
    ],
];
?>

<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">Упаковка</div>
    <div class="panel-body">
        <div class="visible-lg visible-md visible-sm">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Наименование</th>
                    <th width="150px">Кол-во</th>
                    <th width="150px">Еденица измерения</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($packagingArr as $packaging) : ?>
                    <tr>
                        <td><h5><?= $packaging['name'] ?></h5></td>
                        <td>
                            <div class="form-group no-margin-bottom">
                                <input type="text" class="form-control">
                            </div>
                        </td>
                        <td>
                            <div class="form-group no-margin-bottom">
                                <input type="text" class="form-control input-sm" placeholder="<?= $packaging['unit'] ?>"
                                       readonly>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="visible-xs">
            <?php $i=0; foreach ($packagingArr as $packaging) : ?>
                <?php $i++; ?>

                <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <p><?= $packaging['name'] ?></p>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group no-margin-bottom">
                            <?php if ($i==1) : ?>
                                <label>Кол-во</label>
                            <?php endif;?>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group no-margin-bottom">
                            <?php if ($i==1) : ?>
                                <label>Ед. измерения</label>
                            <?php endif;?>
                            <input type="text" class="form-control input-sm" placeholder="<?= $packaging['unit'] ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>