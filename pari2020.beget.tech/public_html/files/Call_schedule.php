<?php require_once './security/security.php' ?>

<!DOCTYPE html>
<html>

<head>
    <!-- кодировка сайта -->
    <meta charset="utf-8">
    <!-- краткое описание сайта -->
    <meta name="description" content="Расписание СурГУ">
    <!-- для поисковиков описание сайта (более подробное) -->
    <meta name="keywords" content="Какие пары в понедельник, вторник, среду, четверг, пятницу, субботу, готовое расписание занятий">
    <!-- для мобилок, чтобы оптимизировалось -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="width=device-width" />
    <!-- подлючение стилей -->
    <link rel="stylesheet" type="text/css" href="/css/Call_schedule.css">
    <!-- иконки для настройки -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- иконка сайта -->
    <link data-n-head="ssr" rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- название сайта -->
    <title>Расписание звонков</title>
</head>

<body>
    <div class="position">
        <?php require_once './global_header.php' ?>
        <div class="container">
            <div class="block">
                РАСПИСАНИЕ ЗВОНКОВ
                <div class="line"></div>
                <div>
                    <ol>
                        <li class="list">
                            08:00 - 09:30
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            09:40 - 11:10
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            11:20 - 12:50
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            13:20 - 14:50
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            15:00 - 16:30
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            16:40 - 18:10
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            18:20 - 19:50
                            <p class="paragraph">
                                перерыв 10 минут
                            </p>
                        </li>
                        <li class="list">
                            20:00 - 21:30
                        </li>
                    </ol>
                </div>
            </div>
        </div><br><br><br>
    </div>
</body>

</html>