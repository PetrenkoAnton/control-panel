<?php
    $packagingArr = [
        [
            'name' => 'Коробка для маленьких речей',
            'price' => '12,00',
        ],
        [
            'name' => 'Коробка для середніх речей',
            'price' => '18,00',
        ],
        [
            'name' => 'Коробка для великих речей',
            'price' => '35,00',
        ],
        [
            'name' => 'Коробка для гардеробу',
            'price' => '50,00',
        ],
        [
            'name' => 'Картонний лист',
            'price' => '18,00',
        ],
        [
            'name' => 'Бульбашкова плівка 120см/100м',
            'price' => '800,00',
        ],
        [
            'name' => 'Стрейч-плівка',
            'price' => '120,00',
        ],
        [
            'name' => 'Пакувальний папір',
            'price' => '1,00',
        ],
        [
            'name' => 'Скотч',
            'price' => '20,00',
        ],
    ];
?>

<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">Упаковка</div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Наименование</th>
                <th width="100px">Кол-во</th>
                <th width="100px">Цена</th>
                <th width="150px">Сумма</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($packagingArr as $packaging) :?>
                <tr>
                    <td><h5><?= $packaging['name'] ?></h5></td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" placeholder=<?= $packaging['price'] ?> readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group  no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td></td>
                <td colspan="3">
                    <div class="form-group  no-margin-bottom">
                        <label>Общая сумма</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>