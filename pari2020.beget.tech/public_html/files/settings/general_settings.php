<?php require_once '../security/security.php'; ?>
<html>

<head>
    <?php require_once './head.php'; ?>
    <style>
        .link_general_settings {
            color: #fff;
        }
    </style>
</head>
<!-- Отоброжаемое тело страницы -->

<body>
    <div class="wrapper">
        <!-- <p>Информацию которая вы введете сюда будет храниться у нас и при повторном посещении нашего сайта, вы автоматически получите правильное расписание</p> -->
        <?php require_once '../global_header.php'; ?>
        <div class="container">
            <?php
            require_once './settings_header.php';
            require_once '../connect/.htconnect';
            $session = $_SESSION['login'];
            $link = mysqli_connect($host, $user, $password, $database);
            $query = ("SELECT `surname`, `name`, `patronymic`, `group`, `division_2`, `division_3`
            FROM `student` WHERE `login` = '" . $session . "'; ");
            $result = mysqli_query($link, $query);
            mysqli_close($link);
            $data = mysqli_fetch_assoc($result);

            $surname = $data['surname'];
            $name = $data['name'];
            $patronymic = $data['patronymic'];
            $group = $data['group'];
            $div_2 = $data['division_2'];
            $div_3 = $data['division_3'];
            $email = $data['email'];
            $checked = "checked";
            echo '
        <form method="POST" action="./general_settings.php">
            <div class="wrapper__form">
                <div class="form__surname">
                    <input type="text" id="surname" placeholder="Фамилия: Ivanov" name="surname" autocomplete="off" pattern="[A-Za-zА]{3,}"
                        required value="' . $surname . '">
                </div>
                <span class="span_line"></span>
                <div class="form__name">
                    <input type="text" placeholder="И мя: Ivan" name="name" autocomplete="off" pattern="[A-Za-zА]{3,}" 
                    required value="' . $name . '">
                </div>
                <span class="span_line"></span>
                <div class="form__patronymic">
                    <input type="text" placeholder="Отчество: Ivanovich" name="patronymic" autocomplete="off" pattern="[A-Za-zА]{3,}"
                        required value="' . $patronymic . '">
                </div>
                <span class="span_line"></span>
                <div class="form__group">
                    <input type="text" placeholder="Группа: 20494" name="group" autocomplete="off" pattern="[0-9]{5}"
                        required value="' . $group . '">
                </div>
                <span class="span_line"></span>
                <p>Выберите подгруппы, при разделении на 2 и на 3</p>
                <div class="radio-container">
                    <div class="form-item radio-btn nth-2">
                    <input type="radio" name="radio_2" id="radio1" value="1" 
                    ';
            if ($div_2 == 1) {
                echo $checked;
            }
            echo '>
                    <label for="radio1">1</label>
                    </div>
                    <div class="form-item radio-btn nth-2">
                    <input type="radio" name="radio_2" id="radio2" value="2"
                    ';
            if ($div_2 == 2) {
                echo $checked;
            }
            echo '>
                    <label for="radio2">2</label>
                    </div>
                </div>

                <div class="radio-container">
                    <div class="form-item radio-btn nth-3">
                    <input type="radio" name="radio_3" id="radio3" value="1"
                    ';
            if ($div_3 == 1) {
                echo $checked;
            }
            echo '>
                    <label for="radio3">1</label>
                    </div>
                    <div class="form-item radio-btn nth-3">
                    <input type="radio" name="radio_3" id="radio4" value="2"
                    ';
            if ($div_3 == 2) {
                echo $checked;
            }
            echo '>
                    <label for="radio4">2</label>
                    </div>
                    <div class="form-item radio-btn nth-3">
                    <input type="radio" name="radio_3" id="radio5" value="3"
                    ';
            if ($div_3 == 3) {
                echo $checked;
            }
            echo '>
                    <label for="radio5">3</label>
                    </div>
                </div>
            </div>
            <div class="form__submit">
                <button type="submit">Сохранить</button>
            </div>
        </form>';

            ?>
        </div>
    </div>

    <?php
    header('Content-Type: text/html; charset=utf-8');
    if (
        isset($_POST['surname']) &&
        isset($_POST['name']) &&
        isset($_POST['patronymic']) &&
        isset($_POST['group']) &&
        isset($_POST['radio_2']) &&
        isset($_POST['radio_3'])
    ) {
        $link = mysqli_connect($host, $user, $password, $database);
        $surname = mysqli_real_escape_string($link, htmlentities($_POST['surname']));
        $name = mysqli_real_escape_string($link, htmlentities($_POST['name']));
        $patronymic = mysqli_real_escape_string($link, htmlentities($_POST['patronymic']));
        $group = mysqli_real_escape_string($link, htmlentities($_POST['group']));
        $radio_2 = mysqli_real_escape_string($link, htmlentities($_POST['radio_2']));
        $radio_3 = mysqli_real_escape_string($link, htmlentities($_POST['radio_3']));
        $query = ("UPDATE `student`
SET `surname`='" . $surname . "', `name`='" . $name . "', `patronymic`='" . $patronymic . "',
`group`='" . $group . "', `division_2`='" . $radio_2 . "', `division_3`='" . $radio_3 . "' WHERE `login`='" . $session . "' ;");
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        if ($result == 1) {
            echo "<script>alert('Операция прошла успешно');</script>";
            exit("<meta http-equiv='refresh' content='0;'>");
        } else {
            echo "<script>alert('Произошла ошибка');</script>";
            exit("<meta http-equiv='refresh' content='0;'>");
        }
    }

    ?>

</body>

</html>