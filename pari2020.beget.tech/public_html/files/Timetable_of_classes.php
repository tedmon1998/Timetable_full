<?php require_once './security/security.php' ?>
<!DOCTYPE html>
<html>

<head>
    <!-- кодировка сайта -->
    <meta charset="utf-8">
    <!-- краткое описание сайта -->
    <meta name="description" content="Расписание занятий СурГУ">
    <!-- для поисковиков описание сайта (более подробное) -->
    <meta name="keywords" content="Расписание на всю неделю, Сургутский Государственный Университет">
    <!-- для мобилок, чтобы оптимизировалось -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width" />
    <!-- подлючение стилей -->
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/Timetable_of_classes.css?v=1.0.0">
    <link rel="stylesheet" type="text/css" href="/css/foo.css?v=1.0.0">
    <!-- иконка сайта -->
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- иконки для настройки -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- предварительная загрузка js -->
    <link rel=preload href="/js/jquery-3.4.1.min.js" as="script">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <!-- название сайта -->
    <title>Расписание зантяий</title>
</head>

<body>
    <div class="position">
        <header class="header">
            <nav class="nav">
                <div><a href="#pon" class="nav_link monday"></a></div>
                <div><a href="#vtor" class="nav_link tuesday"></a></div>
                <div><a href="#sred" class="nav_link wednesday"></a></div>
                <div><a href="#chet" class="nav_link thursday"></a></div>
                <div><a href="#pyat" class="nav_link friday"></a></div>
                <div><a href="#sub" class="nav_link saturday"></a></div>
            </nav>
        </header>
        <?php require_once './global_header.php' ?>
        <div class="container">
            <div class="wrapper_block">
                <div class="even_odd">
                    <div class="even_odd__link"><a href="#" class="nav_link" id="even" onclick="even();">ЧИСЛИТЕЛЬ</a></div>
                    <div class="even_odd__link"><a href="#" class="nav_link" id="odd" onclick="odd();">ЗНАМЕНАТЕЛЬ</a></div>
                </div>
            </div>
            <div id="pon"></div>
            <div id="vtor"></div>
            <div id="sred"></div>
            <div id="chet"></div>
            <div id="pyat"></div>
            <div id="sub"></div>

            <script type="text/javascript" src="/js/Timetable_of_classes.js"></script>
            <?php
            $den = date("W") + 1;
            if ($den % 2 == 0) {
                echo "<script> $('#even').addClass('active');</script> ";
            } else {
                echo "<script>$('#odd').addClass('active');</script> ";
            }
            require_once 'print_timetable.php';
            if (isset($_SESSION['login'])) {
                print_timetable();
            } else {
                exit("<meta http-equiv='refresh' content='0; url= https://surgusa.ru/'>");
            }


            ?>

            <div id="res"></div>

            <script type="text/javascript">
                function even() {
                    $("#res").load("/files/dni/even.php");
                }

                function odd() {
                    $("#res").load("/files/dni/odd.php");
                }
            </script>

            <script>
                $('.even_odd').on('click', 'a', function() {
                    $('.even_odd a').removeClass('active');
                    $(this).addClass('active');
                });
            </script>

</body>

</html>