<?php require_once '../security/security.php'; ?>
<html>

<head>
    <?php require_once './head.php'; ?>
    <style>
        .link_password_settings {
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
            echo '
            <form method="POST" action="./password_settings.php">
                <div class="wrapper__form">
                    <div class="form__pas_0">
                        <input type="password" placeholder="Старый пароль" name="pas_0" autocomplete="off" pattern=".{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__pas_1">
                        <input type="password" placeholder="Новый пароль" name="pas_1" autocomplete="off" pattern=".{3,}" required>
                    </div>
                    <span class="span_line"></span>
                    <div class="form__pas_2">
                        <input type="password" placeholder="Повторите пароль" name="pas_2" autocomplete="off" pattern=".{3,}" required>
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
        isset($_POST['pas_0']) &&
        isset($_POST['pas_1']) &&
        isset($_POST['pas_2'])
    ) {
        require_once '../connect/.htconnect';
        $session = $_SESSION['login'];
        $link = mysqli_connect($host, $user, $password, $database);
        $pas_0 = mysqli_real_escape_string($link, htmlentities($_POST['pas_0']));
        $pas_1 = mysqli_real_escape_string($link, htmlentities($_POST['pas_1']));
        $pas_2 = mysqli_real_escape_string($link, htmlentities($_POST['pas_2']));

        if ($pas_1 == $pas_2) {
            $query = ("SELECT `password` FROM `security` WHERE `login` = '" . $session . "';");
            $result = mysqli_query($link, $query);
            $data = mysqli_fetch_assoc($result);
            $host_pass = $data['password'];

            if (password_verify($pas_0, $host_pass)) {

                $pass = password_hash($pas_1, PASSWORD_DEFAULT);
                $query = ("UPDATE `security` 
                SET `password`='" . $pass . "' WHERE `login`='" . $session . "' ;");
                $result = mysqli_query($link, $query);
                mysqli_close($link);
                if ($result == 1) {
                    echo "<script>alert('Операция прошла успешно');</script>";
                    exit("<meta http-equiv='refresh' content='0;'>");
                } else {
                    echo "<script>alert('Произошла ошибка');</script>";
                    exit("<meta http-equiv='refresh' content='0;'>");
                }
            } else {
                mysqli_close($link);
                echo "<script>alert('Неверный пароль');</script>";
                exit("<meta http-equiv='refresh' content='0;'>");
            }
        } else {
            mysqli_close($link);
            echo "<script>alert('Пароль не совпадают');</script>";
            exit("<meta http-equiv='refresh' content='0;'>");
        }
    }

    ?>

</body>

</html>