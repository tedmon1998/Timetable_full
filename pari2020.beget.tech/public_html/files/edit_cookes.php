<?php require_once './security/security.php' ?>
<html>

<head>
    <!-- кодировка сайта -->
    <meta charset="utf-8">
    <!-- краткое описание сайта -->
    <meta name="description" content="Изменение настроек">
    <!-- для поисковиков описание сайта (более подробное) -->
    <meta name="keywords" content="Изменение настроек в помощнике студента">
    <!-- для мобилок, чтобы оптимизировалось -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width" />
    <!-- подлючение стилей -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/edit_cookes.css">
    <link rel="stylesheet" href="../css/global_header.css">
    <!-- иконка сайта -->
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- загрузка скриптов -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <!-- название сайта -->
    <title>Помощник студента СурГУ</title>
</head>
<!-- Отоброжаемое тело страницы -->

<body>
    <div class="wrapper">
        <?php require_once './global_header.php' ?>

        <div class="container">
            <!-- <p>Информацию которая вы введете сюда будет храниться у нас и при повторном посещении нашего сайта, вы автоматически получите правильное расписание</p> -->
            <div class="title_settings">
                <h2>Настройки</h2>
            </div>
            <div class="radio-container setting_border">
                <div class="form-item radio-btn nth-3">
                    <a id="general_settings" onclick="general_settings()" href="#">Общие</a>
                </div>
                <span class="line"> </span>
                <div class="form-item radio-btn nth-3">
                    <a id="password_settings" onclick="password_settings()" href=" #">Пароль</a>
                </div>
                <span class="line"> </span>
                <div class="form-item radio-btn nth-3">
                    <a id="mail_settings" onclick="mail_settings()" href="#">Почта</a>
                </div>
            </div>
            <br>
            <?php
            if (isset($_SESSION['login'])) {
                echo "<div id='res'></div>";
            } else {
                exit("<meta http-equiv='refresh' content='0; url= $host_url'>");
            }
            ?>
        </div>
    </div>


    <script>
        $(window).on('load', general_settings());

        function colors(param) {
            document.getElementById('general_settings').style.color = "#000";
            document.getElementById('password_settings').style.color = "#000";
            document.getElementById('mail_settings').style.color = "#000";
            document.getElementById(param).style.color = "#fff";
        };

        function general_settings() {
            $("#res").load("./general_settings.php");
            colors('general_settings');
        };

        function password_settings() {
            $("#res").load("./password_settings.php");
            colors('password_settings');
        };

        function mail_settings() {
            $("#res").load("./mail_settings.php");
            colors('mail_settings');
        };
    </script>
</body>

</html>