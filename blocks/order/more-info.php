<div class="panel panel-<?= PANEL_COLOR ?>">
    <div class="panel-heading">Дополнительная информация</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label>Ориентировочное время работы, часов</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label>Возможность припарковать транспорт</label>
                    <select class="form-control">
                        <option></option>
                        <option>Да</option>
                        <option>Нет</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <div class="visible-lg-block visible-md-block visible-xs-block">
                        <label>Сборка / разборка </label>
                    </div>
                    <div class="visible-sm-block">
                        <label>&nbsp;<br>Сборка / разборка </label>
                    </div>
                    <select class="form-control">
                        <option></option>
                        <option>Да</option>
                        <option>Нет</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label>Вес груза свыше 100 кг</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label>Цена за кг, грн</label>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="form-group">
                    <label>Сумма</label>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>