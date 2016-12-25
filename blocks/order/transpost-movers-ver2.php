<?php 
    $transportArr = [
        'Газель до 1,5 тонн',
        'Авто до 5 тонн',
    ];
?>

<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">Транспорт и муверы (вторая версия)</div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead>
            <tr>
                <th></th>
                <th width="100px">Кол-во</th>
                <th width="100px">Кол-во часов</th>
                <th width="100px">Цена</th>
                <th width="100px">Подача</th>
                <th width="150px">Сумма</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><h5>Муверы</h5></td>
                <td>
                    <div class="form-group no-margin-bottom">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="form-group no-margin-bottom">
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td>
                    <div class="form-group no-margin-bottom">
                        <input type="text" class="form-control" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-group no-margin-bottom">
                        <input type="text" class="form-control" readonly>
                    </div>
                </td>
                <td>
                    <div class="form-group no-margin-bottom">
                        <input type="text" class="form-control" readonly>
                    </div>
                </td>
            </tr>
            <?php foreach ($transportArr as $transport) : ?>
                <tr>
                    <td><h5><?= $transport ?></h5></td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="3"></td>
                <td colspan="3">
                    <div class="form-group  no-margin-bottom">
                        <label>Общая сумма</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <table class="table table-striped ">
            <thead>
            <tr>
                <th></th>
                <th width="200px">Расстояние, км</th>
                <th width="200px">Цена за км</th>
                <th width="150px">Сумма</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($transportArr as $transport) : ?>
                <tr>
                    <td><h5><?= $transport ?></h5></td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <input type="text" class="form-control" readonly>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="2"></td>
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