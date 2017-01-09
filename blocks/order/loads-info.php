<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">
        <nobr>Предметы весом больше 100 кг.</nobr>
        <nobr>Информация о грузе</nobr>
    </div>
    <div class="panel-body">

        <div class="visible-lg visible-md visible-sm">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Наименование</th>
                            <th width="150px">Кол-во</th>
                            <th width="150px">Вес еденицы, кг</th>
                            <th width="50px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
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
                                <button class="btn btn-sm btn-danger" type="button"><span
                                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button class="btn btn-sm btn-info" type="button">Добавить еще</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="visible-xs">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group no-margin-bottom">
                            <label>Наименование</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group no-margin-bottom">
                            <label>Кол-во</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group no-margin-bottom">
                            <label>Вес еденицы, кг</label>
                            <input type="text" class="form-control input-sm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group no-margin-bottom">
                            <label>Наименование</label>
                            <input type="text" class="form-control input-sm">
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
                            <label>Вес еденицы, кг</label>
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