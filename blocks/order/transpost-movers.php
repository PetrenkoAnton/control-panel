<?php
$transportArr = [
    'Авто до 1,5 тонн',
    'Авто до 5 тонн',
    'Авто до 10 тонн',
    'Авто до 20 тонн',
];
?>

<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">Транспорт и муверы</div>
    <div class="panel-body">
        <div class="visible-lg visible-md visible-sm">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Муверы</th>
                    <th width="150px">Кол-во</th>
                    <th width="150px">Кол-во часов</th>
                    <th width="150px">Время начала работы</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><h5>Муверы на загрузку</h5></td>
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
                            <input type="text" class="form-control">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><h5>Муверы на разгрузку</h5></td>
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
                            <input type="text" class="form-control">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <hr>

            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Транспорт</th>
                    <th width="150px">Кол-во</th>
                    <th width="150px">Кол-во часов</th>
                    <th width="150px">Время начала работы</th>
                    <th width="50px"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <select class="form-control">
                                <option></option>
                                <?php foreach ($transportArr as $transport) : ?>
                                    <option><?= $transport ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </td>
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
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group no-margin-bottom">
                            <select class="form-control">
                                <option></option>
                                <?php foreach ($transportArr as $transport) : ?>
                                    <option><?= $transport ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </td>
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
                            <input type="text" class="form-control">
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger" type="button"><span class="glyphicon glyphicon-trash"
                                                                                  aria-hidden="true"></span></button>
                    </td>
                </tr>

                <tr>
                    <td colspan="5">
                        <button class="btn btn-sm btn-info" type="button">Добавить еще</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="visible-xs">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Муверы на загрузку</p>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во часов</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group no-margin-bottom">
                            <label>Время начала работы</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Муверы на разгрузку</p>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во часов</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group no-margin-bottom">
                            <label>Время начала работы</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Транспорт</p>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Тип авто</label>
                            <select class="form-control">
                                <option></option>
                                <?php foreach ($transportArr as $transport) : ?>
                                    <option><?= $transport ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во часов</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Время начала работы</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                </div>

            </div>

            <div class="well well-sm">
                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Тип авто</label>
                            <select class="form-control">
                                <option></option>
                                <?php foreach ($transportArr as $transport) : ?>
                                    <option><?= $transport ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label>Кол-во часов</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>Время начала работы</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="button" class="btn btn-sm btn-danger">Удалить</button>
                    </div>

                </div>



            </div>

            <button type="button" class="btn btn-sm btn-info btn-block">Добавить еще</button>

        </div>
    </div>
</div>