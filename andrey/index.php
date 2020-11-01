<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>андрей ебашит тут</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../lib/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/andrey.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/js/andrey.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="title">
                <div class="menu">
                    <img src="../assets/menu.png" id="menu">
                </div>pets.mos.ru<div class="user">
                    <a href="../login/"><img src="../assets/account.png" id="account"></a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="databasemenu">
                <div id="pets">
                    Животные в приюте
                    </div>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="options" id="ready" autocomplete="off" checked  onclick="button('toggle')"> Готовы к переезду
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="onmedinsp" autocomplete="off" onclick="button('toggle')"> Проходят медкомиссию
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="new" autocomplete="off"  onclick="button('toggle')"> Поступили недавно
                    </label>
                  </div>
                <div class="actions">
                    <div class="button1" id="sort">
                        <button type="button" class="btn btn-link">Сортировать</button>
                    </div>
                    <div class="button1" id="export">
                        <button type="button" class="btn btn-link">Сформировать отчет</button>
                    </div>
                    <div class="button2">
                        <button class="btn btn-primary" id="add">Добавить</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <form action="." class="form">
                    <div class="innerform">
                        <img src="../assets/frame.png" id="search">
                        <input type="search" placeholder="Поиск по имени / ID" id="formsearch" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="output">
                <div class="columns">
                    <div class="column" id="cardno">Карточка</div>
                    <div class="column" id="specie">Вид</div>
                    <div class="column" id="name">Кличка</div>
                    <div class="column" id="sex">Пол</div>
                    <div class="column" id="dateborn">Возраст, год</div>
                    <div class="column" id="dateincome">Дата поступления</div>
                    <div class="column" id="aviaryno">Вольер №</div>
                    <div class="column" id="id">Идентификационный номер</div>
                    <div class="column" id="status">Статус</div>
                    <div class="column" id="empty"></div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">   
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
                <div class="card" id="card1">
                    <div class="cardcolumn" id="cardno">1665з-20</div>
                    <div class="cardcolumn" id="specie">Собака</div>
                    <div class="cardcolumn" id="name">Василий</div>
                    <div class="cardcolumn" id="sex">М</div>
                    <div class="cardcolumn" id="dateborn">20/7/20</div>
                    <div class="cardcolumn" id="dateincome">20/7/20</div>
                    <div class="cardcolumn" id="aviaryno">100</div>
                    <div class="cardcolumn" id="id">643094100731522</div>
                    <div class="cardcolumn" id="status">Вакцинация</div>
                    <div class="cardcolumn" id="empty">ред.</div>
                </div>
            </div>
        </div>
  		<div class="footer">
            <div class="footertext">©TBPofTHW 2020</div>
        </div>
    <!--   <div class="overlay">
            <div class="overlay-main">
                
            </div>
        </div>-->
    </div>
</body>



