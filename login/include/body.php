<body>
<div class="container col-xl-4 col-lg-5 col-md-7" id="container">
    <form action="/login/" class="form" method="post">
        <?php
        if ($error != "NULL") {
            ?>
            <div class="form-group">
                <label for="<?php echo ($success) ? 'green' : 'error' ?>"
                       class="<?php echo ($success) ? 'green' : 'error' ?>"><?php echo $error ?></label>
            </div>
        <?php } ?>
        <div class="title">
            <div class="title1">
                Доступ к информационным ресурсам города Москвы
            </div>
            <div class="title2">
                Вход на Официальный сайт учета бездомных животных mos.pet
            </div>
        </div>
        <div class="form-group">
            <div class="form-group">
                <input name="login" type="login" class="form-control" placeholder="Введите логин"
                       value="<?php if (isset($_POST["login"])) echo $_POST["login"] ?>">
            </div>
            <div class="form-group">
                <input name="pwd" type="password" class="form-control" placeholder="Введите пароль">
            </div>
            <div class="form-group form-check">
                <input name="remember" type="checkbox" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1" id="remember">Запомнить</label>
                <a href="/" class="btn form-control btn-link" role="button" id="restorepass">Восстановить пароль</a>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block form-control" type="submit" value="Войти">
                <div class="goreg">
                    Нет аккаунта? <a href="/register" class="btn form-control btn-link" role="button">Зарегистрироваться</a>
                </div>
            </div>
    </form>
</div>
</body>
