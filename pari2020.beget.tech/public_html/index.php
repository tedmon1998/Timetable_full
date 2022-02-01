<?php
if (isset($_SESSION['security'])) {
    exit("<meta http-equiv='refresh' content='0; url = https://surgusa.ru/files/Timetable_of_classes.php'>");
}

if ($_POST["group"] && $_POST["class"] && $_POST["magazine_issue"] && $_POST["radio_2"] && $_POST["radio_3"]) {
    setcookie("group", $_POST["group"], strtotime("+365 days")); // strtotime(+365 seconds days)
    setcookie("class", $_POST["class"], strtotime("+365 days"));
    setcookie("magazine_issue", $_POST["magazine_issue"], strtotime("+365 days"));
    setcookie("radio_2", $_POST["radio_2"], strtotime("+365 days"));
    setcookie("radio_3", $_POST["radio_3"], strtotime("+365 days"));
    exit("<meta http-equiv='refresh' content='0; url= edit_cookes.php'>");
}
?>
<html lang="ru">

<head>
    <!-- кодировка сайта -->
    <meta charset="UTF-8">
    <!-- краткое описание сайта -->
    <meta name="keywords" content="Сургу расписание, помощник студента, навигатор сургу, расписание пар">
    <!-- для поисковиков описание сайта (более подробное) -->
    <meta name="description" content="Помощник студента, где вы сможете узнать расписание на всю неделю, время начала и конеца пар, ФИО преподавателей,баллы за участие внеучебных мероприятиях">
    <!-- для интернет explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- для мобилок, чтобы оптимизировалось -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width" />
    <!-- подлючение стилей -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/edit_cookes.css?v=1.3">
    <link rel="stylesheet" href="./css/index.css?v=4.3">
    <!-- подлючение js для иконок страницы -->
    <script src="./js/icon.js"></script>
    <!-- иконка сайта -->
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- название сайта -->
    <title>Помощник студента СурГУ</title>
</head>
<!-- Отоброжаемое тело страницы -->

<body>
    <div class="wrapper" id="authorization">
        <!---------------- Авторизация ----------------------->
        <div class="wrapper__title">
            <h2>Авторизация</h2>
        </div>
        <div class="wrapper__authorization">
            <div class="wrapper__form">
                <form method="POST" action="./files/security/authorization.php">
                    <div class="form__username">
                        <input type="text" name="login" placeholder="логин: группа_фио" autocomplete="off" pattern="{8,9}" required>
                    </div>
                    <span></span>
                    <div class="form__password">
                        <input type="password" name="password" placeholder="пароль" autocomplete="off" required>
                    </div>
            </div>
            <div class="wrapper__container">
                <div class="wrapper__circle">
                    <div class="circle__submit">
                        <button type="submit"><i class='fas fa-play'></i></button>
                    </div>
                </div>
                </form>
            </div>

            <div class="wrapper__forgot">
                <div><span>забыли ваш пароль?</span></div>
                <div><a href="#">кликните сюда</a></div>
            </div>
        </div>
        <div class="wrapper__scroll_registration">
            <a href="#registration">Регистрация <i class="fas fa-angle-down"></i></a>
        </div>
        <!---------------------------------------------------->
    </div>
    <div class="wrapper">
        <!---------------- Регистрация ----------------------->
        <div class="wrapper__title" id="registration">
            <h2>Регистрация</h2>
        </div>
        <div class="wrapper__registration">
            <form method="POST" action="./files/security/registration.php">
                <div class="wrapper__form">
                    <div class="form__surname">
                        <input type="text" placeholder="Фамилия: Ivanov" name="surname" autocomplete="off" pattern="[A-Za-zА]{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__name">
                        <input type="text" placeholder="Имя: Ivan" name="name" autocomplete="off" pattern="[A-Za-zА]{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__patronymic">
                        <input type="text" placeholder="Отчество: Ivanovich" name="patronymic" autocomplete="off" pattern="[A-Za-zА]{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__group">
                        <input type="text" placeholder="Группа: 20494" name="group" autocomplete="off" pattern="[0-9]{5}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__pas_1">
                        <input type="password" placeholder="Пароль" name="pas_1" autocomplete="off" pattern=".{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__pas_2">
                        <input type="password" placeholder="Повторите пароль" name="pas_2" autocomplete="off" pattern=".{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__email">
                        <input type="email" placeholder="Почта" name="email" autocomplete="off" required>
                    </div>
                    <span class="span_line"></span>
                    <p>Выберите подгруппы, при разделении на 2 и на 3</p>
                    <div class="radio-container">
                        <div class="form-item radio-btn nth-2">
                            <input type="radio" name="radio_2" id="radio1" value="1">
                            <label for="radio1">1</label>
                        </div>
                        <div class="form-item radio-btn nth-2">
                            <input type="radio" name="radio_2" id="radio2" value="2">
                            <label for="radio2">2</label>
                        </div>
                    </div>

                    <div class="radio-container">
                        <div class="form-item radio-btn nth-3">
                            <input type="radio" name="radio_3" id="radio3" value="1">
                            <label for="radio3">1</label>
                        </div>
                        <div class="form-item radio-btn nth-3">
                            <input type="radio" name="radio_3" id="radio4" value="2">
                            <label for="radio4">2</label>
                        </div>
                        <div class="form-item radio-btn nth-3">
                            <input type="radio" name="radio_3" id="radio5" value="3">
                            <label for="radio5">3</label>
                        </div>
                    </div>
                </div>
                <div class="form__submit">
                    <button type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
        <div class="wrapper__scroll_authorization">
            <a href="#authorization">Авторизация <i class="fas fa-angle-up"></i></a>
        </div>
        <!---------------------------------------------------->
    </div>

</body>

</html>