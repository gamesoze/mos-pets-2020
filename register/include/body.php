<body>
<div class="container col col-xl-6 col-lg-8 col-md-11 col-sm-12">
    <form class="form" action="/register/" method="post">
        <div class="logins">
            <div class="head-label">
                <h3>Регистрация</h3>
            </div>
            <?php
            if ($error != "NULL") {
                ?>
                <div class="form-group">
                    <label for="<?php echo ($success) ? 'green' : 'error' ?>"
                           class="<?php echo ($success) ? 'green' : 'error' ?>"><?php echo $error ?></label>
                </div>
            <?php } ?>
            <div class="form-goup">
                <label for="">Фамилия</label>
                <div class="row">
                    <input name="lastname" type="text" class="form-control col-lg-6 col-md-6 col-sm-12 col-xs-12"
                           value="<?php if (isset($_POST["lastname"])) echo $_POST["lastname"] ?>">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm сщд-xs">
                        Используйте буквы русского алфавита.<br>Поле обязательно для заполнения.
                    </small>
                </div>
            </div>
            <div class="form-goup">
                <label for="">Имя</label>
                <div class="row">
                    <input name="firstname" type="text" class="form-control col-lg-6 col-md-6 col-sm-12"
                           value="<?php if (isset($_POST["firstname"])) echo $_POST["firstname"] ?>">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm">
                        Используйте буквы русского алфавита.<br>Поле обязательно для заполнения.
                    </small>
                </div>
            </div>
            <div class="form-goup">
                <label for="">Отчество</label>
                <div class="row">
                    <input name="Fname" type="text" class="form-control col-lg-6 col-md-6 col-sm-12"
                           value="<?php if (isset($_POST["Fname"])) echo $_POST["Fname"] ?>">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm">
                        Используйте буквы русского алфавита.<br>Поле обязательно для заполнения.
                    </small>
                </div>
            </div>
            <div class=" form-group">
                <label for="">Почта</label>
                <div class="row">
                    <input name="email" type="email" class="form-control col-lg-6 col-md-6 col-sm-12"
                           placeholder="exaple@mail.com"
                           value="<?php if (isset($_POST["email"])) echo $_POST["email"] ?>">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm">
                        Не рекомендуется указывать чужой или корпоративный адрес электронной почты.
                    </small>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Телефон</label>
                <div class="row">
                    <input name="login" type="phone" class="form-control col-lg-6 col-md-6 col-sm-12"
                           placeholder="+7-(000)-000-00-00"
                           value="<?php if (isset($_POST["login"])) echo $_POST["login"] ?>">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm">
                        Для подтверждения номера мобильного телефона вам будет направлено SMS с кодом подтверждения.
                    </small>
                </div>
            </div>
        </div>
        <div class="password">
            <div class="form-group">
                <label for="">Пароль</label>
                <div class="row">
                    <input name="pwd" type="password" class="form-control col-lg-6 col-md-6 col-sm-12"
                           placeholder="************">
                    <small id="passwordHelpBlock" class="form-text text-muted col-lg-6 col-md-6 col-sm">
                        Пароль не может быть короче 8 символов и должен состоять из латинских букв и цифр.
                    </small>
                </div>
            </div>
            <div class="form-group">
                <label for="">Подтвердите пароль</label>
                <input name="pwd_repeat" type="password" class="form-control col-lg-6 col-md-6 col-sm-12"
                       placeholder="************">
            </div>
        </div>
        <div class="buttons">
            <div class="form-group">
                <input class="btn btn-primary form-control" type="submit" value="Зарегистрироваться">
            </div>
            <div class="form-group">
                <a href="/login" class="btn form-control btn-primary" role="button">Уже
                    Зарегистрировался</a>
            </div>
        </div>
    </form>
</div>
</body>
