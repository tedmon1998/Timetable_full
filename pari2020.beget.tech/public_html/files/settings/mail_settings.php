<?php require_once '../security/security.php'; ?>
<html>

<head>
    <?php require_once './head.php'; ?>
    <style>
        .link_mail_settings {
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
            $query = ("SELECT `email` FROM `student` WHERE `login` = '" . $session . "'; ");
            $result = mysqli_query($link, $query);
            $data = mysqli_fetch_assoc($result);
            mysqli_close($link);
            echo '
            <form method="POST" action="./mail_settings.php">
                <div class="wrapper__form">
                    <div class="form__email">
                    <input type="email" placeholder="Новая почта" name="email" autocomplete="off" 
                    required value="' . $data['email'] . '">
                    </div>
                    <span class="span_line"></span>
                    <div class="form__pas_0">
                        <input type="password" placeholder="Пароль" name="pas_0" autocomplete="off" pattern=".{3,}" required>
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
        isset($_POST['email'])
    ) {
        $link = mysqli_connect($host, $user, $password, $database);
        $query = ("SELECT `password` FROM `security` WHERE `login` = '" . $session . "';");
        $result = mysqli_query($link, $query);
        $data = mysqli_fetch_assoc($result);
        $host_pass = $data['password'];

        $pas_0 = mysqli_real_escape_string($link, htmlentities($_POST['pas_0']));
        $email = mysqli_real_escape_string($link, htmlentities($_POST['email']));

        if (password_verify($pas_0, $host_pass)) {
            $query = ("UPDATE `student` 
            SET `email`='" . $email . "' WHERE `login`='" . $session . "' ;");
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
    }

    ?>

</body>

</html>